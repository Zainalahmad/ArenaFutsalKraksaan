<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Booking extends CI_Controller {

	public function __construct(){
	
			parent::__construct();
        $this->load->helper(array('form','url'));
		$this ->load ->model('m_account');
        $this ->load ->model('m_admin');
		if($this->session->userdata('id') != TRUE ){
            $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
            redirect('akun');
        };

      }


    public function get_harga(){
        $id_lapangan=$this->input->post('id_lapangan');
        $jam=$this->input->post('jam');
        $data=$this->m_account->get_harga($id_lapangan,$jam);
        echo json_encode($data);
    }


    function booking()
	{
		$id_user = $this->input->post('id_users');
		$tanggal_booking = $this->input->post('tanggal_booking');
		$lapangan = $this->input->post('lapangan');
		$jam_mulai = $this->input->post('jam_mulai');
		$durasi = $this->input->post('durasi');
		$total_harga = $this->input->post('total_harga');

		$data = array(
			'id_users' => $id_user,
			'tgl_booking' => $tanggal_booking,
			'id_lapangan' => $lapangan,
			'jam_booking' => $jam_mulai,
			'durasi' => $durasi,
			'total_transaksi' => $total_harga,
			'status_bayar' => "Belum Bayar",

		);
		$this->m_account->add_booking($data);
		redirect(base_url('booking'), 'refresh');
		//$this->load->view('payment',$data);
	}


	public function index(){
		$user=$this->m_account->getuser($this->session->userdata('id'));
		$id_user = $this->session->userdata('id');
		$lapangan=$this->m_account->lapangan();
		$detail_booking = $this->m_account->view_booking($id_user);

		//$seat_qty=$this->input->get('seat_qty');
		// $rute=$this->m_account->booking($id)->result();
		$data = array(
			'user' => $user,
			'lapangan' => $lapangan,
			'detail_booking' => $detail_booking,
			'panelbody' =>'booking',
			// 'rute' =>$rute,
		);
		$this->load->view('panelbody', $data);
	}

	function add_buktitf()
	{
		$id = $this->input->post('id');
		$config['upload_path']          = './gudang/images/bukti_tf/';
		// $config['allowed_types']        = 'png|jpg|PNG';
		$config['allowed_types']        = '*';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;	

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('bukti_tf'))
		{
			$bukti_tf = '';
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('booking/add_buktitf', $error);
		}
		else
		{
			$upload_data = $this->upload->data();
			$data = array('upload_data' => $upload_data);
			$bukti_tf = $upload_data['file_name'];
		}

		$data = array(
			'bukti_tf' => $bukti_tf,

			);
		$this->m_account->add_buktitf($data,'transaksi');
		redirect('booking');
	}

	function pembayaran($id_transaksi){
		$trans 	= $this->m_account->view_transaksi($id_transaksi);

		$config['upload_path']		= './gudang/images/bukti_tf/';
			$config['allowed_types']	= 'gif|jpg|png|jpeg';
			$config['max_size']			= '2400';//dalam kb
			$config['max_width']		= '2024';
			$config['max_height']		= '2024';
			//$config['thumb_marker']		= '';

			$this->load->library('upload',$config);

			if( ! $this->upload->do_upload('bukti_tf')){
				
				$data = array(	'trans' => $trans,
								'panelbody' =>'payment',
								// 'rute' =>$rute,
							);
				$this->load->view('panelbody', $data);
			}else{
			$upload_gambar = array('upload_data' => $this->upload->data());

			//create thumbnail gambar
			$config['image_library'] 	= 'gd2';
			$config['source_image'] 	= './gudang/images/bukti_tf/'.$upload_gambar['upload_data']['file_name'];
			$config['new_image']		= './gudang/images/bukti_tf/';
			$config['create_thumb'] 	= TRUE;
			$config['maintain_ratio'] 	= TRUE;
			$config['width']         	= 250;
			$config['height']       	= 250;
			$config['thumb_marker']		= '';

			$this->load->library('image_lib', $config);

			$this->image_lib->resize(); 
			//end
			$i = $this->input;
			$data = array(	'id_transaksi'			=> $id_transaksi,
							'bukti_tf'			=> $upload_gambar['upload_data']['file_name'],
							'status_bayar'			=> "Sudah Bayar"
						);
			$this->m_account->edit($data);
			redirect(base_url('booking'), 'refresh');
		}

		$data = array(
			'trans' => $trans,
			'panelbody' =>'payment',
			// 'rute' =>$rute,
		);
		$this->load->view('panelbody', $data);
	}
}
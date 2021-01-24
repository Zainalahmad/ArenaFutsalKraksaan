<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lapangan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin');
		$this->m_admin->sesiku();
		$this->load->helper(array('form','url'));
	}

	public function index()
	{
		$data['lapangan']=$this->m_admin->tampil_lapangan();
		// $data['jairport']=$this->db->query('SELECT COUNT(*) FROM airport A JOIN lapangan D WHERE A.id_lapangan=D.id AND D.id=4');
		$this->load->view('admin/lapangan/lapangan',$data);
	}

	function add()
	{
		$this->load->view('admin/lapangan/add_lapangan', array('error' => ''));
	}

	function add_lapangan()
	{
		$config['upload_path']          = './gudang/images/logo/';
		$config['allowed_types']        = 'png|jpg|PNG';
		// $config['allowed_types']        = '*';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;	

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('img'))
		{
			$img = '';
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('admin/lapangan/add_lapangan', $error);
		}else{
			$upload_data = $this->upload->data();
			$data = array('upload_data' => $upload_data);
			$img = $upload_data['file_name'];
		}

		//awal

		
		$lapangan = $this->input->post('lapangan');
		$harga_siang = $this->input->post('harga_siang');
		$harga_malam = $this->input->post('harga_malam');
		
		$data = array(
			'img' => $img,
			'lapangan' => $lapangan,
			'harga_siang' => $harga_siang,
			'harga_malam' => $harga_malam,

		);
		$this->m_admin->add_lapangan($data,'lapangan');
		redirect('admin/lapangan');
	}

	function edit($id)
	{
		$where = array('id' => $id);
		$data['lapangan'] = $this->m_admin->edit_lapangan('lapangan',$where)->result();
		$this->load->view('admin/lapangan/edit',$data);
	}

	function update($id){
		$config['upload_path']          = './gambar/';
		// $config['allowed_types']        = 'png|jpg|PNG';
		$config['allowed_types']        = '*';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;	

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('img'))
		{
			$img = '';
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('admin/lapangan/add_lapangan', $error);
		}else{
			$upload_data = $this->upload->data();
			$data = array('upload_data' => $upload_data);
			$img = $upload_data['file_name'];
		}
		
		$lapangan = $this->input->post('lapangan');
		$harga_siang = $this->input->post('harga_siang');
		$harga_malam = $this->input->post('harga_malam');
		

		$data = array(
			'lapangan' =>$lapangan,
			'harga_siang' =>$harga_siang,
			'harga_malam' => $harga_malam,
		);
		$this->m_admin->update_lapangan($id,$data);
		redirect('admin/lapangan','refresh');
	}

	function del($id)
	{
		$this->m_admin->hapus_lapangan($id);
		redirect('admin/lapangan','refresh');
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin');
		$this->m_admin->sesiku();
	}

	// public function index(){
 //        $list = $this ->m_admin->clapangan();
 //        $id = $this->session->userdata('id_session');
 //        $data = array(
 //            'menu' => 'Menu',
 //            'panelbody' => 'obat/tbl_obat_list',
 //            'id' => $id,
 //            "list" => $list
 //        );
 //        $this ->load ->view('panelbody',$data);
 //    }

	public function index()
	{

		$data['clapangan']=$this->m_admin->clapangan();
		
	
		$data['lapangan']=$this->m_admin->tampil_lapangan();
		//$this->load->view('admin/dashboard',$data);

		$data['cbooking']=$this->m_admin->cbooking();

		$data['ctampil_transaksi']=$this->m_admin->ctampil_transaksi();

		$data['transaksi']=$this->m_admin->tampil_booking();
		$this->load->view('admin/dashboard',$data);
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */
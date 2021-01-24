<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class booking extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin');
		$this->m_admin->sesiku();
	}

	public function index()
	{
		$data['transaksi']=$this->m_admin->tampil_booking();
		$this->load->view('admin/booking/booking',$data);
	}

}

/* End of file reservation.php */
/* Location: ./application/controllers/reservation.php */
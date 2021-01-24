<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jadwal extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin');
		$this->m_admin->sesiku();
	}

	public function index()
	{
		$data['jadwal']=$this->m_admin->tampil_jadwal();
		// $data['jairport']=$this->db->query('SELECT COUNT(*) FROM airport A JOIN lapangan D WHERE A.id_lapangan=D.id AND D.id=4');
		$this->load->view('admin/jadwal/jadwal',$data);
	}
}
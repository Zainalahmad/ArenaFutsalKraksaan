<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lapangan extends CI_Controller {

	public function __construct(){
	
			parent::__construct();
        $this->load->helper(array('form','url','tanggal'));
		$this ->load ->model('m_account');
    }

	public function index()
	{
		$user=$this->m_account->getuser($this->session->userdata('id'));
		$lapangan=$this->m_account->lapangan();
		$tanggal = tanggal_indonesia_lengkap(date('Y-m-d'));

		$data = array(
			'user' => $user,
			'panelbody' => 'jadwal_lap',
			'lapangan' => $lapangan,
			'tanggal' => $tanggal,
		);
		$this->load->view('panelbody',$data);
	}

    function payment(){
    	$this->load->view('payment', $data);
    }
}

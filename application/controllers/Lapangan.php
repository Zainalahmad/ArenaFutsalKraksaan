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

		$data = array(
			'user' => $user,
			'panelbody' => 'lapangan',
			'lapangan' => $lapangan,
		);
		$this->load->view('panelbody',$data);
	}

    function payment(){
    	$this->load->view('payment', $data);
    }
}

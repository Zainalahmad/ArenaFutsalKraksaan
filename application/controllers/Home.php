<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 * https://github.com/ondol95/booking-tiket
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		$user=$this->m_account->getuser($this->session->userdata('id'));
		$lapangan=$this->m_account->lapangan();
		$jadwal = $this->m_account->jadwal_lapangan();
		// $tgl1 = date('d-m-Y', strtotime('01-01-2021' . ' + 1 day'));
		// $tgl2 = date('Y-m-d', strtotime('31-12-2021')); //Added one day to end with 08-05-2018
		// $start = new Datetime($tgl1);
  //   	$end   = new Datetime($tgl2);
  //  		$interval = DateInterval::createFromDateString('1 day');
  //   	$period   = new DatePeriod($start, $interval, $end);
		$data = array(
			'user' => $user,
			'panelbody' => 'home',
			'lapangan' => $lapangan,
			'jadwal' =>$jadwal,
			// 'period' => $period,
		);
		$this->load->view('panelbody',$data);
	}

    function result(){
    	$data['rute']=$this->m_account->cari();
    	$this->load->view('cari', $data);
    }

    function payment(){
    	$this->load->view('payment', $data);
    }
}

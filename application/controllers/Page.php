<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller {

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

	public function booking()
	{
		$user=$this->m_account->getuser($this->session->userdata('id'));
		$lapangan=$this->m_account->lapangan();
		$data = array(
			'user' => $user,
			'lapangan' => $lapangan,
			'panelbody' =>'page/booking',
		);
		$this->load->view('panelbody', $data);
	}

	public function kontak()
	{
		$user=$this->m_account->getuser($this->session->userdata('id'));
		$data = array(
			'user' => $user,
			'panelbody' =>'kontak',
		);
		$this->load->view('panelbody', $data);
	}
	
	public function about()
	{
		$user=$this->m_account->getuser($this->session->userdata('id'));
		$data = array(
			'user' => $user,
			'panelbody' =>'page/about',
		);
		$this->load->view('panelbody', $data);
	}
}

/* End of file kontak.php */
/* Location: ./application/controllers/kontak.php */
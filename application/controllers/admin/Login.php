<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('admin/login');

		if($this->session->statusadmin == 'online'){
			redirect('admin/dashboard','refresh');
		}

	}

	function login() {
         
         $where = array(
         		'username'=> html_escape($this->input->post('username')),
         		'password' => md5(html_escape($this->input->post('password'))),
         		'level'=>1);

         //cek username dan password
         $query = $this->db->get_where('users',$where);
 
         if($query->num_rows() == 1) {
             $admin     = $query->row();
             $id   = $admin->id;
 
             //set session user
             $this->session->set_userdata('nameadmin', $admin->nama);
             $this->session->set_userdata('usernameadmin', $admin->username);
             $this->session->set_userdata('statusadmin', 'online');
             $this->session->set_userdata('id_loginadmin', uniqid(rand()));
             $this->session->set_userdata('idadmin', $id);
 
             //redirect ke halaman dashboard
            redirect(site_url('admin/dashboard'));
         }else{
 
             //jika tidak ada, set notifikasi dalam flashdata.
             $this->session->set_flashdata('alert','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                Username atau Password salah!
              </div>');
 
             //redirect ke halaman login
             redirect(site_url('admin/login'));
         }
          return false;
      }

      function logout(){
      	$this->session->sess_destroy();
      	redirect('admin/login','refresh');
      }

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */
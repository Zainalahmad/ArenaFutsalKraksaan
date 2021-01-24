 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Ndol_login {
 
     // SET SUPER GLOBAL
     var $CI = NULL;
 
     /**
      * Class constructor
      *
      * @return   void
      */
     public function __construct() {
         $this->CI =& get_instance();
     }
 
     /*
     * cek username dan password pada table users, jika ada set session berdasar data user dari
     * table users.
     * @param string username dari input form
     * @param string password dari input form
     */
     public function login($username, $password) {
         
         //cek username dan password
         $query = $this->CI->db->get_where('users',array('username'=>$username,'password' => md5($password),'level'=>0));
 
         if($query->num_rows() == 1) {
             //ambil data user berdasar username
             $row  = $this->CI->db->query('SELECT id FROM users where username = "'.$username.'"');
             $admin     = $row->row();
             $id   = $admin->id;
 
             //set session user
             $this->CI->session->set_userdata('username', $username);
             $this->CI->session->set_userdata('id_login', uniqid(rand()));
             $this->CI->session->set_userdata('id', $id);
 
             //redirect ke halaman dashboard
             redirect(site_url('akun'));
         }else{
 
             //jika tidak ada, set notifikasi dalam flashdata.
             $this->CI->session->set_flashdata('alert','<div class="alert alert-danger alert-dismissable">Username atau password anda salah!</div>');
 
             //redirect ke halaman login
             redirect(site_url('akun/login'));
         }
          return false;
      }
     
     /**
      * Cek session login, jika tidak ada, set notifikasi dalam flashdata, lalu dialihkan ke halaman
      * login
      */
     public function cek_login() {
 
         //cek session username
         if($this->CI->session->userdata('username') == '') {
 
             //set notifikasi
             $this->CI->session->set_flashdata('alert','<div class="alert alert-danger alert-dismissable">Anda belum login</div>');
 
             //alihkan ke halaman login
             redirect(site_url('akun/login'));
         }
     }
 
     /**
      * Hapus session, lalu set notifikasi kemudian di alihkan
      * ke halaman login
      */
     public function logout() {
        // $this->CI->session->unset_userdata('username');
        // $this->CI->session->unset_userdata('id_login');
        // $this->CI->session->unset_userdata('id');
        $this->session->sess_destroy();
     }
 }
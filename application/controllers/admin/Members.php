<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Members extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('m_admin');
		$this->m_admin->sesiku();
	}

	public function index()
	{
		$data['users']=$this->m_admin->tampil_user();
		$this->load->view('admin/member/member',$data);
	}

	function edit($id){
		$data['users'] = $this->m_admin->edit_transportation('users',$id)->result();
		$this->load->view('admin/member/edit',$data);
	}

	function update($id){
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$telepon = $this->input->post('telepon');
		$jenkel = $this->input->post('jenkel');

		$data = array(
			'nama' =>$nama,
			'email' =>$email,
			'username' =>$username,
			'telepon' =>$telepon,
			'jenkel' =>$jenkel,
		);
		$this->m_admin->update_destination($id,$data);
		redirect('admin/members','refresh');
	}

	public function hapus_user($id)
	{
		$this->m_admin->hapus_user($id);
		redirect('admin/member/member','refresh');
	}

}

/* End of file penjualan.php */
/* Location: ./application/controllers/penjualan.php */
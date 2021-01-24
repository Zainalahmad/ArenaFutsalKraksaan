<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Transportation extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin');
		$this->m_admin->sesiku();
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$data['transportation']=$this->m_admin->tampil_transportation();
		$this->load->view('admin/transportation/transportation',$data);
	}

	function add()
	{
		$this->load->view('admin/transportation/add', array('error' => ' ' ));
	}

	function add_transportation()
	{
		$id = $this->input->post('id');
		$config['upload_path']          = './gudang/images/logo/';
		// $config['allowed_types']        = 'png|jpg|PNG';
		$config['allowed_types']        = '*';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;	

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('img'))
		{
			$img = '';
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('admin/transportation/add', $error);
		}
		else
		{
			$upload_data = $this->upload->data();
			$data = array('upload_data' => $upload_data);
			$img = $upload_data['file_name'];
		}

		$name = $this->input->post('name');
		$code = $this->input->post('code');
		$description = $this->input->post('description');
		$seat_qty = $this->input->post('seat_qty');

		$data = array(
			'id' => $id,
			'img' => $img,
			'name' => $name,
			'code' => $code,
			'description' => $description,
			'seat_qty' => $seat_qty,
			);
		$this->m_admin->add_transportation($data,'transportation');
		redirect('admin/transportation');
	}

	function edit($id)
	{
		$data['transportation'] = $this->m_admin->edit_transportation('transportation',$id)->result();
		$this->load->view('admin/transportation/edit',$data);
	}

	function update(){
		$config['upload_path']          = './gudang/images/logo/';
		$config['allowed_types']        = '*';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;	

		$this->load->library('upload', $config);
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$code = $this->input->post('code');
		$description = $this->input->post('description');
		$seat_qty = $this->input->post('seat_qty');
		if ( ! $this->upload->do_upload('img'))
		{
			$img = '';
			$error = array('error' => $this->upload->display_errors());
			$data = array(
			'id' => $id,
			'name' => $name,
			'code' => $code,
			'description' => $description,
			'seat_qty' => $seat_qty,
			);
		}
		else
		{
			$upload_data = $this->upload->data();
			$data = array('upload_data' => $upload_data);
			$img = $upload_data['file_name'];
			$data = array(
			'id' => $id,
			'img' => $img,
			'name' => $name,
			'code' => $code,
			'description' => $description,
			'seat_qty' => $seat_qty,
			);
		}
		$this->m_admin->update_transportation($id,$data);
		redirect('admin/transportation','refresh');
	}

	function del($id)
	{
		$this->m_admin->hapus_transportation($id);
		redirect('admin/transportation','refresh');
	}

}

/* End of file transportation */
/* Location: ./application/controllers/transportation */
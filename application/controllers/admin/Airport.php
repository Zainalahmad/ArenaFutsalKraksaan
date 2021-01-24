<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Airport extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin');
		$this->m_admin->sesiku();
	}

	public function index()
	{
		$data['airport']=$this->m_admin->tampil_airport()->result();
		$this->load->view('admin/airport/airport',$data);
	}

	function add()
	{
		$data['lapangan']=$this->m_admin->tampil_lapangan();
		$this->load->view('admin/airport/add',$data);
	}

	function add_airport()
	{
		$id = $this->input->post('id');
		$id_lapangan = $this->input->post('id_lapangan');
		$name = $this->input->post('name');
		$iso = $this->input->post('iso');

		$data = array(
			'id' => $id,
			'id_lapangan' => $id_lapangan,
			'name' => $name,
			'iso' => $iso,
		);
		$this->m_admin->add_airport($data,'airport');
		redirect('admin/airport');

		// $data['airport'] = $this->input->post('airport');
		// $this->m_admin->add_airport($data,'airport');
		// redirect('admin/airport','refresh');
	}

	function edit($id)
	{
		$data['airport'] = $this->m_admin->edit_airport('airport',$id)->result();
		$this->load->view('admin/airport/edit',$data);
	}

	function update($id){
		$name = $this->input->post('name');
		$iso = $this->input->post('iso');

		$data = array(
			'name' => $name,
			'iso' => $iso,
		);
		$this->db->set($data);
		$this->m_admin->update_airport($id,$data);
		redirect('admin/airport','refresh');
	}

	function del($id)
	{
		$this->m_admin->hapus_airport($id);
		redirect('admin/airport','refresh');
	}

}

/* End of file airport.php */
/* Location: ./application/controllers/airport.php */
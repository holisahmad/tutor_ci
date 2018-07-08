<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('site_m');

		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

		//Do your magic here
	}

	public function index()
	{
		
		// $data['judul'] = 'Admin - Holis';
		// $data['header'] = 'Admin - Dashboard';
		// $data['content'] = 'content';
		 

		// $this->load->view('home', $data);

		$data['judul'] = 'Admin - Data Personel';
		$data['header'] = 'Admin - Dashboard';
		$data['content'] = 'area/inputdata';
		$this->load->view('home', $data);

	}

	// public function dataarea()
	// {
	// 	$data['judul'] = 'Admin - Holis';
	// 	$data['header'] = 'Admin - Dashboard';
	// 	$data['content'] = 'area/tampildata';
	// 	$this->load->view('home', $data);
	// }


	public function add()
	{
		// if ($this->input->post('submit')) {
		// 	# code...
		// 	echo "submit ditekan";
		// }
		
		// $data['judul'] = 'Admin - Tambah Personel';
		// $data['header'] = 'Admin - Dashboard';

		// $data['content'] = 'area/inputdata';
		// $this->load->view('home', $data);
		

		// $kode = $this->input->post('kode');
		// $nama = $this->input->post('nama');
		
		// $sql = array(
		// 	'kode' => $kode,
		// 	'nama' => $nama
		// );
		// $this->db->insert('masuk', $sql);


		$this->form_validation->set_rules('kode', 'Kode Personel', 'required');
		$this->form_validation->set_rules('nama', 'Nama Personel', 'required');

		if ($this->form_validation->run() == FALSE)
		{
				// $this->load->view('myform');
				//redirect('site');

				 $data['judul'] = 'Admin - Tambah Personel';
				 $data['header'] = 'Admin - Dashboard';
		
				 $data['content'] = 'area/inputdata';
				 $this->load->view('home', $data);
				
		}
		else
		{
				// $this->load->view('formsuccess');
				$kode = $this->input->post('kode');
				$nama = $this->input->post('nama');
				
				$sql = array(
					'kode' => $kode,
					'nama' => $nama
				);
				$this->db->insert('masuk', $sql);
		}

	}

}

/* End of file site.php */
/* Location: ./application/controllers/site.php */
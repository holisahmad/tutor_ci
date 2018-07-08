<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('site_m');
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
		$data['content'] = 'area/tampildata';
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
		$data['judul'] = 'Admin - Tambah Personel';
		$data['header'] = 'Admin - Dashboard';
		$data['content'] = 'area/inputdata';
		$this->load->view('home', $data);
	}

}

/* End of file site.php */
/* Location: ./application/controllers/site.php */
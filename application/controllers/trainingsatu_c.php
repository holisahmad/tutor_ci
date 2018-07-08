<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trainingsatu_c extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('trainingsatu_m');
	}

	public function index()
	{
		$data['alldatasaya'] = $this->trainingsatu_m->datasaya();
		$data['judul'] = "Judul - Training ci";
		$data['tema'] = "Tema - Training ci";

		$this->load->view('trainingsatu_v', $data, FALSE);

	}

	

}

/* End of file trainingsatu_c.php */
/* Location: ./application/controllers/trainingsatu_c.php */
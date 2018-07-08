<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site_m extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{

	}

	public function datasaya()
	{
		$data = array(
			
			'satu' => array(
			'judul' => 'Admin - Holis',
			'header' => 'Admin - Dashboard'
			)
		);
			return $data;

	}

}

/* End of file site_m.php */
/* Location: ./application/models/site_m.php */
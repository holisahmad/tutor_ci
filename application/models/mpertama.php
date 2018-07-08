<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpertama extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{

	}

	public function ambildata()
	{
		$data = array(

			'artikel1' => array(
				'judul' => 'Model1',
				'head' => 'head Model1',
				'isi' => 'isi Model1'

			),
			'artikel2' => array(
				'judul' => 'Model2',
				'head' => 'head Model2',
				'isi' => 'isi Model2'

			),			
			'artikel3' => array(
				'judul' => 'Model3',
				'head' => 'head Model3',
				'isi' => 'isi Model3'

			),
				// 'judul' => 'Model',
				// 'head' => 'Model',
				// 'isi' => 'isi Model'
		);

		return $data;
	}
}

/* End of file mpertama.php */
/* Location: ./application/models/mpertama.php */
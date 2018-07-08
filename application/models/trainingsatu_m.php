<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trainingsatu_m extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		#disini
		echo "Saya disini";
	}

	public function datasaya()
	{
		#disini
		$data = array(
			'data1' => array(
				'judul' => 'Judul - Membuat ci 1',
				'tema' => 'Membuat CI yang baik 1',
				'isi' => 'Membuat ci yang baik dengan mudah dan sesuai prosedur 1'
			),
			'data2' => array(
				'judul' => 'Judul - Membuat ci 2',
				'tema' => 'Membuat CI yang baik 2',
				'isi' => 'Membuat ci yang baik dengan mudah dan sesuai prosedur 2'
			),
			'data3' => array(
				'judul' => 'Judul - Membuat ci 3',
				'tema' => 'Membuat CI yang baik 3',
				'isi' => 'Membuat ci yang baik dengan mudah dan sesuai prosedur 3'
			)


		);
		return $data;
	}

}

/* End of file trainingsatu_m.php */
/* Location: ./application/models/trainingsatu_m.php */
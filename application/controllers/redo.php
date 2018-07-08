<?php

/**
 * 
 */
class Redo extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mpertama');
		$this->load->helper('url'); //ini bisa dipasang di autoload.php
	}

	public function index()
	{
		$data['judul'] = "Judul - Controller";
		$data['head'] = "Heading";
		$data['isi'] = "Lorem ipsum";
		$this->load->view('template', $data);
		//echo base_url();
	}

	// public function daftar()
	// {
	// 	$data['judul'] = "Judul - Daftar";
	// 	$data['head'] = "Heading Daftar";
	// 	$data['isi'] = "Lorem ipsum - Daftar";
	// 	$this->load->view('template', $data);
	// }
	// public function berkata()
	// {
	// 	echo "ini function berkata";
	// }

	// public function iniparam($param1=null,$param2='')
	// {
	// 	echo "ini adalah param1 ".$param1. " dan param2 ".$param2;
	// }

	// public function template()
	// {
	// 	$this->load->view('template');
	// }
}
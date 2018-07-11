<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inputdatamodel extends CI_Model {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }
     
    public function index() 
    {
        
    }

    // public function insert()
    // {
    //  $kode = $this->input->post('kode');
	// 	$nama = $this->input->post('nama');
		
	// 	$sql = array(
	// 		'kode' => $kode,
	// 		'nama' => $nama
	// 	);
	// 	return $this->db->insert('masuk', $sql);
    // }

    public function insert($data)
    {
		return $this->db->insert('masuk', $data);
    }

    public function tampil()
    {
      return $this->db->get('masuk');
        
    }

}

/* End of file ModelName.php */

<?php

 class suportivo extends CI_Controller {

 	function __contructs(){
 		parent::__contructs();

 		$this->load->model('GambarModel');
		
	}

	public function index2()
	{
		$d = $this->db->query("Select*from gambar Where id=4")->row()->nama_file;
		echo "<img src=\"" . base_url() . "img/$d\" />";
		//$this->load->view('coba');
	}

	public function duaan()
	{
		$d = $this->db->query("Select*from gambar Where id=5")->row()->nama_file;
		echo "apaan ya gatau deh.......ini duaan";

	}

 	public function page(){
 		echo "ini coba muncul apa engga";
 	}

 	public function index(){
 		$this->load->view('v-landingpage');
 	}

 	
 }
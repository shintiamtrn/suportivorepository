<?php

class produk extends CI_Controller {

	function __contructs(){
		parent::__contructs();
	}

	public function monita()

	{
		$this->load->view('v_monita');
	}

	public function monita1()

	{
		$this->load->view('v_monita1');
	}

	public function monita2()

	{
		$this->load->view('v_monita2');
	}

	public function haliza()

	{
		$this->load->view('v_haliza');
	}

	public function haliza1()

	{
		$this->load->view('v_haliza1');
	}

	public function haliza2()

	{

		$this->load->view('v_haliza2');
	}
}
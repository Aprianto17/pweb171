<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
			$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function menu1()
	{
		$this->load->view('pelangi');
	}

	public function menu2()
	{
		$this->load->view('balonku');
	}

	public function menu3()
	{
		$this->load->view('kereta');
	}

	public function menu4()
	{
		$this->load->view('cicak');
	}

	public function menu5()
	{
		$this->load->view('kebunku');
	}


	public function home()
	{
		$this->load->view('index');
	}
}

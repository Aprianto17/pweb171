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
		$this->load->view('layout/header');
		$this->load->view('layout/nav');
		$this->load->view('home');
		$this->load->view('layout/footer');
	}

	public function menu1()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/nav');
		$this->load->view('pelangi');
		$this->load->view('layout/footer');
	}

	public function menu2()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/nav');
		$this->load->view('balonku');
		$this->load->view('layout/footer');
	}

	public function menu3()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/nav');
		$this->load->view('kereta');
		$this->load->view('layout/footer');
	}

	public function menu4()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/nav');
		$this->load->view('cicak');
		$this->load->view('layout/footer');
	}

	public function menu5()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/nav');
		$this->load->view('kebunku');
		$this->load->view('layout/footer');
	}

}

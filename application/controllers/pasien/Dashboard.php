<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function index()
	{
		$this->load->view('pasien/layouts/header');
		$this->load->view('pasien/pages/home');
		$this->load->view('pasien/layouts/footer');
	}
}

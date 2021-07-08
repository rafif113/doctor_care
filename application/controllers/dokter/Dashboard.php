<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		if (!$this->session->id_dokter) {
			redirect(base_url('dokter/auth'));
		}
	}

	public function index()
	{
		$this->load->view('dokter/layouts/header');
		$this->load->view('dokter/pages/dashboard');
		$this->load->view('dokter/layouts/footer');
	}
}

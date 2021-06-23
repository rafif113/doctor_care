<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		if (!$this->session->username) {
			redirect(base_url('apotek/auth'));
		}
	}

	public function index()
	{
		$this->load->view('apotek/layouts/header');
		$this->load->view('apotek/pages/dashboard');
		$this->load->view('apotek/layouts/footer');
	}
}

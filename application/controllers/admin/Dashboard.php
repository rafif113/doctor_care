<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		if (!$this->session->username) {
			redirect(base_url('admin/auth'));
		}
	}

	public function index()
	{
		$this->load->view('admin/layouts/header');
		$this->load->view('admin/pages/dashboard');
		$this->load->view('admin/layouts/footer');
	}
}

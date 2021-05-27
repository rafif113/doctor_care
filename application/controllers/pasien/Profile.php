<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		if (!$this->session->username) {
			redirect(base_url('pasien'));
		}
		$this->load->model('pasien/ProfileModel', 'ProfileModel');
	}

	public function index()
	{
		$data['profile'] = $this->ProfileModel->get_profile()->row();
		$this->load->view('pasien/layouts/header');
		$this->load->view('pasien/pages/profile', $data);
		$this->load->view('pasien/layouts/footer');
	}
}

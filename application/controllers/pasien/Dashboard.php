<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function index()
	{
		$this->load->model('pasien/DokterModel', 'DokterModel');
		$data['dokter'] = $this->DokterModel->get_dokter()->result();
		$this->load->view('pasien/layouts/header');
		$this->load->view('pasien/pages/home', $data);
		$this->load->view('pasien/layouts/footer');
	}
}

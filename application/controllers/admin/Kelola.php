<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelola extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		if (!$this->session->id_admin) {
			redirect(base_url('admin/auth'));
		}
		date_default_timezone_set('Asia/Jakarta');
		$this->load->helper('tgl_indo');
	}

	public function pasien()
	{
		$this->load->view('admin/layouts/header');
		$this->load->view('admin/pages/kelola/pasien');
		$this->load->view('admin/layouts/footer');
	}

	public function dokter()
	{
		$this->load->view('admin/layouts/header');
		$this->load->view('admin/pages/kelola/dokter');
		$this->load->view('admin/layouts/footer');
	}
	public function detail_dokter()
	{
		$this->load->view('admin/layouts/header');
		$this->load->view('admin/pages/kelola/detail-dokter');
		$this->load->view('admin/layouts/footer');
	}

	public function pembayaran()
	{
		$this->load->view('admin/layouts/header');
		$this->load->view('admin/pages/kelola/pembayaran');
		$this->load->view('admin/layouts/footer');
	}
}

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
		$this->load->model('dokter/DashboardModel', 'DashboardModel');
	}

	public function index()
	{
		$arrPendapatan = $this->DashboardModel->total_pendapatan($this->session->id_dokter)->result();
		$data['number_proses'] = $this->DashboardModel->number_proses($this->session->id_dokter)->num_rows();
		$data['number_selesai'] = $this->DashboardModel->number_selesai($this->session->id_dokter)->num_rows();
		$data['pendapatan'] = 0;
		foreach ($arrPendapatan as $row) {
			$data['pendapatan'] += $row->nominal;
		}
		$this->load->view('dokter/layouts/header');
		$this->load->view('dokter/pages/dashboard', $data);
		$this->load->view('dokter/layouts/footer');
	}
}

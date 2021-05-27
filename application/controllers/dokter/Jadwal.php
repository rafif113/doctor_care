<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		if (!$this->session->username) {
			redirect(base_url('dokter/auth'));
		}
		$this->load->helper('tgl_indo');
		$this->load->model('dokter/JadwalModel', 'JadwalModel');
	}

	public function index()
	{
		$data['jadwal'] = $this->JadwalModel->get_single_jadwal()->result();
		$this->load->view('dokter/layouts/header');
		$this->load->view('dokter/pages/jadwal/jadwal', $data);
		$this->load->view('dokter/layouts/footer');
	}

	public function tambah_jadwal()
	{
		$this->load->view('dokter/layouts/header');
		$this->load->view('dokter/pages/jadwal/tambah-jadwal');
		$this->load->view('dokter/layouts/footer');
	}

	public function proses_tambah_jadwal()
	{
		$id_jadwal 	  = $this->JadwalModel->id_jadwal();
		$id_dokter    = $this->session->id_dokter;
		$tanggal      = $this->input->post('tanggal');
		$jam_mulai 	  = $this->input->post('jam_mulai');
		$jam_berakhir = $this->input->post('jam_berakhir');

		$data = [
			'id_jadwal' 	=> $id_jadwal,
			'id_dokter' 	=> $id_dokter,
			'tanggal' 		=> $tanggal,
			'jam_mulai'		=> $jam_mulai,
			'jam_berakhir'	=> $jam_berakhir,
		];
		$this->JadwalModel->tambah_jadwal($data);
		redirect(base_url('dokter/jadwal'));
	}

	public function proses_reschedule_jadwal($id_konsultasi)
	{
		$tanggal_reschedule = $this->input->post('tanggal_reschedule');
		$jam_reschedule 	= $this->input->post('jam_reschedule');

		$data = [
			'status' 		     => 'Ubah jadwal',
			'tanggal_reschedule' => $tanggal_reschedule,
			'jam_reschedule'     => $jam_reschedule,
		];
		$this->JadwalModel->update_status($id_konsultasi, $data);
		redirect(base_url('dokter/jadwal/konsultasi'));
	}

	public function konsultasi()
	{
		$data['konsultasi'] = $this->JadwalModel->get_konsultasi()->result();
		$this->load->view('dokter/layouts/header');
		$this->load->view('dokter/pages/jadwal/konsultasi', $data);
		$this->load->view('dokter/layouts/footer');
	}
}
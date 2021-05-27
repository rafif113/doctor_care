<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konsultasi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->id_pasien) {
			redirect(base_url('pasien/auth'));
		}

		$this->load->helper('string');
		$this->load->model('pasien/DokterModel', 'DokterModel');
		$this->load->model('pasien/KonsultasiModel', 'KonsultasiModel');
		$this->load->model('pasien/PembayaranModel', 'PembayaranModel');
	}

	public function index()
	{
		$data['dokter'] = $this->DokterModel->get_dokter()->result();
		$this->load->view('pasien/layouts/header');
		$this->load->view('pasien/pages/tambah-janji', $data);
		$this->load->view('pasien/layouts/footer');
	}

	public function validasi_tambah_janji()
	{
		$this->form_validation->set_rules('id_dokter', 'Nama Dokter', 'required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
		$this->form_validation->set_rules('jam', 'Jam Konsultasi', 'required');
		$this->form_validation->set_rules('keluhan', 'Keluhan', 'required');
	}

	public function tambah_janji()
	{
		$this->validasi_tambah_janji();
		if (empty($_FILES['foto_keluhan']['name'])) {
			$this->form_validation->set_rules('foto_keluhan', 'Foto Keluhan', 'required');
		}
		if ($this->form_validation->run() == FALSE) {
			$this->index();
		} else {
			$id_konsultasi = $this->KonsultasiModel->id_konsultasi();
			$id_pasien     = $this->session->id_pasien;
			$id_dokter     = $this->input->post('id_dokter');
			$tanggal   	   = $this->input->post('tanggal');
			$jam   		   = $this->input->post('jam');
			$keluhan   	   = $this->input->post('keluhan');
			$string_acak1  = strtolower(random_string('alpha', 3));
			$string_acak2  = strtolower(random_string('alpha', 4));
			$string_acak3  = strtolower(random_string('alpha', 3));
			$meet 		   = 'https://meet.google.com/' . $string_acak1 . '-' . $string_acak2 . '-' . $string_acak3;

			$config['upload_path']   = './uploads/keluhan/';
			$config['allowed_types'] = 'pdf|jpeg|jpg|png';
			$config['max_size']      = 4000;
			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('foto_keluhan')) {
				$this->session->set_flashdata('status', 'File gagal diupload.');
				$this->index();
			} else {
				$foto_keluhan = $this->upload->data('file_name');
				$data_konsultasi = [
					'id_konsultasi' => $id_konsultasi,
					'tanggal'      	=> $tanggal,
					'jam'   		=> $jam,
					'keluhan'   	=> $keluhan,
					'foto_keluhan'	=> $foto_keluhan,
					'meet'			=> $meet,
					'id_pasien'     => $id_pasien,
					'id_dokter'   	=> $id_dokter,
				];

				$id_pembayaran = $this->PembayaranModel->id_pembayaran();
				$kode_bayar    = 8888 . random_string('numeric', 8);
				$nominal 	   = 50000;
				$data_pembayaran = [
					'id_pembayaran' => $id_pembayaran,
					'kode_bayar'    => $kode_bayar,
					'nominal' 		=> $nominal,
					'id_konsultasi' => $id_konsultasi,
				];

				// var_dump($data_konsultasi);
				// echo ('<br>');
				// var_dump($data_pembayaran);
				$this->KonsultasiModel->tambah_konsultasi($data_konsultasi);
				$this->PembayaranModel->tambah_pembayaran($data_pembayaran);
				redirect(base_url('pasien/konsultasi/jadwal'));
			}
		}
	}

	public function jadwal()
	{
		$data['konsultasi'] = $this->KonsultasiModel->get_konsultasi()->result();
		$this->load->view('pasien/layouts/header');
		$data['konsultasi'] != NULL ? $this->load->view('pasien/pages/jadwal', $data) : $this->load->view('pasien/pages/jadwal-kosong');
		$this->load->view('pasien/layouts/footer');
	}

	public function bayar_konsultasi()
	{
		if (empty($_FILES['foto_pembayaran']['name'])) {
			$this->form_validation->set_rules('foto_pembayaran', 'Foto Pembayaran', 'required');
		}
		$config['upload_path']   = './uploads/pembayaran/';
		$config['allowed_types'] = 'pdf|jpeg|jpg|png';
		$config['max_size']      = 4000;
		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('foto_pembayaran')) {
			$this->session->set_flashdata('status', 'File gagal diupload.');
			$this->jadwal();
		} else {
			$id_pembayaran   = $this->input->post('id_pembayaran');
			$foto_pembayaran = $this->upload->data('file_name');
			$data_pembayaran = [
				'foto_pembayaran' => $foto_pembayaran,
			];

			$this->PembayaranModel->update_pembayaran($id_pembayaran, $data_pembayaran);
			redirect(base_url('pasien/konsultasi/jadwal'));
		}
	}
}

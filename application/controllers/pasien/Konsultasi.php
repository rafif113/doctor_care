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
		$this->load->model('pasien/ProfileModel', 'ProfileModel');
	}

	public function index($id_dokter)
	{
		$pasien = $this->ProfileModel->get_profile($this->session->id_pasien)->row();
		$pasienCount = count(get_object_vars($pasien));
		$pasienCheck = [];
		foreach ($pasien as $dataPasien) {
			if ($dataPasien != NULL) {
				array_push($pasienCheck, $dataPasien);
			}
		}
		if (count($pasienCheck) == $pasienCount) {
			$data['dokter'] = $this->DokterModel->get_single_dokter($id_dokter)->row();
			$data['jadwal'] = $this->DokterModel->get_jadwal_dokter($id_dokter)->result();
			$this->load->view('pasien/layouts/header');
			$this->load->view('pasien/pages/tambah-janji', $data);
			$this->load->view('pasien/layouts/footer');
		} else {
			$this->session->set_flashdata('validasi', 'Terisi Sebelum Melakukan Konsultasi');
			redirect(base_url('pasien/profile'));
		}
	}

	public function validasi_tambah_janji()
	{
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
		$this->form_validation->set_rules('jam', 'Jam Konsultasi', 'required');
		$this->form_validation->set_rules('keluhan', 'Keluhan', 'required');
	}

	public function tambah_janji()
	{
		$id_dokter = $this->input->post('id_dokter');
		$this->validasi_tambah_janji();
		if (empty($_FILES['foto_keluhan']['name'])) {
			$this->form_validation->set_rules('foto_keluhan', 'Foto Keluhan', 'required');
		}
		if ($this->form_validation->run() == FALSE) {
			$this->index($id_dokter);
		} else {
			$id_konsultasi = $this->KonsultasiModel->id_konsultasi();
			$id_pasien     = $this->session->id_pasien;
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
				$this->index($id_dokter);
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
				$nominal 	   = $this->input->post('nominal');
				$data_pembayaran = [
					'id_pembayaran' => $id_pembayaran,
					'kode_bayar'    => $kode_bayar,
					'nominal' 		=> $nominal,
					'status_bayar'  => 'Belum dibayar',
					'id_konsultasi' => $id_konsultasi,
				];
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
				'status_bayar' 	  => 'Terbayar',
				'tgl_pembayaran'  => date("Y-m-d"),
			];
			$this->PembayaranModel->update_pembayaran($id_pembayaran, $data_pembayaran);
			redirect(base_url('pasien/konsultasi/jadwal'));
		}
	}

	public function ubah_jadwal_cancel($id_konsultasi)
	{
		$data = [
			'status' => 'Dibatalkan',
		];
		$this->KonsultasiModel->update_status($id_konsultasi, $data);
		redirect(base_url('pasien/konsultasi/jadwal'));
	}

	public function ubah_jadwal_setuju($id_konsultasi)
	{
		$reschedule = $this->KonsultasiModel->get_reschedule($id_konsultasi)->row();
		$data = [
			'tanggal' => $reschedule->tgl_reschedule,
			'jam' => $reschedule->jam_reschedule,
			'status' => 'Disetujui',
		];
		$this->KonsultasiModel->update_status($id_konsultasi, $data);
		redirect(base_url('pasien/konsultasi/jadwal'));
	}

	public function cetak_invoice($id_konsultasi)
	{
		$data['invoice'] = $this->KonsultasiModel->invoice($id_konsultasi)->row();
		$this->load->view('pasien/pages/invoice', $data);
	}

	public function cetak_resep($id_konsultasi)
	{
		$data['resep'] = $this->KonsultasiModel->get_resep_konsultasi($id_konsultasi)->result();
		$this->load->view('pasien/pages/daftar-resep', $data);
	}

	public function diagnosa($id_konsultasi)
	{
		$data['resep'] = $this->KonsultasiModel->get_resep_konsultasi($id_konsultasi)->result();
		$data['apotek'] = $this->KonsultasiModel->get_apotek()->result();
		if (!count($data['resep'])) {
			$this->session->set_flashdata('validasiDiagnosa', 'Diagnosa');
			redirect(base_url('pasien/konsultasi/jadwal'));
		}
		$data['diagnosa'] = $this->KonsultasiModel->get_rekam_medis($id_konsultasi)->row();
		$data['validasi'] = $this->KonsultasiModel->validasi_resep($id_konsultasi)->row();
		$this->load->view('pasien/layouts/header');
		$this->load->view('pasien/pages/rekam-medis', $data);
		$this->load->view('pasien/layouts/footer');
	}

	public function tebus($id_konsultasi)
	{
		$data = [
			'id_admin_apotek' => $this->input->post('id_admin_apotek'),
			'validasi_pasien' => "Ditebus"
		];
		$data['validasi'] = $this->KonsultasiModel->update_resep($id_konsultasi, $data);
		$this->session->set_flashdata('updateResep', 'Resep berhasil ditebus, silahkan ambil resep di apotek terdekat!');
		redirect(base_url('pasien/konsultasi/cetak_resep/' . $id_konsultasi));
		// redirect(base_url('pasien/konsultasi/diagnosa/' . $id_konsultasi));
	}

	public function download_diagnosa($no_record)
	{
		$this->load->helper('download');
		$fileinfo = $this->KonsultasiModel->download_diagnosa($no_record)->row();
		$file = 'uploads/diagnosa/' . $fileinfo->foto_pemeriksaan;
		force_download($file, NULL);
	}
}

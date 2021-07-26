<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Obat extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		if (!$this->session->username) {
			redirect(base_url('apotek/auth'));
		}
		$this->load->model('apotek/ObatModel', 'ObatModel');
	}

	public function index()
	{
		$data['obat'] = $this->ObatModel->get_obat()->result();
		$this->load->view('apotek/layouts/header');
		$this->load->view('apotek/pages/obat/obat', $data);
		$this->load->view('apotek/layouts/footer');
	}

	public function proses_tambah_obat()
	{
		$id_obat = $this->ObatModel->id_obat();
		$nama_obat = $this->input->post('nama_obat');
		$data = [
			'id_obat' 	=> $id_obat,
			'nama_obat'	=> $nama_obat,
		];
		$this->ObatModel->tambah_obat($data);
		redirect(base_url('apotek/obat'));
	}

	// public function resep()
	// {
	// 	$data['resep'] = $this->ObatModel->get_resep()->result();
	// 	$this->load->view('apotek/layouts/header');
	// 	$this->load->view('apotek/pages/obat/resep', $data);
	// 	$this->load->view('apotek/layouts/footer');
	// }

	// public function proses_tambah_resep()
	// {
	// 	$id_resep = $this->ObatModel->id_resep();
	// 	$cara_pakai = $this->input->post('cara_pakai');
	// 	$kode_obat = $this->input->post('kode_obat');
	// 	$dosis = $this->input->post('dosis');
	// 	$data = [
	// 		'id_resep' => $id_resep,
	// 		'cara_pakai' => $cara_pakai,
	// 		'dosis'	=> $dosis,
	// 		'kode_obat'	=> $kode_obat,
	// 	];
	// 	$this->ObatModel->tambah_resep($data);
	// 	redirect(base_url('apotek/obat/resep'));
	// }
}

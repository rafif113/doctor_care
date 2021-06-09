<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		if (!$this->session->username) {
			redirect(base_url('admin/auth'));
		}
		$this->load->helper('tgl_indo');
		$this->load->model('admin/JadwalModel', 'JadwalModel');
	}

	public function index()
	{
		$data['jadwal'] = $this->JadwalModel->get_single_jadwal()->result();
		$this->load->view('admin/layouts/header');
		$this->load->view('admin/pages/jadwal/jadwal', $data);
		$this->load->view('admin/layouts/footer');
	}

	public function konsultasi()
	{
		$data['konsultasi'] = $this->JadwalModel->get_konsultasi()->result();
		$this->load->view('admin/layouts/header');
		$this->load->view('admin/pages/jadwal/konsultasi', $data);
		$this->load->view('admin/layouts/footer');
	}

	public function setujui_konsultasi($id_konsultasi)
	{
		$meet = $this->input->post('meet');
		$data = [
			'meet'   => $meet,
			'status' => 'Disetujui',
		];
		$this->JadwalModel->update_status($id_konsultasi, $data);

		$data_konsultasi['konsultasi'] = $this->JadwalModel->data_email($id_konsultasi)->row();

		$this->load->library('email');
		$config = array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'helpdoctorcare@gmail.com',
			'smtp_pass' => 'hagaibnuhakam12',
			'mailtype' => 'html',
			'charset'  => 'utf-8',
			'priority' => '1'
		);
		$this->email->initialize($config);
		$this->email->set_newline("\r\n");

		$this->email->from('helpdoctorcare@gmail.com', 'Doctor Care');

		$this->email->to($data_konsultasi['konsultasi']->email);  // replace it with receiver mail id
		$this->email->subject('Link Meet Konsultasi'); // replace it with relevant subject 

		$body = $this->load->view('pasien/pages/email-konfirmasi', $data_konsultasi, TRUE);
		$this->email->message($body);
		$this->email->send();

		redirect(base_url('admin/jadwal/konsultasi'));
	}

	public function konsultasi_selesai($id_konsultasi)
	{
		$this->load->model('dokter/DiagnosaModel', 'DiagnosaModel');
		$no_record = $this->DiagnosaModel->id_rekam_medis();
		$id_dp     = $this->JadwalModel->get_dokter($id_konsultasi)->row();
		$data = [
			'status' => 'Selesai',
		];
		$data_diagnosa = [
			'no_record'     => $no_record,
			'id_dokter'     => 	$id_dp->id_dokter,
			'id_pasien' 	=> 	$id_dp->id_pasien,
			'id_konsultasi' => $id_konsultasi,
		];
		$this->DiagnosaModel->tambah_diagnosa($data_diagnosa);
		$this->JadwalModel->update_status($id_konsultasi, $data);
		redirect(base_url('admin/jadwal/konsultasi'));
	}
}

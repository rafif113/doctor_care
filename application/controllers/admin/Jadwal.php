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
		$data = [
			'status'   => 'Disetujui',
		];
		$this->JadwalModel->update_status($id_konsultasi, $data);

		$data_konsultasi['konsultasi'] = $this->JadwalModel->data_email($id_konsultasi)->row();

		$this->load->library('email');
		$config = array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => '9f.rafif.yusuf.a@gmail.com',
			'smtp_pass' => 'aswqdfre123',
			'mailtype' => 'html',
			'charset'  => 'utf-8',
			'priority' => '1'
		);
		$this->email->initialize($config);
		$this->email->set_newline("\r\n");

		$this->email->from('9f.rafif.yusuf.a@gmail.com', 'Doctor Care');

		$this->email->to($data_konsultasi['konsultasi']->email);  // replace it with receiver mail id
		$this->email->subject('Link Meet Konsultasi'); // replace it with relevant subject 

		$body = $this->load->view('pasien/pages/email-konfirmasi', $data_konsultasi, TRUE);
		$this->email->message($body);
		$this->email->send();

		redirect(base_url('admin/jadwal/konsultasi'));
	}
}

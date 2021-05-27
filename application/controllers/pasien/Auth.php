<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('pasien/AuthModel', 'AuthModel');
	}

	public function index()
	{
		$this->load->view('pasien/layouts/header');
		$this->load->view('pasien/pages/login');
		$this->load->view('pasien/layouts/footer');
	}

	public function registrasi()
	{
		$this->load->view('pasien/layouts/header');
		$this->load->view('pasien/pages/registrasi');
		$this->load->view('pasien/layouts/footer');
	}

	public function proses_login()
	{
		if ($this->session->userdata('username')) {
			redirect('pasien');
		}

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == false) {
			$this->index();
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$user = $this->db->get_where('pasien', ['username' => $username])->row_array();
			if ($user) {
				if (password_verify($password, $user['password'])) {
					$data = [
						'id_pasien'   => $user['id_pasien'],
						'username'    => $user['username'],
						'nama_pasien' => $user['nama_pasien']
					];
					$this->session->set_userdata($data);
					redirect('pasien');
				} else {
					$this->session->set_flashdata('flash', 'Password Salah');
					redirect('pasien/auth');
				}
			} else {
				$this->session->set_flashdata('message', 'Akun tidak ditemukan');
				redirect('pasien/auth');
			}
		}
	}

	public function proses_registrasi()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[pasien.username]', [
			'is_unique' => 'Username yang anda pakai telah terdaftar!'
		]);
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]', [
			'matches' => 'Password tidak cocok!',
			'min_length' => 'Password terlalu pendek!'
		]);
		$this->form_validation->set_rules('password2', 'Confrim Password', 'required|trim|matches[password]');
		$this->form_validation->set_rules('nama_pasien', 'Nama Pasien', 'required|trim');
		$this->form_validation->set_rules('no_telp', 'No Telepon', 'required');

		if ($this->form_validation->run() == false) {
			$this->registrasi();
		} else {
			$id_pasien 	 = $this->AuthModel->id_pasien();
			$username    = $this->input->post('username', true);
			$password  	 = $this->input->post('password');
			$no_telp     = $this->input->post('no_telp', true);
			$nama_pasien = $this->input->post('nama_pasien', true);

			$data = [
				'id_pasien'   => $id_pasien,
				'username' 	  => htmlspecialchars($username),
				'password' 	  => password_hash($password, PASSWORD_DEFAULT),
				'no_telp'     => $no_telp,
				'nama_pasien' => htmlspecialchars($nama_pasien),
			];
			$this->AuthModel->tambah_pasien($data);
			$this->session->set_flashdata('flash', 'Akun berhasil dibuat');
			redirect(base_url('pasien/auth'));
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('pasien'));
	}
}

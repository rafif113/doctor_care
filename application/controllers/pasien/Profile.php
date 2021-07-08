<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		if (!$this->session->id_pasien) {
			redirect(base_url('pasien'));
		}
		$this->load->model('pasien/ProfileModel', 'ProfileModel');
	}

	public function index()
	{
		$data['profile'] = $this->ProfileModel->get_profile()->row();
		$this->load->view('pasien/layouts/header');
		$this->load->view('pasien/pages/profile', $data);
		$this->load->view('pasien/layouts/footer');
	}

	public function update_profile($id_pasien)
	{
		$nama_pasien = $this->input->post('nama_pasien');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$alamat = $this->input->post('alamat');
		$no_ktp = $this->input->post('no_ktp');
		$no_telp = $this->input->post('no_telp');
		$tgl_lahir = $this->input->post('tgl_lahir');

		$data_pasien = [
			'nama_pasien' => $nama_pasien,
			'email' => $email,
			'username' => $username,
			'jenis_kelamin' => $jenis_kelamin,
			'no_telp' => $no_telp,
			'tgl_lahir' => $tgl_lahir,
			'alamat' => $alamat,
			'no_ktp' => $no_ktp,
		];
		$query = $this->ProfileModel->update_pasien($id_pasien, $data_pasien);
		if ($query) {
			$this->session->set_flashdata('flash', 'Update');
			redirect(base_url('pasien/profile'));
		}
	}

	public function update_foto($id_pasien)
	{
		$data['user'] = $this->ProfileModel->get_profile()->row_array();
		$upload_image = $_FILES['foto']['name'];
		if ($upload_image) {
			$config['allowed_types'] = 'gif|jpg|png|svg';
			$config['upload_path'] = './uploads/profile';
			$config['max_size']     = '2048';
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('foto')) {
				$old_image = $data['user']['foto'];
				if ($old_image != '' || $old_image != NULL) {
					unlink(FCPATH . 'uploads/profile/' . $old_image);
				}
				$new_image = $this->upload->data('file_name');
				$this->db->set('foto', $new_image);
				$data_pasien = ['foto' => $new_image];
				$this->ProfileModel->update_pasien($id_pasien, $data_pasien);
				$this->session->set_flashdata('flash', 'Update');
				redirect(base_url('pasien/profile'));
			} else {
				$this->session->set_flashdata('gagal', 'File yang anda upload tidak mendukung');
				redirect(base_url('pasien/profile'));
			}
		}
	}
}

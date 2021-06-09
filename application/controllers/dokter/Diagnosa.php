<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Diagnosa extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		if (!$this->session->username) {
			redirect(base_url('dokter/auth'));
		}
		$this->load->helper('tgl_indo');
		$this->load->model('dokter/DiagnosaModel', 'DiagnosaModel');
	}

	public function input_diagnosa($id_konsultasi)
	{
		$data['diagnosa'] 	   = $this->DiagnosaModel->get_diagnosa($id_konsultasi)->row();
		$data['id_konsultasi'] = $id_konsultasi;
		$this->load->view('dokter/layouts/header');
		$this->load->view('dokter/pages/diagnosa', $data);
		$this->load->view('dokter/layouts/footer');
	}

	public function proses_tambah_diagnosa($id_konsultasi)
	{
		$data['diagnosa'] = $this->DiagnosaModel->get_diagnosa($id_konsultasi)->row_array();
		$this->form_validation->set_rules('jam', 'Jam', 'trim|required');

		if ($this->form_validation->run() ==  false) {
			$this->input_diagnosa($id_konsultasi);
		} else {
			//jika ada gambar
			$upload_image = $_FILES['foto_pemeriksaan']['name'];
			if ($upload_image) {
				$config['upload_path']    = './uploads/diagnosa/';
				$config['allowed_types']  = 'jpg|jpeg|png';
				$config['max_size']       = 5000;
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('foto_pemeriksaan')) {
					$old_image = $data['diagnosa']['foto_pemeriksaan'];
					if ($old_image != '' || $old_image != NULL) {
						unlink(FCPATH . 'uploads/diagnosa/' . $old_image);
					}
					$new_image = $this->upload->data('file_name');
					$this->db->set('foto_pemeriksaan', $new_image);
				} else {
					$this->session->set_flashdata('gagal', 'File yang anda upload tidak mendukung');
					redirect(base_url('dokter/diagnosa/input_diagnosa/' . $id_konsultasi));
				}
			}

			$no_rekam_medis 	= $this->input->post('no_rekam_medis');
			$diagnosa    		= $this->input->post('diagnosa');
			$tanggal      		= $this->input->post('tanggal');
			$jam 	  			= $this->input->post('jam');
			$catatan 			= $this->input->post('catatan');
			$foto_pemeriksaan 	= $this->upload->data('file_name');

			$data = [
				'no_rekam_medis' 	=> $no_rekam_medis,
				'diagnosa' 		 	=> $diagnosa,
				'tanggal' 		 	=> $tanggal,
				'jam'			 	=> $jam,
				'catatan'		 	=> $catatan,
				'foto_pemeriksaan'	=> $foto_pemeriksaan
			];
			var_dump($data);
			$this->DiagnosaModel->update_diagnosa($id_konsultasi, $data);
			$this->session->set_flashdata('flash', 'Berhasil Di Update');
			redirect(base_url('dokter/diagnosa/input_diagnosa/' . $id_konsultasi));
		}
	}
}
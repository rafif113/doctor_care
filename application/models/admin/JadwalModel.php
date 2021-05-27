<?php
defined('BASEPATH') or exit('No direct script access allowed');

class JadwalModel extends CI_Model
{

	public function get_jadwal()
	{
		return $this->db->get('jadwal');
	}

	public function get_konsultasi()
	{
		$this->db->select('nama_pasien, meet, konsultasi.id_konsultasi, keluhan, foto_keluhan, tanggal, jam, tanggal_reschedule, jam_reschedule, konsultasi.status,');
		$this->db->from('konsultasi');
		$this->db->join('pasien', 'pasien.id_pasien = konsultasi.id_pasien');
		$query = $this->db->get();
		return $query;
	}

	public function update_status($id_konsultasi, $data)
	{
		$this->db->where('id_konsultasi', $id_konsultasi);
		return $this->db->update('konsultasi', $data);
	}

	public function data_email($id_konsultasi)
	{
		$this->db->select('nama_pasien,email, meet, konsultasi.id_konsultasi, keluhan, foto_keluhan, tanggal, jam, tanggal_reschedule, jam_reschedule, konsultasi.status,');
		$this->db->from('konsultasi');
		$this->db->join('pasien', 'pasien.id_pasien = konsultasi.id_pasien');
		$this->db->where('konsultasi.id_konsultasi', $id_konsultasi);
		$query = $this->db->get();
		return $query;
	}
}

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
		$this->db->select('nama_pasien, meet, konsultasi.id_konsultasi, keluhan, foto_keluhan, tanggal, jam, tanggal_reschedule, jam_reschedule, 
		konsultasi.status,foto_pembayaran,kode_bayar,status_bayar');
		$this->db->from('konsultasi');
		$this->db->join('pasien', 'pasien.id_pasien = konsultasi.id_pasien');
		$this->db->join('pembayaran', 'pembayaran.id_konsultasi = konsultasi.id_konsultasi');
		$query = $this->db->get();
		return $query;
	}

	public function get_dokter($id_konsultasi)
	{
		$this->db->select('id_dokter, id_pasien');
		$this->db->from('konsultasi');
		$this->db->where('id_konsultasi', $id_konsultasi);
		$query = $this->db->get();
		return $query;
	}

	public function get_pembayaran()
	{
		$query = $this->db->get('pembayaran');
		return $query;
	}

	public function update_status($id_konsultasi, $data)
	{
		$this->db->where('id_konsultasi', $id_konsultasi);
		return $this->db->update('konsultasi', $data);
	}

	public function update_pembayaran($id_konsultasi, $data)
	{
		$this->db->where('id_konsultasi', $id_konsultasi);
		return $this->db->update('pembayaran', $data);
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

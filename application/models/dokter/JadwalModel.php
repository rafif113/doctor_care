<?php
defined('BASEPATH') or exit('No direct script access allowed');

class JadwalModel extends CI_Model
{

	public function id_jadwal()
	{
		$jadwal = "JDW-";
		$q     = "SELECT MAX(TRIM(REPLACE(id_jadwal,'JDW-', ''))) as nama
             FROM jadwal WHERE id_jadwal LIKE '$jadwal%'";
		$baris = $this->db->query($q);
		$akhir = $baris->row()->nama;
		$akhir++;
		$id    = str_pad($akhir, 3, "0", STR_PAD_LEFT);
		$id    = "JDW-" . $id;
		return $id;
	}

	public function tambah_jadwal($data)
	{
		return $this->db->insert('jadwal', $data);
	}

	public function update_status($id_konsultasi, $data)
	{
		$this->db->where('id_konsultasi', $id_konsultasi);
		return $this->db->update('konsultasi', $data);
	}

	public function get_single_jadwal()
	{
		$id_dokter = $this->session->id_dokter;
		return $this->db->get_where('jadwal', ['id_dokter' => $id_dokter]);
	}

	public function get_konsultasi()
	{
		$id_dokter = $this->session->id_dokter;
		$this->db->select('nama_pasien, meet, konsultasi.id_konsultasi, keluhan, foto_keluhan, tanggal, jam, tanggal_reschedule, jam_reschedule, konsultasi.status,');
		$this->db->from('konsultasi');
		$this->db->join('pasien', 'pasien.id_pasien = konsultasi.id_pasien');
		$this->db->where('konsultasi.id_dokter', $id_dokter);
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
}

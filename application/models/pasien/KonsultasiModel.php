<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KonsultasiModel extends CI_Model
{

	public function id_konsultasi()
	{
		$konsultasi = "KST-";
		$q     = "SELECT MAX(TRIM(REPLACE(id_konsultasi,'KST-', ''))) as nama
             FROM konsultasi WHERE id_konsultasi LIKE '$konsultasi%'";
		$baris = $this->db->query($q);
		$akhir = $baris->row()->nama;
		$akhir++;
		$id    = str_pad($akhir, 3, "0", STR_PAD_LEFT);
		$id    = "KST-" . $id;
		return $id;
	}

	public function tambah_konsultasi($data)
	{
		return $this->db->insert('konsultasi', $data);
	}

	public function get_konsultasi()
	{
		$id_pasien = $this->session->id_pasien;
		$this->db->select('nama_dokter, keahlian, foto,meet, konsultasi.id_konsultasi, tanggal, jam,tanggal_reschedule, jam_reschedule, konsultasi.status,pembayaran.*');
		$this->db->from('konsultasi');
		$this->db->join('dokter', 'dokter.id_dokter = konsultasi.id_dokter');
		$this->db->join('pembayaran', 'pembayaran.id_konsultasi = konsultasi.id_konsultasi');
		$this->db->where('konsultasi.id_pasien', $id_pasien);
		$query = $this->db->get();
		return $query;
	}

	public function update_status($id_konsultasi, $data)
	{
		$this->db->where('id_konsultasi', $id_konsultasi);
		return $this->db->update('konsultasi', $data);
	}
	public function invoice($id_konsultasi)
	{
		$this->db->select('tanggal, meet, konsultasi.id_dokter, keluhan, kode_bayar, nominal, nama_dokter, nama_pasien, pasien.email, pasien.alamat, pasien.no_telp');
		$this->db->from('konsultasi');
		$this->db->join('dokter', 'dokter.id_dokter = konsultasi.id_dokter');
		$this->db->join('pasien', 'pasien.id_pasien = konsultasi.id_pasien');
		$this->db->join('pembayaran', 'pembayaran.id_konsultasi = konsultasi.id_konsultasi');
		$this->db->where('konsultasi.id_konsultasi', $id_konsultasi);
		$query = $this->db->get();
		return $query;
	}

	public function get_rekam_medis($id_konsultasi)
	{
		return $this->db->get_where('rekam_medis', ['id_konsultasi' => $id_konsultasi]);
	}

	public function download_diagnosa($no_record)
	{
		$this->db->select('foto_pemeriksaan');
		$this->db->from('rekam_medis');
		$this->db->where('no_record', $no_record);
		$query = $this->db->get();
		return $query;
	}
}

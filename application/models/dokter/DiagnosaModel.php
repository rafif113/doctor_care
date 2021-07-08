<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DiagnosaModel extends CI_Model
{

	public function id_rekam_medis()
	{
		$rekam_medis = "RC-";
		$q     = "SELECT MAX(TRIM(REPLACE(no_record,'RC-', ''))) as nama
             FROM rekam_medis WHERE no_record LIKE '$rekam_medis%'";
		$baris = $this->db->query($q);
		$akhir = $baris->row()->nama;
		$akhir++;
		$id    = str_pad($akhir, 3, "0", STR_PAD_LEFT);
		$id    = "RC-" . $id;
		return $id;
	}

	// public function id_resep_obat()
	// {
	// 	$resep_obat = "RSO-";
	// 	$q     = "SELECT MAX(TRIM(REPLACE(id_resep_obat,'RSO-', ''))) as nama
	//          FROM resep_obat WHERE id_resep_obat LIKE '$resep_obat%'";
	// 	$baris = $this->db->query($q);
	// 	$akhir = $baris->row()->nama;
	// 	$akhir++;
	// 	$id    = str_pad($akhir, 3, "0", STR_PAD_LEFT);
	// 	$id    = "RSO-" . $id;
	// 	return $id;
	// }

	public function get_diagnosa($id_konsultasi)
	{
		return $this->db->get_where('rekam_medis', ['id_konsultasi' => $id_konsultasi]);
	}

	public function tambah_diagnosa($data)
	{
		return $this->db->insert('rekam_medis', $data);
	}
	public function tambah_resep($data)
	{
		return $this->db->insert('resep_obat', $data);
	}

	public function update_diagnosa($id_konsultasi, $data)
	{
		$this->db->where('id_konsultasi', $id_konsultasi);
		return $this->db->update('rekam_medis', $data);
	}

	public function update_resep_obat($id_konsultasi, $data)
	{
		$this->db->where('id_konsultasi', $id_konsultasi);
		return $this->db->update('resep_obat', $data);
	}

	public function get_obat()
	{
		return $this->db->get('obat');
	}

	public function get_resep()
	{
		return $this->db->get('resep');
	}

	public function get_resep_konsultasi($id_konsultasi)
	{
		$this->db->select('resep_obat.*, obat.*, resep.*');
		$this->db->from('resep_obat');
		$this->db->join('obat', 'obat.id_obat = resep_obat.id_obat');
		$this->db->join('resep', 'resep.id_resep = resep_obat.id_resep');
		$this->db->where('resep_obat.id_konsultasi', $id_konsultasi);
		$query = $this->db->get();
		return $query;
	}
}

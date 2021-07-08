<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ObatModel extends CI_Model
{

	public function id_obat()
	{
		$obat = "OBT-";
		$q     = "SELECT MAX(TRIM(REPLACE(id_obat,'OBT-', ''))) as nama
             FROM obat WHERE id_obat LIKE '$obat%'";
		$baris = $this->db->query($q);
		$akhir = $baris->row()->nama;
		$akhir++;
		$id    = str_pad($akhir, 3, "0", STR_PAD_LEFT);
		$id    = "OBT-" . $id;
		return $id;
	}

	public function get_obat()
	{
		return $this->db->get('obat');
	}

	public function tambah_obat($data)
	{
		return $this->db->insert('obat', $data);
	}

	public function id_resep()
	{
		$resep = "RSP-";
		$q     = "SELECT MAX(TRIM(REPLACE(id_resep,'RSP-', ''))) as nama
             FROM resep WHERE id_resep LIKE '$resep%'";
		$baris = $this->db->query($q);
		$akhir = $baris->row()->nama;
		$akhir++;
		$id    = str_pad($akhir, 3, "0", STR_PAD_LEFT);
		$id    = "RSP-" . $id;
		return $id;
	}

	public function get_resep()
	{
		return $this->db->get('resep');
	}

	public function tambah_resep($data)
	{
		return $this->db->insert('resep', $data);
	}

	public function get_pasien()
	{
		$this->db->select('resep_obat.*, pasien.*');
		$this->db->from('resep_obat');
		$this->db->join('pasien', 'pasien.id_pasien = resep_obat.id_pasien');
		$this->db->group_by('id_konsultasi');
		$this->db->order_by('id_konsultasi', 'asc');
		$query = $this->db->get();
		return $query;
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
	public function update_resep($id_konsultasi, $data_centang)
	{
		$this->db->where('id_konsultasi', $id_konsultasi);
		return $this->db->update('resep_obat', $data_centang);
	}
}

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
}

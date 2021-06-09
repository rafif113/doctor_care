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

	public function get_diagnosa($id_konsultasi)
	{
		return $this->db->get_where('rekam_medis', ['id_konsultasi' => $id_konsultasi]);
	}

	public function tambah_diagnosa($data)
	{
		return $this->db->insert('rekam_medis', $data);
	}

	public function update_diagnosa($id_konsultasi, $data)
	{
		$this->db->where('id_konsultasi', $id_konsultasi);
		return $this->db->update('rekam_medis', $data);
	}
}

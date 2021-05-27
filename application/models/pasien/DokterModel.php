<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DokterModel extends CI_Model
{

	public function get_dokter()
	{
		return $this->db->get('dokter');
	}

	public function get_single_dokter($id_dokter)
	{
		return $this->db->get_where('dokter', ['id_dokter' => $id_dokter]);
	}
}

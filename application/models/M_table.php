<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_table extends CI_Model
{

	public function getLastQuery()
	{
		$this->db->order_by('id','desc');
		return $this->db->get('tbl_kolam');
	}
	public function getAll()
	{
		$this->db->order_by('id','desc');
		return $this->db->get('tbl_kolam');
	}
	public function relasi()
	{
		$this->db->distinct();
		$this->db->select('id_nama_kolam,nama_kolam');
		$this->db->from('tbl_kolam');
		$this->db->join('tbl_nama_kolam', 'tbl_nama_kolam.id = tbl_kolam.id_nama_kolam');
		$query = $this->db->get()->result_array();
		return $query;
	}

	public function getKolom($id)
	{
		$hasil = $this->db->query("SELECT * FROM tbl_kolam WHERE id_nama_kolam= '$id'");
		return $hasil->result();
	}

}
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
		$this->db->select('*');
		$this->db->from('tbl_kolam');
		$this->db->join('tbl_nama_kolam', 'tbl_nama_kolam.id = tbl_kolam.id_nama_kolam');
		$query = $this->db->get()->result_array();
		return $query;
	}
}
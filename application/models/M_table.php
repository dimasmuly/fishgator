<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
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
}
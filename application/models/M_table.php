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
	public function updateklm()
	{
		$post = $this->input->post();
		$id_kolam = $post['id_nama_kolam'];
		$cek= $this->getKolom($id_kolam);
		$this->tanggal = $post["tanggal"];
        $this->suhu = $post["suhu"];
        $this->turbidity = $post["turbidity"];
        $this->oxigen = $post["oxigen"];
		$this->ph = $post["ph"];
		  
		if(count($cek ) > 0)
		return $this->db->update('tbl_kolam', $this, array('id_nama_kolam' => $id_kolam));
		else
		return $this->db->insert('tbl_kolam', $this);

}	   
	public function getKolom($id)
	{
		$hasil = $this->db->query("SELECT * FROM tbl_kolam WHERE id_nama_kolam= '$id' ORDER BY id DESC");
		return $hasil->result();
	}

}
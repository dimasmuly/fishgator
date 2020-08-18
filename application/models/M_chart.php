<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_chart extends CI_Model
{
    public function getAll()
    {
        return $this->db->get('tbl_kolam');
    }
}
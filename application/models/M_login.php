<?php 
 defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model{	

	public function login_auth($username,$password){		
		$q = $this->db->get_where('login', array('username' => $username, 'password' => md5($password)));
		$query = $q->num_rows();
		if ($query > 0) {
			return 1;
		}else{
			return 0;
		}

	}	
}
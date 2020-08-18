<?php 
/**
 * 
 */
class M_auth extends CI_Model{
	
	public function __construct(){
		$this->load->database();
	}
    
	public function login_auth($username,$password){
		$query = $this->db->get_where('login', array('username' => $username , 'password' => md5($password)));
		// $row = $query->row();
		if ($query->num_rows() > 0) {
			return 1;
		}else{
			return 0;
		}
	}
}
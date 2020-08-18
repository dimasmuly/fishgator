<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_auth');
		$this->load->library('session');
		$this->load->helper(array('form','url','string'));	
	}

	public function index()
	{
		$this->load->view('frontend/auth/login');
	}

	function aksi_login()
	{
		if (isset($_POST['submit'])) {
			
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$cek = $this->M_auth->login_auth($username, $password);
			$query = $this->db->get_where('login', array('username' => $username , 'password' => md5($password)));
			$row = $query->row();

			if($cek == 1){
	 			$data = array(
			        'id' => $row->id,
			        'username' => $row->username,
			        'password' => $row->password,
			        'logged_in' => TRUE
		    	);
		    	$this->session->set_userdata($data);
	 
				redirect('Dashboard');
	 
			}else{
				echo "Username dan password salah !";
			}

		}

		// if($this->session->userdata('status') != "login"){
		// 	redirect(base_url("login"));
		// }
		
	}
	function logout(){
		$this->session->sess_destroy();
		redirect('auth/login');
	}
}
 


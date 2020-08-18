<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_perusahaan extends CI_Controller {

	public function index()
	{
		$this->load->view('templates_frontend/header');
		$this->load->view('frontend/tentang_kami/profile_perusahaan');
		$this->load->view('templates_frontend/footer');
	}
}

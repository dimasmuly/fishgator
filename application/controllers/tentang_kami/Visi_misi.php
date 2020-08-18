<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visi_misi extends CI_Controller {

	public function index()
	{
		$this->load->view('templates_frontend/header');
		$this->load->view('frontend/tentang_kami/visi_misi');
		$this->load->view('templates_frontend/footer');
	}
}

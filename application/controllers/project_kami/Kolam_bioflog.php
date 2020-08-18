<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kolam_bioflog extends CI_Controller {

	public function index()
	{
		$this->load->view('templates_frontend/header');
		$this->load->view('frontend/project_kami/kolam_bioflog');
		$this->load->view('templates_frontend/footer');
	}
}

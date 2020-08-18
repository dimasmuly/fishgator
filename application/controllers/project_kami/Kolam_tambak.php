<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kolam_tambak extends CI_Controller {

	public function index()
	{
		$this->load->view('templates_frontend/header');
		$this->load->view('frontend/project_kami/kolam_tambak');
		$this->load->view('templates_frontend/footer');
	}
}

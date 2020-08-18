<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hatchery extends CI_Controller {

	public function index()
	{
		$this->load->view('templates_frontend/header');
		$this->load->view('frontend/project_kami/hatchery');
		$this->load->view('templates_frontend/footer');
	}
}

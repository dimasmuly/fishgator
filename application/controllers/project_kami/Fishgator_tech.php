<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fishgator_tech extends CI_Controller {

	public function index()
	{
		$this->load->view('templates_frontend/header');
		$this->load->view('frontend/project_kami/fishgator_tech');
		$this->load->view('templates_frontend/footer');
	}
}

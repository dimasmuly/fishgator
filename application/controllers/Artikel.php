<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	public function index()
	{
		$this->load->view('templates_frontend/header');
		$this->load->view('frontend/artikel');
		$this->load->view('templates_frontend/footer');
	}
}

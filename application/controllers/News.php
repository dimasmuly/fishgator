<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function index()
	{
		$this->load->view('templates_frontend/header');
		$this->load->view('frontend/news');
		$this->load->view('templates_frontend/footer');
	}
}

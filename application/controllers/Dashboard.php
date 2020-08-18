<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_table');
	}

	public function index()
	{
		$data['last_data'] = $this->M_table->getLastQuery()->row();
		
		$this->load->view('templates_backend/header');
		$this->load->view('templates_backend/nav');
		$this->load->view('templates_backend/sidebar');
		$this->load->view('backend/dashboard',$data);
		$this->load->view('templates_backend/footer');
	}
}

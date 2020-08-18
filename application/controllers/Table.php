<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Table extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_table');
	}

	public function index()
	{
        $data['kolam'] = $this->M_table->getAll()->result();
		
		$this->load->view('templates_backend/header');
		$this->load->view('templates_backend/nav');
		$this->load->view('templates_backend/sidebar');
		$this->load->view('backend/tables',$data);
		$this->load->view('templates_backend/footer');
	}
}


<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_table');
		$this->load->model('M_chart','chart');
	}

	public function index()
	{

		$data['select'] = $this->M_table->relasi();
		// print_r($data['select']);exit;
		$data['last_data'] = $this->M_table->getLastQuery()->row();
		
		// chart
		$data['ph'] = $this->chart->getAll()->result();
		$data['oxigen'] = $this->chart->getAll()->result();
		$data['turbidity'] = $this->chart->getAll()->result();
		$data['suhu'] = $this->chart->getAll()->result();


		$this->load->view('templates_backend/header');
		$this->load->view('templates_backend/nav');
		$this->load->view('templates_backend/sidebar');
		$this->load->view('backend/dashboard',$data);
		$this->load->view('templates_backend/footer');
	}

	public function get_kolom()
	{
		$id = $this->input->post('id');
		$data = $this->M_table->getKolom($id);
		echo json_encode($data);
	}

}

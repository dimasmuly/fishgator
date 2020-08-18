<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class contact_us extends CI_Controller {

	public function index()
	{
		$this->load->view('templates_frontend/header');
		$this->load->view('frontend/tentang_kami/contact_us');
		$this->load->view('templates_frontend/footer');
	}
	public function proses()
	{
		$nama = $this->input->post('nama');
	    $email = $this->input->post('email');
        $url = $this->input->post('url');
        $komen = $this->input->post('komen');

        $query = $this->db->query("INSERT INTO contact_us(nama,email,url,komentar) VALUES('$nama','$email','$url','$komen')");
        redirect('tentang_kami/contact_us');
	}
}

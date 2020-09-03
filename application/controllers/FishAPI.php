<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FishAPI extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_table');
		$this->load->model('M_chart','chart');
    }
    public function update(){
        $this->M_table->updateklm();
    }
}
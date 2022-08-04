<?php

class Detailproperti_c extends CI_Controller
{
	public function index(){
		$this->load->view('parts/header');
		$this->load->view('pages/Detailproperti_v');
		$this->load->view('parts/footer');
	}
}
<?php

class Tentang_c extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('M_tentang');
		$this->load->model('Beranda_m');
	}

	public function index(){
		$tentang = $this->Beranda_m->getAll2();
		$title = $this->M_tentang->getTitle();
		$desc = $this->M_tentang->getMainMarket();

		$data['tentang'] = $tentang;
		$data['title'] = 'About Us - ' . $title->nama_tentang;
		$data['namaPerusahaan'] = $title->nama_tentang;
		$data['metadesc'] = $title->nama_tentang . ' - ' . $desc->main_market;

		$this->load->view('parts/header', $data);
		$this->load->view('pages/Tentang_v', $data);
		$this->load->view('parts/footer', $data);
	}

}


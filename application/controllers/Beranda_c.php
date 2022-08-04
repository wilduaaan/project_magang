<?php

class Beranda_c extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Beranda_m');
		$this->load->model('Galeri_m');
		$this->load->model('M_tentang');
	}

	public function index()
	{
		$title = $this->M_tentang->getTitle();
		$desc = $this->M_tentang->getDesc();
		$slider = $this->Beranda_m->getAll1();
		$galeri = $this->Galeri_m->getAll1();
		$tentang = $this->Beranda_m->getAll2();

		$data['slider'] = $slider;
		$data['tentang'] = $tentang;
		$data['galeri'] = $galeri;
		$data['namaPerusahaan'] = $title->nama_tentang;
		$data['title'] = $title->nama_tentang . ' - Home';
		$data['metadesc'] = $title->nama_tentang . ' - ' . $desc->deskripsi_tentang;

		$this->load->view('parts/header', $data);
		$this->load->view('pages/Beranda_v', $data);
		$this->load->view('parts/footer', $data);
	}
}

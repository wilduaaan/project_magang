<?php

class Galeri_c extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Galeri_m');
		$this->load->model('M_tentang');
	}

	public function index()
	{
		$title = $this->M_tentang->getTitle();
		$desc = $this->M_tentang->getDesc();
		$album = $this->Galeri_m->getAlbum()->result_array();
		$data['album'] = $album;
		$data['galeri'] = $this->Galeri_m;
		$data['title'] = 'Photo Gallery - ' . $title->nama_tentang;
		$data['namaPerusahaan'] = $title->nama_tentang;

		$data['metadesc'] = $title->nama_tentang . ' - Our Photo Gallery - ' ;
		foreach ($album as $a) {
			$data['metadesc'] .= $a['nama_album'] . ', ';
		}
		$data['metadesc'] .= ' - ' . $desc->deskripsi_tentang;
		
		$this->load->view('parts/header', $data);
		$this->load->view('pages/Galeri_v', $data);
		$this->load->view('parts/footer', $data);
	}
	
	public function detail($album)
	{
		$title = $this->M_tentang->getTitle();
		$desc = $this->M_tentang->getDesc();
		if ($this->session->userdata('current_language')=='English'){
			$idAlbum = $this->Galeri_m->getIdAlbumEn(str_replace('-', ' ', $album));
		//	print_r($this->db->last_query());
		}else{
			$idAlbum = $this->Galeri_m->getIdAlbum(str_replace('-', ' ', $album));
		//	print_r($this->db->last_query());
		}	

		$data['galeri'] = $this->Galeri_m->getPhotoByAlbumDetail($idAlbum->id_album);
		$data['title'] = str_replace('-', ' ', $album) . ' - ' . $title->nama_tentang;
		$data['judul'] = str_replace('-', ' ', $album);
		$data['namaPerusahaan'] = $title->nama_tentang;
		$data['metadesc'] = $title->nama_tentang . ' - Photo Of ' . str_replace('-', ' ', $album) . ' Album - ' . $desc->deskripsi_tentang;

		$this->load->view('parts/header', $data);
		$this->load->view('pages/Detailgaleri_v', $data);
		$this->load->view('parts/footer', $data);
	}
}

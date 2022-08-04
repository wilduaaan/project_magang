<?php

class Layanan_c extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('Layanan_m');
		$this->load->model('M_tentang');
	}

	public function index(){
		$layanan = $this->Layanan_m->getAll3();
		$title = $this->M_tentang->getTitle();
		$product = $this->Layanan_m->produk()->result_array();
	
		$data['layanan'] = $layanan;
		$data['gambar'] = $this->Layanan_m;
		$data['product'] = $product;
		$data['title'] = 'Our Products - ' . $title->nama_tentang;
		$data['namaPerusahaan'] = $title->nama_tentang;

		// Meta description
		$data['metadesc'] = $title->nama_tentang . ' - Our Product (Export Quality) : ';
		foreach ($product as $p) {
			$data['metadesc'] .=  $p['nama_kategori'] . ' (';
			foreach ($this->Layanan_m->getNamaLayanan($p['id_kategori'])->result_array() as $ps) {
				$data['metadesc'] .= $ps['nama_layanan'] . ', ';
			}
			$data['metadesc'] .= '), ';
		}
		
		
		$this->load->view('parts/header', $data);
		$this->load->view('pages/Layanan_v', $data);
		$this->load->view('parts/footer', $data);
		
	}
	
	public function product($prd){
		$title = $this->M_tentang->getTitle();
		if ($this->session->userdata('current_language')=='English'){
			$idKategori = $this->Layanan_m->getIdKategoriEn(str_replace('-', ' ', $prd));
		}else{
			$idKategori = $this->Layanan_m->getIdKategori(str_replace('-', ' ', $prd));
		}	
		
		$data['product'] = $this->Layanan_m->gambarprodukall($idKategori->id_kategori);
		$data['judul'] = str_replace('-', ' ', $prd);
		$data['title'] = str_replace('-', ' ', $prd) . ' - ' . $title->nama_tentang; 
		$data['namaPerusahaan'] = $title->nama_tentang;

		// Meta description
		$data['metadesc'] = $title->nama_tentang . ' - Our Product (Export Quality) : ' . str_replace('-', ' ', $prd) . ' (';
		
		foreach ($this->Layanan_m->getNamaLayanan($idKategori->id_kategori)->result() as $p) {
			$data['metadesc'] .= $p->nama_layanan . ', ';
		}
		$data['metadesc'] .= ')';

		$this->load->view('parts/header', $data);
		$this->load->view('pages/Layanan_f', $data);
		$this->load->view('parts/footer', $data);
	}
	
	public function detail($prd){
		$nama = $this->uri->segment(3);
		$layanan = $this->Layanan_m->getAll3();
		if ($this->session->userdata('current_language')=='English'){
			$detail = $this->Layanan_m->detail_data_en(str_replace('-', ' ', $prd));
		}else{
			$detail = $this->Layanan_m->detail_data(str_replace('-', ' ', $prd));
		}	
		
		$title = $this->M_tentang->getTitle();
		
		$idLayanan = $detail->kategori;
		$kategori = $this->Layanan_m->getKategori($idLayanan);

		$data['kategori'] = $kategori;
		$data['detail'] = $detail;	
		$data['layanan'] = $layanan;
		$data['nama'] = $nama;
		$data['title'] = str_replace('-', ' ', $nama ) . ' - ' . $title->nama_tentang;
		$data['namaPerusahaan'] = $title->nama_tentang;

		// Meta decription
		$data['metadesc'] = $title->nama_tentang . ' - ' . str_replace('-', ' ', $prd) . ' - ' . $detail->deskripsi_layanan;
		
		$this->load->view('parts/header', $data);
		$this->load->view('pages/Detaillayanan_v', $data);
		$this->load->view('parts/footer', $data);
	}
}

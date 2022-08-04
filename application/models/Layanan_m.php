<?php

class Layanan_m extends CI_Model
{
	public function getAll3()
	{

		//$this->db->limit(3);
		$this->db->order_by('nama_layanan', 'ASC');
		return $this->db->get('tb_layanan');
	}
	public function getAll5()
	{
		$this->db->distinct();
		$this->db->order_by('nama_layanan', 'ASC');
		return $this->db->get('tb_layanan');
	}
	public function produk()
	{	
		return $this->db->get('tb_kategori');
	}
	public function kat()
	{
		$this->db->select('nama_kategori');
		return $this->db->get('tb_kategori');
	}
	public function detail_data($id)
	{
		$query = $this->db->order_by('nama_layanan', 'ASC');
		$query = $this->db->get_where('tb_layanan', array('nama_layanan' => $id))->row();
		return $query;
	}

	public function detail_data_en($id){
		$query = $this->db->order_by('nama_layanan', 'ASC');
		$query = $this->db->get_where('tb_layanan', array('nama_layanan_en' => $id))->row();
		return $query;
	}
	public function gambarproduk($prd)
	{
		$this->db->order_by('foto_layanan', 'ASC');
		$this->db->limit(3);
		$this->db->where('kategori', $prd);
		return $this->db->get('tb_layanan');
	}
	public function gambarprodukall($prd)
	{
		$this->db->order_by('foto_layanan', 'ASC');
		$this->db->where('kategori', $prd);
		return $this->db->get('tb_layanan');
	}

	public function getIdKategori($album)
	{
		$this->db->where('nama_kategori', $album);
		return $this->db->get('tb_kategori')->row();
	}

	public function getIdKategoriEn($album){
		$this->db->where('nama_kategori_en', $album);
		return $this->db->get('tb_kategori')->row();
	}

	public function getNamaLayanan($prd) {
		$this->db->where('kategori', $prd);
		return $this->db->get('tb_layanan');
	}

	public function getKategori($id) {
		$this->db->where('id_kategori', $id);
		return $this->db->get('tb_kategori')->row();
	}
}

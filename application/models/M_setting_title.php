<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_setting_title extends CI_Model {

	
	public function get_by_meta_beranda(){

		$query = $this->db->query('select a.id_meta_beranda as set_data1, b.title as set_data2, c.meta_keyword as set_data3,d.meta_description as set_data4, e.link_canonical as set_data5 from meta_beranda a
			left outer join meta_beranda b on b.id_meta_beranda="1" 
			left outer join meta_beranda c on c.id_meta_beranda="1" 
			left outer join meta_beranda d on d.id_meta_beranda="1" 
			left outer join meta_beranda e on e.id_meta_beranda="1" 
			left outer join meta_beranda f on f.id_meta_beranda="1"
			where a.id_meta_beranda="1"
			');
		return $query->row();
	}

	public function get_by_meta_produk() {
	
		$query = $this->db->query('select a.id_meta_produk as set_data1, b.title as set_data2, c.meta_keyword as set_data3,d.meta_description as set_data4, e.link_canonical as set_data5 from meta_produk a
			left outer join meta_produk b on b.id_meta_produk="1" 
			left outer join meta_produk c on c.id_meta_produk="1" 
			left outer join meta_produk d on d.id_meta_produk="1" 
			left outer join meta_produk e on e.id_meta_produk="1" 
			left outer join meta_produk f on f.id_meta_produk="1"
			where a.id_meta_produk="1"
			');
		return $query->row();
	}	


	public function get_by_meta_galeri() {
	
		$query = $this->db->query('select a.id_meta_galeri as set_data1, b.title as set_data2, c.meta_keyword as set_data3,d.meta_description as set_data4, e.link_canonical as set_data5 from meta_galeri a
			left outer join meta_galeri b on b.id_meta_galeri="1" 
			left outer join meta_galeri c on c.id_meta_galeri="1" 
			left outer join meta_galeri d on d.id_meta_galeri="1" 
			left outer join meta_galeri e on e.id_meta_galeri="1" 
			left outer join meta_galeri f on f.id_meta_galeri="1"
			where a.id_meta_galeri="1"
			');
		return $query->row();
	}


	public function get_by_meta_kontak() {
	
		$query = $this->db->query('select a.id_meta_kontak as set_data1, b.title as set_data2, c.meta_keyword as set_data3,d.meta_description as set_data4, e.link_canonical as set_data5 from meta_kontak a
			left outer join meta_kontak b on b.id_meta_kontak="1" 
			left outer join meta_kontak c on c.id_meta_kontak="1" 
			left outer join meta_kontak d on d.id_meta_kontak="1" 
			left outer join meta_kontak e on e.id_meta_kontak="1" 
			left outer join meta_kontak f on f.id_meta_kontak="1"
			where a.id_meta_kontak="1"
			');
		return $query->row();
	}
	public function get_by_meta_detail() {
	
		$query = $this->db->query('select a.id_meta_detail as set_data1, b.title as set_data2, c.meta_keyword as set_data3,d.meta_description as set_data4, e.link_canonical as set_data5 from meta_detail a
			left outer join meta_detail b on b.id_meta_detail="1" 
			left outer join meta_detail c on c.id_meta_detail="1" 
			left outer join meta_detail d on d.id_meta_detail="1" 
			left outer join meta_detail e on e.id_meta_detail="1" 
			left outer join meta_detail f on f.id_meta_detail="1"
			where a.id_meta_detail="1"
			');
		return $query->row();
	}



	public function update_title1($data1,$where) {
		$this->db->update('meta_beranda', $data1, $where);
		return $this->db->affected_rows();
	}
	
	public function update_title2($data1,$where) {
		$this->db->update('meta_produk', $data1, $where);
		return $this->db->affected_rows();
	}

	public function update_title3($data1,$where) {
		$this->db->update('meta_galeri', $data1, $where);
		return $this->db->affected_rows();
	}

	public function update_title4($data1,$where) {
		$this->db->update('meta_kontak', $data1, $where);
		return $this->db->affected_rows();
	}
	public function update_title5($data1,$where) {
		$this->db->update('meta_detail', $data1, $where);
		return $this->db->affected_rows();
	}

}
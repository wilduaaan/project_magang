<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_beranda extends CI_Model {


	function view() {
		$this->db->where('id_beranda','1');
		$ambil = $this->db->get('tb_beranda');
		return $ambil->row();
		// if ($ambil->num_rows() > 0) {
		// 		foreach ($ambil->result_array() as $data1) {
		// 			$hasil[] = $data1;
		// 	} 
		// 	return $hasil;
		// }
	}

	function set_ukuran(){
		$this->db->select('*');
		$this->db->from('setting_ukuran');
		$this->db->where('id_setting_ukuran','1');
		$query = $this->db->get();
		return $query->row();
	}


	function meta_beranda(){
		$query=$this->db->get('meta_beranda');
		return $query->row();
	}

	var $table = 'tb_beranda';
	// var $column_order = array('id_kontak','kontak_lat','kontak_long','kontak_deskripsi','kontak_judul','kontak_title_meta','kontak_deskripsi_meta','kontak_keyword_meta',null); //set column field database for datatable orderable
	// var $column_search = array('id_kontak','kontak_lat','kontak_long','kontak_deskripsi','kontak_judul','kontak_title_meta','kontak_deskripsi_meta','kontak_keyword_meta',); //set column field database for datatable searchable just title , author , category are searchable
	// var $order = array('id_kontak' => 'asc'); // default order

	
	// public function get_by_id() {
	// 	$this->db->from($this->table);
	// 	$this->db->where('id_kontak','1');
	// 	$query = $this->db->get();
	// 	return $query->row();
	// }
	
	public function update($where, $data) {
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}
	
}
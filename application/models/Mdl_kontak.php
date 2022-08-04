<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mdl_kontak extends CI_Model {


	function view() {
		$this->db->where('id_kontak','1');
		$ambil = $this->db->get('tb_kontak');
		return $ambil->row();
		// if ($ambil->num_rows() > 0) {
		// 		foreach ($ambil->result_array() as $data1) {
		// 			$hasil[] = $data1;
		// 	}
		// 	return $hasil;
		// }
	}





	var $table = 'tb_kontak';
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

	function tbkontak()
	{
		$kontak = $this->db->get('tb_kontak');
		return $kontak->result_array();
	}
	
}
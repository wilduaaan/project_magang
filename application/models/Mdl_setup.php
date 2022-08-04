<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mdl_setup extends CI_Model {

	//private $db2;
	
	public function __construct(){
	  parent::__construct();
			 //$this->db2 = $this->load->database('pariwisata_en', TRUE);
	}
	//memanggil data basenya 
	var $table = 't_setup';

	public function get_by_id() {
		$this->db->select('a.fc_isi as set_data1, b.fc_isi as set_data2, c.fc_isi as set_data3, d.fc_isi as set_data4, e.fc_isi as set_header1,f.fc_isi as set_header2, g.fc_isi as set_header3, h.fc_isi as set_header4, i.fc_isi as set_logo1');
		$this->db->from('t_setup a');
		$this->db->join('t_setup b ', 'b.fc_param="FACEBOOK"', 'left outer');
			$this->db->join('t_setup c ', 'c.fc_param="INSTAGRAM"', 'left outer');
			$this->db->join('t_setup d ', 'd.fc_param="YOUTUBE"', 'left outer');
			//untuk bagian header
			$this->db->join('t_setup e ', 'e.fc_param="HEADER_TENTANG" 	AND e.fc_kode="2"', 'left outer');
			$this->db->join('t_setup f ', 'f.fc_param="HEADER_PRODUK" 	AND f.fc_kode="3"', 'left outer');
			$this->db->join('t_setup g ', 'g.fc_param="HEADER_FOTO" 	AND g.fc_kode="4"', 'left outer');
			$this->db->join('t_setup h ', 'h.fc_param="HEADER_KONTAK" 	AND h.fc_kode="5"', 'left outer');
			$this->db->join('t_setup i ', 'i.fc_param="LOGO" 			AND i.fc_kode="6"', 'left outer');
			//apabila menambahi lagi bagian diatasnya menggunakan  "join2" tdk usah menambahi bagian "where"
		//menampilkan data di dalam dbnya
		$this->db->where('a.fc_param','EMAIL');

		$query = $this->db->get();
		return $query->row();
	}	
	public function get_by_id2($id) {
	 	$this->db->from($this->table);
		$this->db->where('id',$id);
		$query = $this->db->get();
	 	return $query->row();
	}

	public function update_link($data1,$data2,$data3,$data4) {
		$this->db->update($this->table, $data1, $data2, $data3, $data4);
		return $this->db->affected_rows();
	}
	
	public function update_link_en($data1,$data2,$data3,$data4) {
		$this->db2->update($this->table, $data1, $data2, $data3, $data4);
		return $this->db2->affected_rows();
	}

	public function update_data($data, $where) {
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}
}	
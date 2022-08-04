<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mdl_gallery extends CI_Model {
	
	var $table = 'tb_album';
	var $column_order = array('id_album','album_nama','album_gambar','id_admin','album_title_meta','album_deskripsi_meta','album_keyword_meta',null); //set column field database for datatable orderable
	var $column_search = array('id_album','album_nama','album_gambar','id_admin','album_title_meta','album_deskripsi_meta','album_keyword_meta'); //set column field database for datatable searchable just title , author , category are searchable
	var $order = array('id_album' => 'asc'); // default order
	
	var $table2 = 'tb_foto';
	var $column_orderid = array('id_gallery','gallery_nama','gallery_gambar','id_admin','id_album','gallery_title_meta','gallery_deskripsi_meta','gallery_keyword_meta',null); //set column field database for datatable orderable
	var $column_searchid = array('id_gallery','gallery_nama','gallery_gambar','id_admin','id_album','gallery_title_meta','gallery_deskripsi_meta','gallery_keyword_meta');
	var $orderid = array('id_gallery' => 'asc');
	
	private function _get_datatables_query() {
		$this->db->from($this->table);
		$i = 0;
		foreach ($this->column_search as $item) {
			if ($_REQUEST['search']["value"]) {
				if ($i===0) {
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_REQUEST['search']["value"]);
				} else {
					$this->db->or_like($item, $_REQUEST['search']["value"]);
			}
			
			if (count($this->column_search) - 1 == $i)
				$this->db->group_end();
			}

			$i++;
		}

		if (isset($_REQUEST['order'])) {
			$this->db->order_by($this->column_order[$_REQUEST['order']['0']['column']], $_REQUEST['order']['0']['dir']);
		} else if (isset($this->order)) {
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	function count_filtered() {
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	function count_all() {
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

	public function get_datatables() {
		$this->_get_datatables_query();

		if ($_REQUEST['length'] != -1) {
			$this->db->limit($_REQUEST['length'], $_REQUEST['start']);
		}

		$query = $this->db->get();
		return $query->result();
	}
	
	public function add($data) {
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}
	
	public function get_by_id($id) {
		$this->db->from($this->table);
		$this->db->where('id_album',$id);
		$query = $this->db->get();
		return $query->row();
	}
	
	public function update($where, $data) {
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}
	
	public function delete_by_id($id) {
		$this->db->where('id_album', $id);
		$this->db->delete($this->table);
	}
	
	function get_album() {
	  	$query = $this->db->get($this->table);
	  	return $query->result();
    }
	
	public function get_datatablesid($id) {
		$this->_get_datatables_queryid();
		$this->db->where('id_album',$id);

		if ($_REQUEST['length'] != -1) {
			$this->db->limit($_REQUEST['length'], $_REQUEST['start']);
		}

		$query = $this->db->get();
		return $query->result();
	}
	
	private function _get_datatables_queryid() {
		$this->db->from($this->table2);
		$i = 0;
		foreach ($this->column_searchid as $item) {
			if ($_REQUEST['search']["value"]) {
				if ($i===0) {
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_REQUEST['search']["value"]);
				} else {
					$this->db->or_like($item, $_REQUEST['search']["value"]);
			}
			
			if (count($this->column_searchid) - 1 == $i)
				$this->db->group_end();
			}

			$i++;
		}

		if (isset($_REQUEST['order'])) {
			$this->db->order_by($this->column_orderid[$_REQUEST['order']['0']['column']], $_REQUEST['order']['0']['dir']);
		} else if (isset($this->orderid)) {
			$order = $this->orderid;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}
	
	function count_filteredid($id) {
		$this->_get_datatables_queryid();
		$this->db->where('id_album',$id);
		$query = $this->db->get();
		return $query->num_rows();
	}

	function count_allid($id) {
		$this->db->from($this->table2);
		return $this->db->count_all_results();
	}
	
	public function addfoto($data) {
		$this->db->insert($this->table2, $data);
		return $this->db->insert_id();
	}
	
	public function get_by_foto($id) {
		$this->db->from($this->table2);
		$this->db->where('id_gallery',$id);
		$query = $this->db->get();
		return $query->row();
	}
	public function update_foto($where, $data) {
		$this->db->update($this->table2, $data, $where);
		return $this->db->affected_rows();
	}
	
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	
	public function update_upload($where, $data) {
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}
	
	public function delete_by($id) {
		$this->db->where('id_gallery', $id);
		$this->db->delete($this->table2);
	}
	
	public function get_by($key) {
		$this->db->where('id_album', $key);
        return $this->db->get('tb_foto')->row();
	}
	public function get_by_id2($id) {
		$this->db->from($this->table2);
		$this->db->where('id_gallery',$id);
		$query = $this->db->get();
		return $query->row();
	}
	public function delete_by_id2($id) {
		$this->db->where('id_gallery', $id);
		$this->db->delete($this->table2);
	}
}
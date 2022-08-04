<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mdl_about extends CI_Model {
	
	var $table = 'tb_about';
	var $column_order = array('id_about','about_gambar','about_deskripsi','id_admin','about_title_meta','about_deskripsi_meta','about_keyword_meta',null); //set column field database for datatable orderable
	var $column_search = array('id_about','about_gambar','about_deskripsi','id_admin','about_title_meta','about_deskripsi_meta','about_keyword_meta'); //set column field database for datatable searchable just title , author , category are searchable
	var $order = array('id_about' => 'asc'); // default order
	
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
	
	public function get_by_id() {
		$this->db->from($this->table);
		$this->db->where('id_about','1');
		$query = $this->db->get();
		return $query->row();
	}
	
	public function update($where, $data) {
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}
	
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	
	public function delete_by_id($id) {
		$this->db->where('id_about', $id);
		$this->db->delete($this->table);
	}
}	
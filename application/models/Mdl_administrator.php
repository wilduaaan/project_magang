<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mdl_administrator extends CI_Model {
	
	var $table = 't_resep';
	var $column_order = array('a.fc_kdbahan','a.fm_hargajual','b.fn_jumlah',null); //set column field database for datatable orderable
	var $column_search = array('a.fc_kdbahan','a.fm_hargajual','b.fn_jumlah'); //set column field database for datatable searchable just title , author , category are searchable
	var $order = array('a.id' => 'asc'); // default order
	
	public function get_datatables($id) {
		$this->_get_datatables_query();
		$this->db->where('b.fc_kdmenu',$id);

		if ($_REQUEST['length'] != -1) {
			$this->db->limit($_REQUEST['length'], $_REQUEST['start']);
		}

		$query = $this->db->get();
		return $query->result();
	}
	
	private function _get_datatables_query() {
		$this->db->select('a.fc_kdbahan,a.fv_nmbahan,a.fm_hargajual,a.fc_kdsatuan,b.*');
		$this->db->from('t_resep b');
		$this->db->join('tm_bahan a','a.fc_kdbahan=b.fc_kdbahan','left');
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
	
	function count_filtered($id) {
		$this->_get_datatables_query();
		$this->db->where('b.fc_kdmenu',$id);
		$query = $this->db->get();
		return $query->num_rows();
	}

	function count_all($id) {
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}
	
	public function get_by_set(){
		$this->db->select('a.fc_isi as set_title1, b.fc_isi as set_title2, c.fc_isi as set_alamat, d.fc_isi as set_email, e.fc_isi as set_telp, f.fc_isi as set_fax, g.fc_isi as set_title3');
		$this->db->from('t_setup a');
		$this->db->join('t_setup b ', 'b.fc_param="TITLEWEB"','left outer');
		$this->db->join('t_setup c ', 'c.fc_param="ALAMAT"', 'left outer');
		$this->db->join('t_setup d ', 'd.fc_param="EMAIL"', 'left outer');
		$this->db->join('t_setup e ', 'e.fc_param="PHONE"', 'left outer');
		$this->db->join('t_setup f ', 'f.fc_param="FAX"', 'left outer');
		$this->db->join('t_setup g ', 'g.fc_param="TITLE2"', 'left outer');
		$this->db->where('a.fc_param','TITLE1');
		$query = $this->db->get();
		return $query->row();
	}
	
	function load_menu(){
		$query = $this->db->get('tm_menu');
	  	return $query->result();
	}	
	
	function bacapropinsi(){
        $baca = $this->db->get('tm_bahan');
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
	
	public function add($data) {
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}
	
	public function get_by_id($id) {
		$this->db->from($this->table);
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->row();
	}
	
	public function update($where, $data) {
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}
	
	public function delete_by_id($id) {
		$this->db->where('id', $id);
		$this->db->delete($this->table);
	}
}
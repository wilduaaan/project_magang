<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_setting_user extends CI_Model {

	public function get_by_id() {
	
	//$this->db->where('id_admin', $id);
    return $this->db->get('admin')->result();

	}


	public function update_user($data1,$data2) {
		$this->db->update('admin', $data1, $data2);
		return $this->db->affected_rows();
	}

	function get_last_id(){
    	$query = $this->db->get('admin');
    	return $query->last_row();
    }
    function get_last_ai(){
    	$query = $this->db->query("SELECT `id_admin` FROM `admin` WHERE 1");
    	return $query->last_row();
    }
    public function getid($id)
	{
		return $this->db->where('id_admin',$id)
						->get('admin');
	}

	public function ubah_pass($where, $data) {

		$this->db->update('admin', $data, $where);

		return $this->db->affected_rows();

	}
	

}
<?php

class Kontak_m extends CI_Model
{
	public function getAll1(){
		return $this->db->get('tb_kontak');
	}
	public function getDesc() {
		$this->db->select('deskripsi_kontak');
		return $this->db->get('tb_kontak')->row();
	}
}
<?php

class Beranda_m extends CI_Model
{
	public function getAll1(){
		return $this->db->get('tb_slider');
	}

	public function getAll2(){
		return $this->db->get('tb_tentang');
	}
	
}

<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mdl_home extends MY_Model
{

	function tampil(){
	  $query = $this->db->get('tb_beranda');
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }

	}
}	
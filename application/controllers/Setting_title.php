<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting_title extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('M_setting_title');
		$this->auth->restrict();
		date_default_timezone_set("Asia/Jakarta");
		$this->load->library("session");
	}

	 function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "admin/moduls/setting_title";
        //$data['fb'] ='1';
        $this->load->view('admin/admin_view',$data);
    }

    public function ajax_edit_meta_beranda() {
		$data = $this->M_setting_title->get_by_meta_beranda();
		//print_r($this->db->last_query());
		echo json_encode($data);
	}

	public function ajax_edit_meta_produk() {
		$data = $this->M_setting_title->get_by_meta_produk();
		//print_r($this->db->last_query());
		echo json_encode($data);
	}

	public function ajax_edit_meta_galeri() {
		$data = $this->M_setting_title->get_by_meta_galeri();
		//print_r($this->db->last_query());
		echo json_encode($data);
	}

	public function ajax_edit_meta_kontak() {
		$data = $this->M_setting_title->get_by_meta_kontak();
		//print_r($this->db->last_query());
		echo json_encode($data);
	}
	public function ajax_edit_meta_detail() {
		$data = $this->M_setting_title->get_by_meta_detail();
		// print_r($this->db->last_query());
		echo json_encode($data);
	}

	public function update_title1(){
		$id=$this->input->post('id_meta_beranda');
		$data1 = array(
			'title' => $this->input->post('title_beranda'),
			'meta_keyword' => $this->input->post('keyword_beranda'),
			'meta_description' => $this->input->post('deskripsi_beranda'),
			'link_canonical' => $this->input->post('link_beranda')	
			);
		$this->M_setting_title->update_title1($data1,array('id_meta_beranda' => $id));
		// print_r($this->db->last_query());
	}

	public function update_title2(){
		$id=$this->input->post('id_meta_produk');
		$data1 = array(
			'title' => $this->input->post('title_produk'),
			'meta_keyword' => $this->input->post('keyword_produk'),
			'meta_description' => $this->input->post('deskripsi_produk'),
			'link_canonical' => $this->input->post('link_produk')	
			);
		$this->M_setting_title->update_title2($data1,array('id_meta_produk' => $id));
		// print_r($this->db->last_query());
	}

	public function update_title3(){
		$id=$this->input->post('id_meta_galeri');
		$data1 = array(
			'title' => $this->input->post('title_galeri'),
			'meta_keyword' => $this->input->post('keyword_galeri'),
			'meta_description' => $this->input->post('deskripsi_galeri'),
			'link_canonical' => $this->input->post('link_galeri')	
			);
		$this->M_setting_title->update_title3($data1,array('id_meta_galeri' => $id));
		// print_r($this->db->last_query());
	}

	public function update_title4(){
		$id=$this->input->post('id_meta_kontak');
		$data1 = array(
			'title' => $this->input->post('title_kontak'),
			'meta_keyword' => $this->input->post('keyword_kontak'),
			'meta_description' => $this->input->post('deskripsi_kontak'),
			'link_canonical' => $this->input->post('link_kontak')	
			);
		$this->M_setting_title->update_title4($data1,array('id_meta_kontak' => $id));
		print_r($this->db->last_query());
	}
	public function update_title5(){
		$id=$this->input->post('id_meta_detail');
		$data1 = array(
			'title' => $this->input->post('title_detail'),
			'meta_keyword' => $this->input->post('keyword_detail'),
			'meta_description' => $this->input->post('deskripsi_detail'),
			'link_canonical' => $this->input->post('link_canonical')	
			);
		$this->M_setting_title->update_title5($data1,array('id_meta_detail' => $id));
		print_r($this->db->last_query());
	}


	

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting_ukuran extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('M_setting_ukuran');
		$this->auth->restrict();
		date_default_timezone_set("Asia/Jakarta");
		$this->load->library("session");
	}

	 function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "admin/moduls/setting_ukuran";
        //$data['fb'] ='1';
        $this->load->view('admin/admin_view',$data);
    }

    public function ajax_edit() {
		$data = $this->M_setting_ukuran->get_by_id();
		//print_r($this->db->last_query());
		echo json_encode($data);
	}

	public function update_ukuran(){
		$id=$this->input->post('id_setting_ukuran');
		$data1 = array('ukuran_foto_slider' => $this->input->post('ukuran_foto_slider'));
		$this->M_setting_ukuran->update_ukuran($data1,array('id_setting_ukuran' => $id));
		$data2 = array('ukuran_foto_tentang' => $this->input->post('ukuran_foto_tentang'));
		$this->M_setting_ukuran->update_ukuran($data2,array('id_setting_ukuran' => $id));
		$data3 = array('ukuran_foto_produk' => $this->input->post('ukuran_foto_produk'));
		$this->M_setting_ukuran->update_ukuran($data3,array('id_setting_ukuran' => $id));
		$data4 = array('ukuran_foto_galeri' => $this->input->post('ukuran_foto_galeri'));
		$this->M_setting_ukuran->update_ukuran($data4,array('id_setting_ukuran' => $id));
		$data5 = array('footer' => $this->input->post('footer'));
		$this->M_setting_ukuran->update_ukuran($data5,array('id_setting_ukuran' => $id));
	}


}
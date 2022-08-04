<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('Mdl_profile');
		$this->load->model('Mdl_user');
		$this->auth->restrict();
		date_default_timezone_set("Asia/Jakarta");
		$this->load->library("session");
	}
	
	 function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "admin/moduls/profile";
        $this->load->view('admin/admin_view',$data);
    }
	
	public function ajax_edit() {
		$data = $this->Mdl_profile->get_by_id();
		echo json_encode($data);
	}

	public function ajax_edit_p() {
		$id = $this->session->userdata('id_admin');
		$data = $this->Mdl_user->get_by_id($id);
		echo json_encode($data);
	}
	
	public function update() {
		$data = array(
				'admin_nama'        => $this->input->post('admin_nama'),
				'admin_username'    => $this->input->post('admin_username'),
				'telephone'       	=> $this->input->post('telephone'),
				'email'       		=> $this->input->post('email'),
				'alamat'       		=> $this->input->post('alamat')
				//'id_user' => $this->session->userdata('id_profile')
			);
		$this->Mdl_profile->update(array('id_admin' => $this->input->post('id_admin')), $data);
		//print_r($this->db->last_query());
		// echo json_encode(array("status" => TRUE));
		redirect('Login/logout');
    }

    public function update_p() {
		$data = array(
				'admin_password'        => md5($this->input->post('profile_password_baru')),
				'admin_view_password'   => $this->input->post('profile_password_baru')
				//'id_user' => $this->session->userdata('id_profile')
			);
		$this->Mdl_profile->update(array('id_admin' => $this->input->post('id_admin')), $data);
		//print_r($this->db->last_query());
		echo json_encode(array("status" => TRUE));
    }
	
	public function ajax_delete($id) {
      $this->Mdl_profile->delete_by_id($id);
      echo json_encode(array("status" => TRUE));
    }
}	
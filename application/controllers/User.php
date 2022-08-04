<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('Mdl_user');
		$this->auth->restrict();
		date_default_timezone_set("Asia/Jakarta");
		$this->load->library("session");
	}
	
	public function ajax_list() {
		$list = $this->Mdl_user->get_datatables();
		$data = array();
		$no = $_REQUEST['start'];
		foreach ($list as $user) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $user->admin_username;
			$row[] = $user->admin_nama;
			$row[] = $user->user_type_name;
			$row[] = '
			<div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Aksi <span class="caret"></span></button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="javascript:void(0)" onclick="edit('."'".$user->id_admin."'".')">Edit</a></li>
                            <li><a href="javascript:void(0)" onclick="hapus('."'".$user->id_admin."'".')">Delete</a></li>
                        </ul>
            </div>';
			$data[] = $row;
		}

		$output = array(
						"draw" => $_REQUEST['draw'],
						"recordsTotal" => $this->Mdl_user->count_all(),
						"recordsFiltered" => $this->Mdl_user->count_filtered(),
						"data" => $data,
				);
		echo json_encode($output);
	}
	
	public function ajax_add() {
		$data = array(
				'admin_username'         => $this->input->post('admin_username'),
				'admin_password' 	     => md5($this->input->post('admin_password')),
				'admin_nama'       		 => $this->input->post('admin_nama'),
				'admin_level'        	 => $this->input->post('admin_level'),
			);
		$insert = $this->Mdl_user->add($data);
		//print_r($this->db->last_query());
		echo json_encode(array('status' => TRUE));
	}
	
	public function ajax_edit($id) {
		$data = $this->Mdl_user->get_by_id($id);
		echo json_encode($data);
	}
	
	public function ajax_update() {
		$data = array(
				'admin_username'         => $this->input->post('admin_username'),
				'admin_password' 	     => md5($this->input->post('admin_password')),
				'admin_nama'       		 => $this->input->post('admin_nama'),
				'admin_level'        	 => $this->input->post('admin_level'),
			);
		$this->Mdl_user->update(array('id_admin' => $this->input->post('id_admin')), $data);
		echo json_encode(array("status" => TRUE));
    }
	
	public function ajax_delete($id) {
      $this->Mdl_user->delete_by_id($id);
      echo json_encode(array("status" => TRUE));
    }

}
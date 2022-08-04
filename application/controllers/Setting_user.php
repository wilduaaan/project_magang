<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Setting_user extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_setting_user');
		$this->auth->restrict();
		date_default_timezone_set("Asia/Jakarta");
		$this->load->library("session");
	}

	function index()
	{
		// $this->mdl_home->getsqurity();
		$data['view_file']    = "admin/moduls/Setting_user";
		//$data['fb'] ='1';
		$this->load->view('admin/admin_view', $data);
	}

	public function user_ubah_pass()
	{
		if ($this->cek_pass($this->session->userdata('id_admin'), $this->input->post('c_pass'))) {
			// echo "b";
			$row = array(
				'Password' => md5($this->input->post('n_pass'))
			);
			$nopes = array('id_admin' => $this->session->userdata('id_admin'));
			$res = $this->M_calon_maba->ubah_pass($nopes, $row);
			$this->session->set_flashdata('berhasil', 'Password baru berhasil diubah.');
			redirect('');
		} else {
			// echo "a";
			$this->session->set_flashdata('gagal', 'Gagal mengubah password.');
			redirect('');
		}
	}
	public function cek_pass($id, $passl)
	{
		$res = $this->M_setting_user->getid($id);
		// echo $this->db->last_query();
		// echo "<pre>";
		// print_r($res);
		// echo "</pre>";
		foreach ($res->result() as $k) {
			if ($k->Password == md5($passl)) {
				return true;
			} else {
				return false;
			}
		}
	}




	public function ajax_edit()
	{
		$data = $this->M_setting_user->get_by_id();
		//print_r($this->db->last_query());
		echo json_encode($data);
	}

	public function update_user()
	{




		$data1 = array('admin_password' => md5($this->input->post('n_pass')));
		$this->M_setting_user->update_user($data1, array('id_admin' => 1));

		$data2 = array('admin_view_password' => $this->input->post('n_pass'));
		$this->M_setting_user->update_user($data2, array('id_admin' => 1));
	}
}

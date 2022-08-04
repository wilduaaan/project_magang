<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	public function index() { $this->load->view('web'); }
	public function rak() { $this->load->view('rak'); }

	function getlogin() {
		$this->db->where('username',$this->input->post('email'));
		$this->db->where('password',md5($this->input->post('password')));
		$query = $this->db->get('anggota');
		if ($query->num_rows()>0) {
			foreach ($query->result() as $log) {
				$sesi = array(
					'a_id'		=> $log->id,
					'a_nama'	=> $log->nama
				);
				$this->session->set_userdata($sesi);
				redirect('web');
			}
		} else {
			$data = array( 's_log' => 'Login Gagal', 'err_msg' => "Username dan/atau Password salah !" );
			$this->session->set_userdata($data);
			redirect('web');
		}
	}

	function logout() {
		$this->session->unset_userdata('a_id');
		$this->session->unset_userdata('a_nama');
		redirect('web');
	}
}
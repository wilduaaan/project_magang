<?php

defined('BASEPATH') or exit('No direct script access allowed');



class Admin extends CI_Controller

{

	public function __construct()

	{

		parent::__construct();

		$this->load->model('Mdl_administrator');

		$this->load->model('Mdl_produk');

		$this->load->model('Mdl_gallery');

		$this->auth->restrict();

		date_default_timezone_set("Asia/Jakarta");

		$this->load->library("session");
	}



	function index()

	{
		$data['view_file'] = "admin/moduls/view_home";

		$this->load->view('admin/login', $data);
	}



	public function modul($modul)

	{

		if (!$modul) {

			$this->session->set_userdata('err_msg', 'Anda Harus pilih salah satu Menu.');

			redirect('admin');
		}



		$data['level'] = $this->Mdl_user->get_level();

		$data['produk'] = $this->Mdl_produk->get_produk();

		$data['album'] = $this->Mdl_gallery->get_album();

		$this->load->view('moduls/' . $modul, $data);
	}





	public function data($modul, $deleted)

	{

		if (!$modul) {

			$this->session->set_userdata('err_msg', 'Anda Harus pilih salah satu Modul.');

			redirect('admin');
		}



		if ($modul == 'view_home') {

			$this->load->view('moduls/view_home');
		} else if ($modul == 'user') {

			$this->load->view('moduls/user');
		} else if ($modul == 'slider') {

			$this->load->view('moduls/slider');
		} else if ($modul == 'kontak') {

			$this->load->view('moduls/kontak');
		} else if ($modul == 'produk') {

			$this->load->view('moduls/produk');
		} else if ($modul == 'gallery') {

			$this->load->view('moduls/gallery');
		} else if ($modul == 'produk_det') {

			$this->load->view('moduls/produk_det');
		} else if ($modul == 'foto') {

			$this->load->view('moduls/foto');
		}
	}



	public function ajax_edit()

	{

		$data = $this->Mdl_administrator->get_by_id();

		echo json_encode($data);
	}
}

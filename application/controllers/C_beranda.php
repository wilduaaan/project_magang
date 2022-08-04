<?php

defined('BASEPATH') or exit('No direct script access allowed');



class C_beranda extends CI_Controller
{



	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_beranda');
		$this->auth->restrict();
		date_default_timezone_set("Asia/Jakarta");
		$this->load->library("session");
	}



	function index()
	{

		// $this->mdl_home->getsqurity();

		$data['data_ukuran']  = $this->M_beranda->set_ukuran();

		$data['view_file']    = "admin/moduls/V_beranda";

		$data['data_get'] = $this->M_beranda->view();

		$this->load->view('admin/admin_view', $data);
	}



	public function ajax_edit()
	{

		$data = $this->M_beranda->view();

		echo json_encode($data);
	}



	public function delete_gambar($id)
	{

		$res = $this->M_beranda->view();

		if ($id == 1) {

			unlink(realpath('assets/img/') . "/" . $res->file_slider1);

			$data['file_slider1'] = "";

			$this->M_beranda->update(array('id_beranda' => 1), $data);
		}

		if ($id == 2) {

			unlink(realpath('assets/img/') . "/" . $res->file_slider2);

			$data['file_slider2'] = "";

			$this->M_beranda->update(array('id_beranda' => 1), $data);
		}

		if ($id == 3) {

			unlink(realpath('assets/img/') . "/" . $res->file_slider3);

			$data['file_slider3'] = "";

			$this->M_beranda->update(array('id_beranda' => 1), $data);
		}

		if ($id == 4) {

			unlink(realpath('assets/img/') . "/" . $res->file_slider4);

			$data['file_slider4'] = "";

			$this->M_beranda->update(array('id_beranda' => 1), $data);
		}

		if ($id == 5) {

			unlink(realpath('assets/img/') . "/" . $res->file_slider5);

			$data['file_slider5'] = "";

			$this->M_beranda->update(array('id_beranda' => 1), $data);
		}



		redirect('C_beranda/index', 'refresh');
	}



	public function update1()
	{

		$res = $this->M_beranda->view();

		$data = array();

		$config['upload_path'] = realpath('assets/img/');

		$config['allowed_types']  = 'jpg|png';

		$config['max_size'] = '2000000';

		$config['max_width'] = '2024';

		$config['max_height'] = '1468';



		$new_name = str_replace(" ", "-", str_replace(".", "", $res->keyword)) . "-1" . time();

		$config['file_name'] = $new_name;

		$this->load->library('upload', $config);

		$this->upload->initialize($config);

		// if (@$this->input->post('file-upload')) {

		if ($this->upload->do_upload('file-upload')) {

			@unlink(realpath('assets/img/') . "/" . $res->file_slider1);

			$get_name = $this->upload->data();

			$data['file_slider1'] = $get_name['file_name'];
		}

		// }		



		$new_name = str_replace(" ", "-", str_replace(".", "", $res->keyword)) . "-2" . time();

		$config['file_name'] = $new_name;

		$this->load->library('upload', $config);

		$this->upload->initialize($config);

		// if (@$this->input->post('file-upload2')) {

		if ($this->upload->do_upload('file-upload2')) {

			@unlink(realpath('assets/img/') . "/" . $res->file_slider2);

			$get_name = $this->upload->data();

			$data['file_slider2'] = $get_name['file_name'];
		}

		// }



		$new_name = str_replace(" ", "-", str_replace(".", "", $res->keyword)) . "-3" . time();

		$config['file_name'] = $new_name;

		$this->load->library('upload', $config);

		$this->upload->initialize($config);

		// if (@$this->input->post('file-upload2')) {

		if ($this->upload->do_upload('file-upload3')) {

			@unlink(realpath('assets/img/') . "/" . $res->file_slider3);

			$get_name = $this->upload->data();

			$data['file_slider3'] = $get_name['file_name'];
		}



		// }



		$new_name = str_replace(" ", "-", str_replace(".", "", $res->keyword)) . "-4" . time();

		$config['file_name'] = $new_name;

		$this->load->library('upload', $config);

		$this->upload->initialize($config);

		// if (@$this->input->post('file-upload2')) {

		if ($this->upload->do_upload('file-upload4')) {

			@unlink(realpath('assets/img/') . "/" . $res->file_slider4);

			$get_name = $this->upload->data();

			$data['file_slider4'] = $get_name['file_name'];
		}



		// }


		// echo "<pre>";

		// print_r($data);

		// print_r($this->input->post());

		// echo "</pre>";

		$this->db->set($data);

		if ($data) {

			$this->M_beranda->update(array('id_beranda' => $this->input->post('id_beranda')), $data);

			$this->session->set_flashdata('berhasil', 'Data baru telah ditambahkan.');
		} else {

			$this->session->set_flashdata('gagal', 'Tidak ada data yang ditambahkan. Pastikan Spesifikasi Gambar Sudah Benar.');
		}

		// echo $this->db->last_query();

		redirect('C_beranda/index', 'refresh');
	}




	function update()
	{

		$data = array(



			'keyword'			=> $this->input->post('keyword'),

			'jumlah_produk'		=> $this->input->post('jumlah_produk'),

			'judul_tentang'		=> $this->input->post('judul_tentang'),

			'deskripsi_tentang'	=> $this->input->post('deskripsi_tentang'),



		);

		$this->M_beranda->update(array('id_beranda' => $this->input->post('id_beranda')), $data);
		//print_r($this->db->last_query());
		echo json_encode(array("status" => TRUE));
	}
}

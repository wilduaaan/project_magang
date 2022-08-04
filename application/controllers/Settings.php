<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('Mdl_settings');
		$this->auth->restrict();
		date_default_timezone_set("Asia/Jakarta");
		$this->load->library("session");
	}
	
	 function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "admin/moduls/settings";
        //$data['fb'] ='1';
        $this->load->view('admin/admin_view',$data);
    }

    public function ajax_list() {
		$data = $this->Mdl_settings->get_by_link();
		echo json_encode($data);
	}
	
	public function ajax_show() {
		$data = $this->Mdl_settings->get_by_id(1);
		echo json_encode($data);
	}

	// $judul = $this->input->post('detail_judul');
	// 	$deskripsi = $this->input->post('detail_deskripsi');
	// 	$title_meta = $this->input->post('detail_title_meta');
	// 	$deskripsi_meta = $this->input->post('detail_deskripsi_meta');
	// 	$keyword_meta = $this->input->post('detail_keyword_meta');
		
	// 	$data = array(
	// 			'detail_judul' => $judul,
	// 			'detail_deskripsi' => $deskripsi,
	// 			'detail_title_meta' => $title_meta,
	// 			'detail_deskripsi_meta' => $deskripsi_meta,
	// 			'detail_keyword_meta' => $keyword_meta,
	// 			'id_admin' => $this->session->userdata('id_admin')
	// 		);
	// 	$this->Mdl_produk->update_produk(array('id_detail' => $this->input->post('id_detail')), $data);
	// 	echo json_encode(array("status" => TRUE));
	
	// public function update() {
	// 	// $fb = $this->input->post('link_fb');
	// 	// $ig = $this->input->post('link_ig');
	// 	// $tw = $this->input->post('link_tw');
	// 	// $ytb = $this->input->post('link_ytb');
	// 	// $g = $this->input->post('link_g');

	// 	$data = array(
	// 	'nama_setting' =>  $this->input->post('nama_setting'),
	// 	'link_setting' => $this->input->post('link_setting'),
	// 	'id_admin' => $this->session->userdata('id_admin')
	// 	);

	// 	// $this->Mdl_setting->update(array('id_fb' => $this->input->post('id_fb')), $data);

	// 	// $data = array(
	// 	// 	'setting_source' => $this->input->post('link_ig')
	// 	// );
	// 	// $this->Mdl_setting->update(array('id_ig' => $this->input->post('id_ig')), $data);

	// 	// $data = array(
	// 	// 	'setting_source' => $this->input->post('link_tw')
	// 	// );
	// 	// $this->Mdl_setting->update(array('id_tw' => $this->input->post('id_tw')), $data);

	// 	// $data = array(
	// 	// 	'setting_source' => $this->input->post('link_ytb')
	// 	// );
	// 	// $this->Mdl_setting->update(array('id_ytb' => $this->input->post('id_ytb')), $data);

	// 	// $data = array(
	// 	// 	'setting_source' => $this->input->post('link_g')
	// 	// );
	// 	// $this->Mdl_setting->update(array('id_g' => $this->input->post('id_g')), $data);
	// 	//print_r($this->db->last_query());
	// 	$this->Mdl_settings->update(array('id_setting' => $this->input->post('id_setting')), $data);
	// 	//print_r($this->db->last_query());
	// 	echo json_encode(array("status" => TRUE));
 //    }

	public function update() {

		$data = array(
				'nama_setting'      => $this->input->post('nama_setting'),
				'link_setting'       		=> $this->input->post('link_setting'),
				'id_admin' 			=> $this->session->userdata('id_admin')
			);
		$this->Mdl_settings->update(array('id_setting' => $this->input->post('id_setting')), $data);
		//print_r($this->db->last_query());
		echo json_encode(array("status" => TRUE));
    }
	
	

//     public function upload() {
    	
// 		// Remove Image
// 		$id_img = $this->input->post('id_setting');
// 		$oldImage = $this->Mdl_settings->get_by_id($id_img);
// 		//fungsi @ untuk apabila gambar kosong yang telah diinputkan di tampilan awala maka dapat diambil dri data gmambar
// 		if(@$oldImage->gambar_setting!=""){
// 			@unlink('assets/images/Settings/'.@$oldImage->gambar_setting);
// 		}
//   //       //if(!$modul){$this->session->set_userdata('err_msg', 'Anda Harus pilih salah satu Modul.'); redirect('admin');}
// 		$gambar = $_FILES['file-upload']['name'];
// 		// //$nama_file = $this->input->post('slider_judul').'.'.$olah[1];

// 		$olah = explode('.', $_FILES['file-upload']['name']);
// 		$nama = $this->input->post('nama_setting').'.'.$olah[1];

// 		// $deskripsi = $this->input->post('album_deskripsi_meta');
// 		// $nama = $this->input->post('nama_kantorpemerintahan');
// 		// $deskripsi = $this->input->post('deskripsi_kantorpemerintahan');
// 		// //$gambar = str_replace(' ', '_', $nama_file);

// 		$gambar = str_replace('', '_', $nama);
// // // untuk menamilkan id_upload gambar biar  muncul di bagian update kategori
// 		$new_name = 'setting_'.$id_img.time();
// 		$config['file_name'] = $new_name;
		
// 		$config['upload_path'] = realpath('assets/images/Settings');
// 		$config['allowed_types']        = 'gif|jpg|png';
// 		$config['max_size'] = '2000000';
//         $config['max_width'] = '2024';
//         $config['max_height']= '1468';
// 		// $config['file_name'] = $gambar2;	
		
// 		$this->load->library('upload', $config);
//  		$this->upload->initialize($config);
// 		$this->upload->do_upload('file-upload');
// 		//untuk fungsi upload file gambarnya biar keluar di halaman
// 			$get_name = $this->upload->data();
// 	   		$nama_foto = $get_name['file_name'];
//  		//
// 			$data = array(
// 			'gambar_setting' => $nama_foto,
// 			'id_admin' => $this->session->userdata('id_admin')
// 			); 			
 	

// 		$where = array('id_setting' => $this->input->post('id_setting'));			 
// 		$this->Mdl_settings->update_data($where,$data,'tb_setting');	
		
// 		echo json_encode(array('status' => TRUE));
//     }

    public function upload() {

		$id_img1 = $this->input->post('id_setting');
		$oldImage1 = $this->Mdl_settings->get_by_id($id_img1);

		$config['upload_path'] = realpath('assets/images/');
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size'] = '2000000';
        $config['max_width'] = '2024';
        $config['max_height']= '1468';	
		
		$new_name = 'setting1_'.time();
		$config['file_name'] = $new_name;
		$this->load->library('upload', $config);
 		$this->upload->initialize($config);
		if($this->upload->do_upload('file-upload1')){	
			if ($oldImage1->gambar_setting != "") {
			unlink('assets/images/'.$oldImage1->gambar_setting1);
			}
			$get_name = $this->upload->data();
	   		$nama_foto = $get_name['file_name'];
	   		$gambar1 = $nama_foto;
			$data['gambar_setting1'] = $gambar1;
		}

		$new_name = 'setting2_'.time();
		$config['file_name'] = $new_name;
		$this->load->library('upload', $config);
 		$this->upload->initialize($config); 			
		if($this->upload->do_upload('file-upload2')){	
			if ($oldImage1->gambar_setting != "") {
			unlink('assets/images/'.$oldImage1->gambar_setting2);
		}
			$get_name = $this->upload->data();
	   		$nama_foto = $get_name['file_name'];
	   		$gambar2 = $nama_foto;
			$data['gambar_setting2'] = $gambar2;
		}

		$new_name = 'setting3_'.time();
		$config['file_name'] = $new_name;
		$this->load->library('upload', $config);
 		$this->upload->initialize($config); 			
 		if($this->upload->do_upload('file-upload3')){	
 			if ($oldImage1->gambar_setting != "") {
				unlink('assets/images/'.$oldImage1->gambar_setting3);
			}
			$get_name = $this->upload->data();
	   		$nama_foto = $get_name['file_name'];
	   		$gambar3 = $nama_foto;
			$data['gambar_setting3'] = $gambar3;
		}	
			$data['id_admin'] = $this->session->userdata('id_admin');
 		
		$where = array('id_setting' => $this->input->post('id_setting'));			 
		$this->Mdl_settings->update_data($where,$data,'tb_setting');	
		
		echo json_encode(array('status' => TRUE));
    }

    public function uploadl() {

		$id_img1 = $this->input->post('id_setting');
		$oldImage1 = $this->Mdl_settings->get_by_idl($id_img1);

		$config['upload_path'] = realpath('assets/images/');
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size'] = '2000000';
        $config['max_width'] = '2024';
        $config['max_height']= '1468';	
		
		$new_name = 'settingl_'.time();
		$config['file_name'] = $new_name;
		$this->load->library('upload', $config);
 		$this->upload->initialize($config);
		if($this->upload->do_upload('file-uploadl')){	
			if ($oldImage1->fc_isi != "") {
			unlink('assets/images/'.$oldImage1->fc_isi);
			}
			$get_name = $this->upload->data();
	   		$nama_foto = $get_name['file_name'];
	   		$gambar1 = $nama_foto;
			$data['fc_isi'] = $gambar1;
		}
			// $data['id_admin'] = $this->session->userdata('id_admin');
		$where = array('id' => $id_img1);		
 		print_r($data);
 		print_r($this->input->post());	 
		// $this->Mdl_settings->update_data($where,$data,'t_setup');	
		
		// echo json_encode(array('status' => TRUE));
    }

	public function ajax_delete($id) {
      $this->Mdl_settings->delete_by_id($id);
      echo json_encode(array("status" => TRUE));
    }

    public function ajax_edit($id) {
		$data = $this->Mdl_settings->get_by_id($id);
		//print_r($this->db->last_query());
		echo json_encode($data);
	}
}	
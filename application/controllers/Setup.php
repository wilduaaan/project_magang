<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setup extends CI_Controller {


	public function __construct() {
		parent::__construct();
		$this->load->model('Mdl_setup');
		$this->auth->restrict();
		date_default_timezone_set("Asia/Jakarta");
		$this->load->library("session");
	}

	function index(){
		 $data['view_file']    = "admin/moduls/setup";
          $this->load->view('admin/admin_view',$data);
	}
	//function edit datanya
	public function ajax_edit() {
		$data = $this->Mdl_setup->get_by_id();
		//print_r($this->db->last_query());
		echo json_encode($data);
	}
	//function update untuk linknya
	public function update_link() {
		$data1 = array('fc_isi' => $this->input->post('email'));
		$this->Mdl_setup->update_link($data1,array('fc_param' => 'EMAIL'));
		$data2 = array('fc_isi' => $this->input->post('facebook'));
		$this->Mdl_setup->update_link($data2,array('fc_param' => 'FACEBOOK'));
		$data3 = array('fc_isi' => $this->input->post('instagram'));
		$this->Mdl_setup->update_link($data3,array('fc_param' => 'INSTAGRAM'));
		$data4 = array('fc_isi' => $this->input->post('youtube'));
		$this->Mdl_setup->update_link($data4,array('fc_param' => 'YOUTUBE'));
		
	}

	public function upload(){
		
		$gambar1="";
		$gambar2="";
		$gambar3="";
		$gambar4="";
		// $gambar = str_replace(' ', '_', $nama_file);

		// $nama = $this->input->post('slider_judul');
		// $deskripsi = $this->input->post('slider_deskripsi');
		//$gambar = str_replace(' ', '_', $nama_file);

		$config['upload_path'] = realpath('assets/images');
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size'] = '2000000';
        $config['max_width'] = '2024';
        $config['max_height']= '1468';
		// $config['file_name'] = $gambar1;	
		// $config['file_name'] = $gambar2;	
		// $config['file_name'] = $gambar3;	
		
		$new_name = 'Headertentang_'.time();
		$config['file_name'] = $new_name;
		// $config['file_name'] = str_replace(' ', '_', $nama_file1);
		$this->load->library('upload', $config);
 		$this->upload->initialize($config);
 			
		if($this->upload->do_upload('file-upload1')){	
			$get_name = $this->upload->data();
	   		$nama_foto = $get_name['file_name'];
	 		$gambar1 = $nama_foto;
	 		$oldImage = $this->Mdl_setup->get_by_id2('5');
			if($oldImage->fc_isi!=""){
			unlink('assets/images/'.$oldImage->fc_isi);
			}
			$data['fc_isi'] = $gambar1;
		$where = array('id' => '5');	
		// print_r($data);
		$this->Mdl_setup->update_data($data,$where);	
		}

		$new_name = 'Headerproduk_'.time();
		$config['file_name'] = $new_name;
		// $config['file_name'] = str_replace(' ', '_', $nama_file2);
		$this->load->library('upload', $config);
 		$this->upload->initialize($config); 			
		if($this->upload->do_upload('file-upload2')){
			$get_name = $this->upload->data();
	   		$nama_foto = $get_name['file_name'];
	 		$gambar2 = $nama_foto;
	 		$oldImage = $this->Mdl_setup->get_by_id2('6');	
			if($oldImage->fc_isi!=""){
			unlink('assets/images/'.$oldImage->fc_isi);
			}
			$data['fc_isi'] = $gambar2;
		$where = array('id' => '6');		
		$this->Mdl_setup->update_data($data,$where);	
		}
		// $this->Mdl_setup->update_data($data,$where);

		$new_name = 'Headerfoto_'.time();
		$config['file_name'] = $new_name;
		// $config['file_name'] = str_replace(' ', '_', $nama_file3);
		$this->load->library('upload', $config);
 		$this->upload->initialize($config); 			
 		if($this->upload->do_upload('file-upload3')){
 			$get_name = $this->upload->data();
	   		$nama_foto = $get_name['file_name'];
	 		$gambar3 = $nama_foto;
	 		$oldImage = $this->Mdl_setup->get_by_id2('7');		
 			if($oldImage->fc_isi!=""){
			unlink('assets/images/'.$oldImage->fc_isi);
			}
			// $gambar3 = str_replace(' ', '_', $nama_file3);
			$data['fc_isi'] = $gambar3;
			$where = array('id' => '7');		
		$this->Mdl_setup->update_data($data,$where);	
		}

		$new_name = 'Headerkontak_'.time();
		$config['file_name'] = $new_name;
		// $config['file_name'] = str_replace(' ', '_', $nama_file3);
		$this->load->library('upload', $config);
 		$this->upload->initialize($config); 			
 		if($this->upload->do_upload('file-upload4')){
 			$get_name = $this->upload->data();
	   		$nama_foto = $get_name['file_name'];
	 		$gambar4 = $nama_foto;

	 		$oldImage = $this->Mdl_setup->get_by_id2('8');		
 			if($oldImage->fc_isi!=""){
			unlink('assets/images/'.$oldImage->fc_isi);
			}
			// $gambar3 = str_replace(' ', '_', $nama_file3);
			$data['fc_isi'] = $gambar4;
			$where = array('id' => '8');		
		// print_r($data);
		// $this->Mdl_setup->update_data($data,$where);
			$this->Mdl_setup->update_data($data,$where);	
		}		

		redirect('Setup');
		//mengarahkan ke halaman setup lagi /kemabali lagi 
	}

	public function upload_logo(){
		$gambar5="";

		$config['upload_path'] = realpath('assets/images');
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size'] = '2000000';
        $config['max_width'] = '2024';
        $config['max_height']= '1468';
		
		
		$new_name = 'logo_'.time();
		$config['file_name'] = $new_name;
		// $config['file_name'] = str_replace(' ', '_', $nama_file1);
		$this->load->library('upload', $config);
 		$this->upload->initialize($config);
 			
		if($this->upload->do_upload('file-upload5')){	
			$get_name = $this->upload->data();
	   		$nama_foto = $get_name['file_name'];
	 		$gambar5 = $nama_foto;
	 		$oldImage = $this->Mdl_setup->get_by_id2('9');
			if($oldImage->fc_isi!=""){
			unlink('assets/images/'.$oldImage->fc_isi);
			}
			$data['fc_isi'] = $gambar5;
		$where = array('id' => '9');	
		// print_r($data);
		$this->Mdl_setup->update_data($data,$where);	
		}
		redirect('Setup');	
		}
	
}	
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('Mdl_about');
		$this->auth->restrict();
		date_default_timezone_set("Asia/Jakarta");
		$this->load->library("session");
	}
	
	 function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "admin/moduls/about";
        $this->load->view('admin/admin_view',$data);
    }
	
	public function ajax_list() {
		$list = $this->Mdl_about->get_datatables();
		$data = array();
		$no = $_REQUEST['start'];
		foreach ($list as $about) {
			if($about->about_gambar==''){ $cover = 'no_image.jpg'; }else{ $cover = $about->about_gambar; }
			$row1 = '<img src="'.base_url().'assets/images/About/'.$cover.'" style="height: 100px; width: 100px;">';
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $row1;
			$row[] = $about->about_deskripsi;
			$row[] = '
			<div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Aksi <span class="caret"></span></button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="javascript:void(0)" onclick="update('."'".$about->id_about."'".')">Edit</a></li>
                            <li><a href="javascript:void(0)" onclick="hapus('."'".$about->id_about."'".')">Delete</a></li>
                        </ul>
            </div>';
			$data[] = $row;
		}

		$output = array(
						"draw" => $_REQUEST['draw'],
						"recordsTotal" => $this->Mdl_about->count_all(),
						"recordsFiltered" => $this->Mdl_about->count_filtered(),
						"data" => $data,
				);
		echo json_encode($output);
	}
	
	function ajax_add(){
		$gambar = $_FILES['userfile']['name'];
		//$nama_file = $this->input->post('slider_judul').'.'.$olah[1];

		$nama = $this->input->post('slider_judul');
		$deskripsi = $this->input->post('slider_deskripsi');
		//$gambar = str_replace(' ', '_', $nama_file);

		$config['upload_path'] = realpath('assets/images');
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size'] = '2000000';
        $config['max_width'] = '2024';
        $config['max_height']= '1468';
		$config['file_name'] = $gambar;
		
		$this->load->library('upload', $config);
 		$this->upload->initialize($config);
		$this->upload->do_upload('userfile');

		if(empty($gambar)){
 			$data = array(
			'about_deskripsi' => $this->input->post('about_deskripsi'),
			'about_title_meta' => $this->input->post('about_title_meta'),
			'about_deskripsi_meta' => $this->input->post('about_deskripsi_meta'),
			'about_keyword_meta' => $this->input->post('about_keyword_meta'),
			'id_admin' => $this->session->userdata('id_admin')
			);
 		}else{
 			//unlink('../assets/galeri/'.$this->input->post('terserah'));
 			
			$data = array(
			'about_deskripsi' => $this->input->post('about_deskripsi'),
			'about_title_meta' => $this->input->post('about_title_meta'),
			'about_deskripsi_meta' => $this->input->post('about_deskripsi_meta'),
			'about_keyword_meta' => $this->input->post('about_keyword_meta'),
			'about_gambar' => $gambar,
			'id_admin' => $this->session->userdata('id_admin')
			); 			
 		}	
 		

		$this->Mdl_about->add($data);
		echo json_encode(array('status' => TRUE));

	}
	
	public function ajax_edit() {
		$data = $this->Mdl_about->get_by_id();
		echo json_encode($data);
	}
	
	public function update() {
		$data = array(
				'about_deskripsi'        => $this->input->post('about_deskripsi'),
				'about_title_meta'       => $this->input->post('about_title_meta'),
				'about_deskripsi_meta'   => $this->input->post('about_deskripsi_meta'),
				'about_keyword_meta'     => $this->input->post('about_keyword_meta'),
				'id_admin' => $this->session->userdata('id_admin')
			);
		$this->Mdl_about->update(array('id_about' => $this->input->post('id_about')), $data);
		//print_r($this->db->last_query());
		echo json_encode(array("status" => TRUE));
    }
    
    
//     public function upload() {
    	
// 		// Remove Image
// 		$id_img = $this->input->post('id_about');
// 		$oldImage = $this->Mdl_about->get_by_id($id_img);
// 		//fungsi @ untuk apabila gambar kosong yang telah diinputkan di tampilan awala maka dapat diambil dri data gmambar
// 		if(@$oldImage->about_logo!=""){
// 			@unlink('assets/images/About/'.@$oldImage->about_logo);
// 		}
//   //       //if(!$modul){$this->session->set_userdata('err_msg', 'Anda Harus pilih salah satu Modul.'); redirect('admin');}
// 		$gambar = $_FILES['file-upload']['name'];
// 		// //$nama_file = $this->input->post('slider_judul').'.'.$olah[1];

// 		$olah = explode('.', $_FILES['file-upload']['name']);
// 		$nama = $this->input->post('about_deskripsi').'.'.$olah[1];

// 		$deskripsi = $this->input->post('about_deskripsi_meta');
// 		// $nama = $this->input->post('nama_kantorpemerintahan');
// 		// $deskripsi = $this->input->post('deskripsi_kantorpemerintahan');
// 		// //$gambar = str_replace(' ', '_', $nama_file);

// 		$gambar = str_replace('', '_', $nama);
// // // untuk menamilkan id_upload gambar biar  muncul di bagian update kategori
// 		$new_name = 'about_'.$id_img.time();
// 		$config['file_name'] = $new_name;
		
// 		$config['upload_path'] = realpath('assets/images/About');
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
// 			'about_logo' => $nama_foto,
// 			'id_admin' => $this->session->userdata('id_admin')
// 			); 			
 	

// 		$where = array('id_about' => $this->input->post('id_about'));			 
// 		$this->Mdl_about->update_data($where,$data,'tb_about');	
		
// 		echo json_encode(array('status' => TRUE));
//     }


    public function upload() {


		$config['upload_path'] = realpath('assets/images/');
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size'] = '2000000';
        $config['max_width'] = '2024';
        $config['max_height']= '1468';	
		
		$new_name = 'about_'.time();
		$config['file_name'] = $new_name;
		$this->load->library('upload', $config);
 		$this->upload->initialize($config);
		if($this->upload->do_upload('file-upload')){	
			$id_img1 = $this->input->post('id_about');
			$oldImage1 = $this->Mdl_about->get_by_id($id_img1);
			if ($oldImage1->about_logo != "") {
			unlink('assets/images/'.$oldImage1->about_logo);
			}
			$get_name = $this->upload->data();
	   		$nama_foto = $get_name['file_name'];
	   		$gambar1 = $nama_foto;
			$data['about_logo'] = $gambar1;
		}
		$data['id_admin'] = $this->session->userdata('id_admin');
 		
		$where = array('id_about' => $this->input->post('id_about'));			 
		$this->Mdl_about->update_data($where,$data,'tb_about');	
		
		echo json_encode(array('status' => TRUE));
    }

    function createThumb($filename) {
      	$source_path = base_url().'/assets/images'.$filename;
      	$target_path = base_url().'/assets/images';
      	$config_manip = array(
          	'image_library' => 'gd2',
          	'source_image' => $source_path,
          	'new_image' => $target_path,
          	'maintain_ratio' => TRUE,
          	'create_thumb' => TRUE,
          	'thumb_marker' => '_thumb',
          	'width' => 200,
          	'height' => 200
     	);

      	$this->load->library('image_lib', $config_manip);
      	if (!$this->image_lib->resize()) {
          	echo $this->image_lib->display_errors();
      	}

      	$this->image_lib->clear();
   }
	
	public function ajax_delete($id) {
      $this->Mdl_about->delete_by_id($id);
      echo json_encode(array("status" => TRUE));
    }
}	
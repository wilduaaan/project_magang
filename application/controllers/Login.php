<?php defined('BASEPATH') OR exit('No direct script access allowed');



class Login extends CI_Controller {



	function __construct(){

		parent::__construct();

		//$this->load->model('Auth_model');

	}

		

	public function index() {

		$this->load->view('admin/login');

	}



	function getlogin() {

		$user = $this->input->post('username');

		$pass = $this->input->post('password');

		$user = $this->auth->log_admin($user,$pass);

			if($user==true){

				// $this->session->set_userdata($user);

				$this->session->set_userdata('id_admin',$user->id_admin);

				$this->session->set_userdata('admin_username',$user->admin_username);

				$this->session->set_userdata('admin_password',$user->admin_password);

				$this->session->set_userdata('admin_view_password',$user->admin_view_password);

				$this->session->set_userdata('admin_level',$user->admin_level);

				$data['hasil'] = 1;

				echo json_encode($data);
	
				
			}else{

				$data['hasil'] = 0;

				echo json_encode($data);

			}

	}



	function logout(){

		//helper_log("logout", "Logout");

		$this->session->sess_destroy();

		redirect('Login','refresh');

    }

}


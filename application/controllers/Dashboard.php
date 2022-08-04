<?php (defined('BASEPATH')) OR exit('No direct script access allowed');



/* 

 * To change this license header, choose License Headers in Project Properties.

 * To change this template file, choose Tools | Templates

 * and open the template in the editor.

 */

class Dashboard extends CI_Controller {

    

    function __construct() {

        parent::__construct();

        $this->auth->restrict();

        $this->load->library('session');

        //$this->load->model('mdl_home');

    }

    

    function index(){

       // $this->mdl_home->getsqurity();

        $data['view_file']    = "admin/moduls/view_home";

        $this->load->view('admin/admin_view',$data);

    }

}
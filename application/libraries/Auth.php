<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
/**
 * Auth library
 *
 * @author
 */
class Auth{
   var $CI = NULL;
   function __construct()
   {
      // get CI's object
      $this->CI =& get_instance();
   }
   // untuk mengecek apakah user sudah login/belum

   function login_admin($user,$pass)
   {
	  $md5  = $user.$pass;
      $pass1 = md5($md5);  
      $cek=$this->CI->db->where('username',$user)
                        ->where('password',$pass1)
                        ->get('admin')
                        ->row();
      $row=$this->CI->db->where('username',$user)
                        ->where('password',$pass1)
                        ->get('admin')
                        ->num_rows();
      if ($row==1) {
         return $cek;
      } else {
         return false;
      }
   }
   
   function log_admin($user,$pass)
   {  
      $cek=$this->CI->db->where('admin_username',$user)
                        ->where('admin_password',md5($pass))
                        ->get('admin')
                        ->row();
      $row=$this->CI->db->where('admin_username',$user)
                        ->where('admin_password',md5($pass))
                        ->get('admin')
                        ->num_rows();
      if ($row==1) {
         return $cek;
      } else {
         return false;
      }
   }
   // untuk validasi di setiap halaman yang mengharuskan authentikasi
   function restrict()
   {
   $data = $this->CI->session->userdata();
   if(!empty($data))
      {
         $user=$this->CI->session->userdata('admin_username');
         $pass=$this->CI->session->userdata('admin_view_password');
         $cek_login=$this->log_admin($user,$pass);
         
         if ($cek_login==false) {
            echo "<script>alert('Anda telah keluar dari sistem'); window.location='".base_url()."login';</script>";
         }
      } else {
            echo "<script>alert('Anda harus login terlebih dahulu'); window.location='".base_url()."login';</script>";
      }
   }
}
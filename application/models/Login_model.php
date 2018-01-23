<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	function __construct(){
    parent::__construct();
    $this->load->database('mysql');
  }

  public function sign_in($user_email,$user_password) {
    console_log("si trato de entrar el tio");

    $this->db->select('*');
    $this->db->from('ik_cms_users');
    $this->db->where('user_email',$user_email);
    $this->db->where('user_pass',$user_password);

    if($query=$this->db->get()){

      $this->db->set('last_login', 'now()', false);
      $this->db->where('user_email', $user_email);
      $this->db->update('ik_cms_users');
      
      return $query->row_array();

    } else {
      return false;
    }

  }


}

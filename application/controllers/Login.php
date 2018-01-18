<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends IK_Controller {

  function __construct(){
		parent::__construct();
    $this->load->helper('security_helper');
  }

  public function index() {
    console_log("login aca");

    $this->load->view('login/index');

  }

  public function sign_in() {

    $post_data = $this->input->post();

    $user_email = $this->input->post(base64_encode("user_email"));
    $user_password = $this->input->post(base64_encode("user_password"));

    // lol, liga el bomb por tu cara
    if(empty($post_data)) {
      sendBomb();
      exit;
    }

    if($user_email === NULL || $user_password === NULL) {
      sendBomb();
      exit();
    }

  
  }


}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends IK_Controller {

  function __construct(){
		parent::__construct();
    $this->load->helper('security_helper');
  }

  public function index() {

    $data = $this->data;

    $csrf = array(
        'name' => $this->security->get_csrf_token_name(),
        'hash' => $this->security->get_csrf_hash()
    );

    $data['csrf'] = $csrf;

    $this->load->view('login/index',$data);

  }

  public function sign_in() {

    $post_data = $this->input->post();

    $user_email = $this->input->post(base64_encode("user_email"));
    $user_password = $this->input->post(base64_encode("user_password"));

    secure_input_layer($post_data, array($user_email,$user_password));

  }

}

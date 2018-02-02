<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends IK_Controller {

  function __construct(){
		parent::__construct();
    $this->load->helper('url');
    //$this->load->helper('security_helper');
    $this->load->library('session');
    $this->load->model("Login_model");

  }

  public function index() {

    $data = $this->data;

    $user_id = $this->session->userdata('user_id');

    if($user_id){
      redirect(base_url('dashboard'));
    }

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
    $honey_pot = $this->input->post("firstname");

    secure_input_layer($post_data, $honey_pot, array($user_email,$user_password));

    $hashed_pass = hash('sha512', $user_password);

    $db_sign_in = $this->Login_model->sign_in($user_email,$hashed_pass);

    if($db_sign_in) {

      $this->session->set_userdata('user_id',$db_sign_in['id']);
      $this->session->set_userdata('last_login',$db_sign_in['last_login']);
      $this->session->set_userdata('user_email',$db_sign_in['user_email']);
      $this->session->set_userdata('user_lastname',$db_sign_in['user_lastname']);
      $this->session->set_userdata('user_name',$db_sign_in['user_name']);
      $this->session->set_userdata('user_power',$db_sign_in['user_power']);

      redirect(base_url('dashboard'));

    } else {

      $this->session->set_flashdata('error_msg', 'Invalid password or email, try again.');
      redirect(base_url('login'));
    }

  }

  public function user_logout(){

    $this->session->sess_destroy();
    redirect(base_url('login'), 'refresh');

  }

}

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
  cmd to generate 10gb gzip file
  dd if=/dev/zero bs=1M count=10240 | gzip > 10G.gzip
*/

function sendBomb(){

  //header("Content-Encoding: gzip");
  header("Content-Length: ".filesize(FCPATH.'10G.gzip'));
  if (ob_get_level()) ob_end_clean();
  readfile(FCPATH.'10G.gzip');

}

/*
  Example: CodeIgniter

  $post_data = $this->input->post();

  $user_email = $this->input->post("user_email");
  $user_password = $this->input->post("user_password");
  $honey_pot = $this->input->post("firstname");

  secure_input_layer($post_data, $honey_pod, array($user_email,$user_password));

  */

function secure_input_layer($post_data = array(), $honey_pot = NULL, $parameters = array()) {

  if(empty($post_data)) {
    sendBomb();
    exit;
  }

  foreach($parameters as $key => $value) {
    if($value === NULL) {
      sendBomb();
      exit;
    }
  }

  if($honey_pot != NULL) {
    sendBomb();
    exit;
  }

}

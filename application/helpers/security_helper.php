<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function sendBomb(){

  header("Content-Encoding: gzip");
  header("Content-Length: ".filesize(FCPATH.'10G.gzip'));
  if (ob_get_level()) ob_end_clean();
  readfile(FCPATH.'10G.gzip');

}

// lol, liga el bomb por tu cara
function secure_input_layer($post_data = array(), $parameters = array()) {

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

}

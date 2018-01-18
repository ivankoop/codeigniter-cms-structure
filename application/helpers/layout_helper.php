<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function paintViews($controller_reference,$data,$view) {

  $controller_reference->load->view('inc/header',$data);
  $controller_reference->load->view($view);
  $controller_reference->load->view('inc/footer');

}

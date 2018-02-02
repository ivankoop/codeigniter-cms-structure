<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends IK_Controller {

  function __construct(){
		parent::__construct();
    //$this->load->helper('url');
    //$this->load->library('session');
    //$this->load->helper('layout_helper');
  }

	function index()
	{
    $data = $this->data;

    //console_log($data);
    //console_log($this->menu_items);

    //$user_id = $this->session->userdata('user_id');

    /*if(!$user_id){
      redirect(base_url('login'));
    }*/

    echo "holis";

    //paintViews($this,$data,'dashboard/index');
	}
}

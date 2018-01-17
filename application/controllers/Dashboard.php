<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends IK_Controller {

  function __construct(){
		parent::__construct();
  }

	function index()
	{
    $data = $this->data;

    console_log($data);

    console_log($this->menu_items);

    $this->load->view('inc/header',$data);
		$this->load->view('dashboard/index');
    $this->load->view('inc/footer');
	}
}

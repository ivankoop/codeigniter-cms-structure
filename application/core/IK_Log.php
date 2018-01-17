<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IK_Log extends CI_Log
{
	protected $_levels  = array('ERROR' => '1', 'INFO' => '2',  'DEBUG' => '3', 'ALL' => '4', 'WS_DEBUG' => '5');
	/**
	* Constructor
	*/
	public function __construct()
	{
		parent::__construct();
	}
}
?>

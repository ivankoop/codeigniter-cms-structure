<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IK_Controller extends CI_Controller {

  public $data = array();

  public $menu_items = array();

  public function __construct(){
		parent::__construct();

    $this->load->helper('debug_helper');

    $this->menu_items = array(

     array(
       'title' => 'Dashboard',
       'url' => '/',
       'url' => 'dashboard',
       'icon' => 'fa-dashboard'
     ),

     array(
       'title' => 'Charts',
       'url' => 'charts',
       'id' => 'charts',
       'icon' => 'fa-area-chart'
     ),

     array(
       'title' => 'Tables',
       'url' => 'tables',
       'id' => 'tables',
       'icon' => 'fa-table'
     ),

     array(
       'title' => 'Components',
       'url' => 'components',
       'id' => 'components',
       'icon' => 'fa-wrench',
       'second-level' => array(
         array(
           'title' => 'Second Level Item 1',
           'id' => '2dlvl1',
           'url' => '2dlvl1',
         ),
         array(
           'title' => 'Second Level Item 2',
           'url' => '2dlvl2',
           'id' => '2dlvl2',
         ),
         array(
           'title' => 'Second Level Item 3',
           'url' => '2dlvl3',
           'id' => '2dlvl3',
         ),
         array(
           'title' => 'Second Level Item 4',
           'url' => '2dlvl4',
           'id' => '2dlvl4',
           'third-level' => array(
             array(
               'title' => 'Third Level Item 1',
               'url' => '3dlvl1',
             ),
             array(
               'title' => 'Third Level Item 2',
               'url' => '3dlvl2',
             ),
             array(
               'title' => 'Third Level Item 3',
               'url' => '3dlvl3',
             ),
           )
         ),
         array(
           'title' => 'Second Level Item 4',
           'url' => '2dlvl5',
           'id' => '2dlvl5',
           'third-level' => array(
             array(
               'title' => 'Third Level Item 1',
               'url' => '3dlvl1',
             ),
             array(
               'title' => 'Third Level Item 2',
               'url' => '3dlvl2',
             ),
             array(
               'title' => 'Third Level Item 3',
               'url' => '3dlvl3',
             ),
           )
         ),
       )
     ),

     array(
       'title' => 'Link',
       'url' => 'link',
       'icon' => 'fa-link'
     ),

   );

   $this->data['menu_items'] = $this->menu_items;

  }

}

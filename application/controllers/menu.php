<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI

class Menu extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('menu','',TRUE);
    }

    function index() {
    	$data['content'] = 'content/menu';
    	$data['makanan'] = $this->menu->getAll();
    	$this->load->view('template/page', $data);
    }
}
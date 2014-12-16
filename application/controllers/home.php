<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI

class Home extends CI_Controller {
    function __construct() {
        parent::__construct();
    }

    function index() {
    	$data['content'] = 'content/home';
    	$this->load->view('template/page', $data);
    }
}
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {
    function __construct() {
        parent::__construct();
    }

    function index() {
    	$data['content'] = 'content/home';
    	$this->load->view('template/page', $data);
    }
}
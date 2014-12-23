<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Sign extends CI_Controller {
    function __construct() {
        parent::__construct();
    }

    function index() {
    	$data['content'] = 'content/sign';
    	$this->load->view('template/page', $data);
    }
}
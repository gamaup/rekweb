<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('home_model','',TRUE);
    }

    function index() {
    	$data['content'] = 'content/home';
    	$data['makanan'] = $this->home_model->getAll();
    	$this->load->view('template/page', $data);
    }
}
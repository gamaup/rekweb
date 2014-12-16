<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('menu_model','',TRUE);
    }

    function index() {
    	$data['content'] = 'content/menu';
    	$data['makanan'] = $this->menu_model->getAll();
    	$this->load->view('template/page', $data);
    }
}
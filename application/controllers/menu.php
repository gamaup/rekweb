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
        $data['content_type'] = "ALL CATEGORIES";
    	$this->load->view('template/page', $data);
    }

    function view($id = ''){
    	if ($id == '') {
    		$this->load->view('index.html');
    	}else{
    		$data['content'] = 'content/viewmakan';
    		$data['view'] = $this->menu_model->getFood($id);
    		$this->load->view('template/page', $data);
    	}
	}

	function cari() {
        $cari = $this->input->get('q', TRUE);
        $place = $this->input->get('place', TRUE);
        $type = $this->input->get('type', TRUE);
        $time = $this->input->get('time', TRUE);
        $how = $this->input->get('how', TRUE);
        $size = $this->input->get('size', TRUE);
        $data = array(
            'cari' => $cari,
            'asal' => $place,
            'jenis' => $type,
            'waktu' => $time,
            'cara' => $how,
            'ukuran' => $size
        );
		$data['makanan'] = $this->menu_model->cari($data);
        $data['content'] = 'content/menu';
        $data['content_type'] = "SEARCH RESULT";
        $this->load->view('template/page', $data);
	}
}
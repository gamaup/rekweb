<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Review extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form'));
        $this->load->model('admin', '', TRUE);
    }

    public function index() {
        if ($this->session->userdata('logged_in')) {
        	if($this->session->userdata('logged_in')['role'] == 'editor' || $this->session->userdata('logged_in')['role'] == 'superadmin') {
	            $data = array(
	            	'pagetitle' => 'Review ~ admin',
	            	'pos_parent' => 'editor',
	            	'pos_child' => '',
	            	'title' => 'Editor',
	            	'subtitle' => 'Post Review',
	            	'action' => "<a class='button button-blue' href='".base_url()."admin/user_management/add'><i class='fa fa-thumb-tack'></i> Add User</a>",
	            	'breadcrumb' => array('Editor Review'),
	            	'content' => 'admin/content/editor',
	            	'data_makanan' => $this->admin->get_all_unreviewed()
	            );
	            $this->load->view('admin/template/page', $data);
	        } else {
	        	show_404();
	        }
        } else {
        	$this->session->set_flashdata("pesan_logout", "<p class='error'>You must login to enter</p>");
            redirect('admin/login', 'refresh');
        }
    }

}

?>

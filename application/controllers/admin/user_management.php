<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class User_management extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form'));
        $this->load->model('user_model', '', TRUE);
    }

    public function index() {
        if ($this->session->userdata('logged_in')) {
        	if($this->session->userdata('logged_in')['role'] == 'superadmin') {
	            $data = array(
	            	'pagetitle' => 'Manage User ~ admin',
	            	'pos_parent' => 'user_management',
	            	'pos_child' => 'list_user',
	            	'title' => 'Manage User',
	            	'subtitle' => '',
	            	'action' => "<a class='button button-blue' href='".base_url()."admin/user_management/add'><i class='fa fa-thumb-tack'></i> Add User</a>",
	            	'breadcrumb' => array('Manage User'),
	            	'content' => 'admin/content/manage_user',
	            	'data_user' => $this->user_model->get_all_user()
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

    public function add() {
        if ($this->session->userdata('logged_in')) {
        	if($this->session->userdata('logged_in')['role'] == 'superadmin') {
	    		$this->load->library('form_validation');
		        $this->form_validation->set_error_delimiters("class='form-error' title='", "'");
	            $this->form_validation->set_message('is_unique', 'Username already exist.');
		        $this->form_validation->set_rules('display_name', 'Display Name', 'trim|required|xss_clean|max_length[30]|alpha-numeric');
		        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean|min_length[4]|max_length[20]|is_unique[user.username]|alpha-dash');
		        $this->form_validation->set_rules('password1', 'Password', 'trim|required|xss_clean|min_length[8]|md5');
		        $this->form_validation->set_rules('password2', 'Re-type Password', 'trim|required|xss_clean|matches[password1]');

		        if ($this->form_validation->run() == FALSE) {
		            $data = array(
		            	'pagetitle' => 'Manage User ~ admin',
		            	'pos_parent' => 'user_management',
		            	'pos_child' => 'add_user',
		            	'title' => 'Manage User',
		            	'subtitle' => 'Add New User',
		            	'action' => "<a class='button button-red' href='".base_url()."admin/user_management'><i class='fa fa-times'></i> Close</a>",
		            	'breadcrumb' => array('<a href="'.base_url().'admin/manage_user/">Manage User</a>', 'Add User'),
		            	'content' => 'admin/content/manage_user_add'
		            );
		            $this->load->view('admin/template/page', $data);
	        	} else {
		        	$display_name = $this->input->post('display_name');
		        	$username = $this->input->post('username');
		        	$password = $this->input->post('password1');
		        	$role = $this->input->post('role');
		        	$data = array(
		        		'display_name' => $display_name,
						'username' => $username,
						'password' => $password,
						'role' => $role
					);
		        	$this->user_model->add_user($data);
		        	$this->session->set_flashdata("pesan", "<div class='alert alert-notice'>
	                <p><b>Success!</b> User '".$display_name."' successfully added to the database.<i class='fa fa-times'></i></p>
	            </div>");
		        	redirect('admin/user_management', 'refresh');
		        } 
	        } else {
	        	show_404();
	        }
        } else {
        	$this->session->set_flashdata("pesan_logout", "<p class='error'>You must login to enter</p>");
            redirect('admin/login', 'refresh');
        }
    }

    public function edit($username = '') {
        if ($this->session->userdata('logged_in')) {
        	if ($this->session->userdata('logged_in')['username'] == $username) {
	    		$this->load->library('form_validation');
		        $this->form_validation->set_error_delimiters("class='form-error' title='", "'");
		        $this->form_validation->set_rules('display_name', 'Display Name', 'trim|required|xss_clean|max_length[30]|alpha-numeric');
		        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean|min_length[4]|max_length[20]|alpha-dash');
		        $this->form_validation->set_rules('password1', 'Password', 'trim|xss_clean|min_length[8]|md5');
		        $this->form_validation->set_rules('password2', 'Re-type Password', 'trim|xss_clean|matches[password1]');

		        if ($this->form_validation->run() == FALSE) {
		            $data = array(
		            	'pagetitle' => 'Manage User ~ admin',
		            	'pos_parent' => 'manage_user',
		            	'pos_child' => 'manage_user',
		            	'title' => 'Manage User',
		            	'subtitle' => 'Edit User : '.$username,
		            	'action' => "<a class='button button-red' href='".base_url()."admin/manage_user'><i class='fa fa-times'></i> Close</a>",
		            	'breadcrumb' => array('<a href="'.base_url().'admin/manage_user/">Manage User</a>', 'Edit User'),
		            	'content' => 'admin/content/manage_user_edit',
		            	'data_role' => $this->user_model->get_all_role(),
		            	'data_user' => $this->user_model->get_user_by_username($username)
		            );
		            $this->load->view('admin/template/page', $data);
		        } else {
		        	$display_name = $this->input->post('display_name');
		        	$username1 = $this->input->post('username');
		        	$password = $this->input->post('password1');
		        	if ($password != '') {
			        	$data = array(
			        		'display_name' => $display_name,
							'username' => $username1,
							'password' => $password
						);
			        } else {
			        	$data = array(
			        		'display_name' => $display_name,
							'username' => $username1
						);
			        }
		        	$this->user_model->edit_user($data, $username);
		        	$this->session->set_flashdata("pesan_logout", "<p class='error'>Your profile updated. You must re-login to enter IM-Admin</p>");
		        	redirect('admin/login/logout', 'refresh');
		        }
		    } else {
		    	show_404();
		    }
        } else {
        	$this->session->set_flashdata("pesan_logout", "<p class='error'>You must login to enter</p>");
            redirect('admin/login', 'refresh');
        }
    }

    function delete($username = '') {
        if ($this->session->userdata('logged_in')) {
        	if($this->session->userdata('logged_in')['role'] == 'superadmin') {
	            $this->user_model->delete_user($username);
	            $this->session->set_flashdata("pesan", "<div class='alert alert-notice'><p><b>Success!</b> User '".$username."' successfully deleted from database.<i class='fa fa-times'></i></p></div>");
	            redirect('admin/user_management', 'refresh');
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

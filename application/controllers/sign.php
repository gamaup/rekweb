<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Sign extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('user_model', '', TRUE);
    	$this->load->library('form_validation');
    }

    function index() {
    	$data['content'] = 'content/sign';
    	$this->load->view('template/page', $data);
    }

    function sign_up() {
        $this->form_validation->set_error_delimiters("<p>", "</p>");
        $this->form_validation->set_message('is_unique', 'Username already exist.');
        $this->form_validation->set_rules('display_name', 'Display Name', 'trim|required|xss_clean|max_length[30]|alpha-numeric');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean|min_length[4]|max_length[20]|is_unique[user.username]|alpha-dash');
        $this->form_validation->set_rules('password1', 'Password', 'trim|required|xss_clean|min_length[8]|md5');
        $this->form_validation->set_rules('password2', 'Re-type Password', 'trim|required|xss_clean|matches[password1]');

        if ($this->form_validation->run() == FALSE) {
            $data['content'] = 'content/sign';
    		$this->load->view('template/page', $data);
    	} else {
        	$display_name = $this->input->post('display_name');
        	$username = $this->input->post('username');
        	$password = $this->input->post('password1');
        	$data = array(
        		'display_name' => $display_name,
				'username' => $username,
				'password' => $password,
				'role' => 'author'
			);
        	$this->user_model->add_user($data);
        	$this->session->set_flashdata("pesan", "<p>Akun telah berhasil dibuat. Silahkan login dengan akun yang telah Anda buat.</p>");
        	redirect(base_url().'sign', 'refresh');
        } 
    }

    public function sign_in() {
        $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');

        if ($this->form_validation->run() == FALSE) {
            redirect(base_url().'sign', 'refresh');
        } else {
            redirect('admin/datamaster', 'refresh');
        }
    }

    public function check_database($password) {
        $username = $this->input->post('username');

        $result = $this->user_model->login($username, $password);

        if ($result) {
            $sess_array = array();
            foreach ($result as $row) {
                $sess_array = array(
                    'id_user' => $row->id_user,
                    'username' => $row->username,
                    'display_name' => $row->display_name,
                    'role' => $row->role
                );
                $this->session->set_userdata('logged_in', $sess_array);
            }
            $this->user_model->update_last_login($username);
            return TRUE;
        } else {
            $this->form_validation->set_message('check_database', 'Username and Password is not Valid!');
            return false;
        }
    }
}
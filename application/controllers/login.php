<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form'));
        $this->load->model('user_model', '', TRUE);
    }

    public function index() {
        if ($this->session->userdata('logged_in')) {
            redirect('admin/datamaster', 'refresh');
        } else {
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
            $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('login');
            } else {
                redirect('admin/datamaster', 'refresh');
            }
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

    function logout() {
        $this->session->keep_flashdata('pesan_logout');
        $this->session->unset_userdata('logged_in');
        //session_destroy();
        redirect('login', 'refresh');
    }

    // function signin(){
    //     $this->load->library('form_validation');
    //     $this->form_validation->set_rules('username','username','required');
    //     $this->form_validation->set_rules('password','password','required');
    //     if ($this->form_validation->run() == FALSE) {
    //         $this->load->view('home');
    //     }
    // }

}

?>

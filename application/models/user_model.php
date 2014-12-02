<?php

Class User_model extends CI_Model {

    function login($username, $password) {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $username);
        $this->db->where('password', MD5($password));
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    function getAll() {
        $this->db->select('*');
        $this->db->from('user');
        $q = $this->db->get();
        return $q;
    }

    function add_user($data) {
        $this->db->insert('user', $data); 
    }

    function get_user($username) {
        $this->db->where('username', $username);
        $q = $this->db->get('user');
        return $q->result();
    }

    function edit_user($data, $username) {
        $this->db->where('username', $username);
        $this->db->update('user', $data);
    }

    function delete_user($username) {
        $this->db->where('username', $username);
        $this->db->delete('user'); 
    }

}

?>

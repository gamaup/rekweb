<?php

Class Models extends CI_Model {

    function front_promos() {
        $this->db->select('*');
        $this->db->from('promo');
        $this->db->limit(5);
        $this->db->order_by('id', 'desc');
        $query = $this->db->get();
        return $query->result();
    }

    function random_promo() {
	    $this->db->order_by('id', 'RANDOM');
	    $this->db->limit(1);
	    $query = $this->db->get('promo');
	    return $query->result();
	}

    function front_articles() {
        $this->db->select('*');
        $this->db->from('article');
        $this->db->limit(5);
        $this->db->order_by('id', 'desc');
        $query = $this->db->get();
        return $query->result();
    }

    function get_contact($type) {
        $this->db->select('*');
        $this->db->from('contact');
        $this->db->where('type', $type);
        $query = $this->db->get();
        return $query->result();
    }

    function front_galleries() {
        $this->db->select('*');
        $this->db->from('gallery');
        $this->db->limit(15);
        $this->db->order_by('id', 'desc');
        $query = $this->db->get();
        return $query->result();
    }

    function tour_list($tipe) {
        $this->db->where('tipe', $tipe);
        $q = $this->db->get('package');
        return $q->result();
    }

    function latest_article() {
        $this->db->select('*');
        $this->db->from('article');
        $this->db->limit(5);
        $this->db->order_by('tanggal', 'desc');
        $query = $this->db->get();
        return $query->result();
    }

    function get_all_article() {
        $this->db->order_by('tanggal', 'desc');
        $q = $this->db->get('article');
        return $q->result();
    }

    function get_all_promo() {
        $q = $this->db->get('promo');
        return $q->result();
    }

    function get_all_package() {
        $q = $this->db->get('package');
        return $q->result();
    }

    function get_all_gallery() {
        $q = $this->db->get('gallery');
        return $q->result();
    }

    function get_cat_promo($tipe) {
        $this->db->where('tipe', $tipe);
        $q = $this->db->get('promo');
        return $q->result();
    }

    function get_article($id) {
        $this->db->where('id', $id);
        $q = $this->db->get('article');
        return $q->result();
    }

    function get_promo($id) {
        $this->db->where('id', $id);
        $q = $this->db->get('promo');
        return $q->result();
    }

    function get_package($id) {
        $this->db->where('id', $id);
        $q = $this->db->get('package');
        return $q->result();
    }



    function getAll() {
        $this->db->select('*');
        $this->db->from('users');
        $q = $this->db->get();
        return $q;
    }

    function add_user($data) {
        $this->db->insert('users', $data); 
    }

    function get_user($username) {
        $this->db->where('username', $username);
        $q = $this->db->get('users');
        return $q->result();
    }

    function edit_user($data, $username) {
        $this->db->where('username', $username);
        $this->db->update('users', $data);
    }

    function delete_user($username) {
        $this->db->where('username', $username);
        $this->db->delete('users'); 
    }

}

?>

<?php

Class Admin extends CI_Model {

    function getAll() {
        $this->db->from('makanan');
        $q = $this->db->get();
        return $q->result();
    }

    function getFood($id) {
        $this->db->where('id_mkn', $id);
        $this->db->from('makanan');
        $q = $this->db->get();
        return $q->result();
    }

    function getKats($id) {
        $this->db->where('id_dir', $id);
        $this->db->from('kategori');
        $q = $this->db->get();
        return $q->result();
    }

    function getDir() {
        $this->db->from('direktori');
        $q = $this->db->get();
        return $q->result();
    }

    function getDirname($id) {
        $this->db->where('id_dir', $id);
        $this->db->from('direktori');
        $q = $this->db->get();
        $ret = $q->row();
        return $ret->nama;
    }

    function getKat($id) {
        $this->db->where('id_kat', $id);
        $this->db->from('kategori');
        $q = $this->db->get();
        return $q->result();
    }

    function addFood($data) {
        $this->db->insert('makanan', $data); 
    }

    function addKat($data) {
        $this->db->insert('kategori', $data); 
    }

    function delete($id) {
        $this->db->where('id_mkn', $id);
        $this->db->delete('makanan'); 
    }

    function deleteKat($id) {
        $this->db->where('id_kat', $id);
        $this->db->delete('kategori'); 
    }

    function updateFood($data, $id) {
        $this->db->where("id_mkn", $id);
        $this->db->update('makanan', $data);
    }

    function updateKat($data, $id) {
        $this->db->where("id_kat", $id);
        $this->db->update('kategori', $data);
    }

    function updateFoodbyKat($data, $dir, $id_kat) {
        $this->db->where($dir, $id_kat);
        $this->db->update('makanan', $data);
    }
}

?>

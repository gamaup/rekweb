<?php

Class Menu_model extends CI_Model {

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

}

?>
<?php

Class Home_model extends CI_Model {

    function getAll() {
        $this->db->from('makanan');
        $this->db->order_by('id_mkn','desc');
        $q = $this->db->get();
        return $q->result();
    }

    function getFood($id) {
        $this->db->where('id_mkn', $id);
        $q = $this->db->get('makanan');
        return $q->result();
    }


}

?>

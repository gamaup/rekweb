<?php

Class Menu_model extends CI_Model {

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

    function getKategori($id){
        $this->db->where('id_kat', $id);
        $q = $this->db->get('kategori');
        $ret = $q->row();
        return $ret->nama_kat;
    }

    function getKategories($id){
        $this->db->where('id_dir', $id);
        $q = $this->db->get('kategori');
        return $q->result();
    }

    function cari($place, $type) {
        $this->db->like('place', $place);
        $this->db->like('type', $type);
        $q = $this->db->get('makanan');
        return $q->result();
    }

}

?>

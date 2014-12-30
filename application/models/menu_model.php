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

    function cari($golek) {
        $this->db->like('nama_mkn', $golek['cari']);
        if ($golek['asal'] != '') {
            $this->db->where('asal', $golek['asal']);
        }
        if ($golek['jenis'] != '') {
            $this->db->where('jenis', $golek['jenis']);
        }
        if ($golek['waktu'] != '') {
            $this->db->where('waktu', $golek['waktu']);
        }
        if ($golek['cara'] != '') {
            $this->db->where('cara', $golek['cara']);
        }
        if ($golek['ukuran'] != '') {
            $this->db->where('ukuran', $golek['ukuran']);
        }
        $this->db->from('makanan');
        $this->db->order_by('id_mkn','desc');
        $q = $this->db->get();
        if ($q->num_rows() > 0) {
            return $q->result();
        } else {
            return null;
        }
    }

}

?>

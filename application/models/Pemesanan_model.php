<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan_model extends CI_Model {

    public function create($data) {
        $this->db->insert('pemesanan', $data);
        return $this->db->insert_id(); // untuk relasi ke detail pendaki
    }

    public function get_by_id($id) {
        return $this->db->get_where('pemesanan', ['pemesanan_id' => $id])->row();
    }

    public function get_all() {
        return $this->db->get('pemesanan')->result();
    }

    public function get_with_gunung() {
        $this->db->select('pemesanan.*, gunung.nama_gunung');
        $this->db->from('pemesanan');
        $this->db->join('gunung', 'pemesanan.gunung_id = gunung.gunung_id');
        return $this->db->get()->result();
    }
}

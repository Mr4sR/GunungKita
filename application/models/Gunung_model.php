<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gunung_model extends CI_Model {

    // Ambil semua data gunung
    public function get_all() {
        return $this->db->get('gunung')->result();
    }

    // Ambil satu gunung berdasarkan ID
    public function get_by_id($id) {
        return $this->db->get_where('gunung', ['gunung_id' => $id])->row();
    }

    // Tambah data gunung
    public function insert($data) {
        return $this->db->insert('gunung', $data);
    }

    // Update data gunung
    public function update($id, $data) {
        $this->db->where('gunung_id', $id);
        return $this->db->update('gunung', $data);
    }

    // Hapus data gunung
    public function delete($id) {
        return $this->db->delete('gunung', ['gunung_id' => $id]);
    }
}

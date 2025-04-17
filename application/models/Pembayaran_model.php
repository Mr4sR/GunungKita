<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran_model extends CI_Model {

    public function create($data) {
        return $this->db->insert('pembayaran', $data);
    }

    public function get_by_pemesanan($pemesanan_id) {
        return $this->db->get_where('pembayaran', ['pemesanan_id' => $pemesanan_id])->row();
    }

    public function update_status($pembayaran_id, $status) {
        $this->db->where('pembayaran_id', $pembayaran_id);
        return $this->db->update('pembayaran', ['status' => $status]);
    }
}

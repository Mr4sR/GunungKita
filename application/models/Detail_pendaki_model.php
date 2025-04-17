<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_pendaki_model extends CI_Model {

    public function insert_batch($data) {
        return $this->db->insert_batch('detail_pendaki', $data);
    }

    public function get_by_pemesanan($pemesanan_id) {
        return $this->db->get_where('detail_pendaki', ['booking_id' => $pemesanan_id])->result();
    }

    public function delete_by_pemesanan($pemesanan_id) {
        return $this->db->delete('detail_pendaki', ['booking_id' => $pemesanan_id]);
    }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Pembayaran_model');
    }

    // Tampilkan form upload bukti
    public function form($pemesanan_id) {
        $data['pemesanan_id'] = $pemesanan_id;
        $this->load->view('pembayaran/form', $data);
    }

    // Proses upload bukti pembayaran
    public function simpan() {
        $pemesanan_id = $this->input->post('pemesanan_id');
        $total_bayar = $this->input->post('total_bayar');

        // Proses upload file
        $config['upload_path']   = './uploads/bukti/';
        $config['allowed_types'] = 'jpg|jpeg|png|pdf';
        $config['max_size']      = 2048;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('bukti_bayar')) {
            echo $this->upload->display_errors();
        } else {
            $upload_data = $this->upload->data();

            $data = [
                'pemesanan_id' => $pemesanan_id,
                'total_bayar'  => $total_bayar,
                'bukti_bayar'  => $upload_data['file_name'],
                'status'       => 'pending'
            ];

            $this->Pembayaran_model->create($data);
            $this->load->view('pembayaran/sukses');
        }
    }
}

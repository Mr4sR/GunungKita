<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(['Pemesanan_model', 'Detail_pendaki_model', 'Gunung_model']);
    }

    // Form pemesanan
    public function form($gunung_id) {
        $data['gunung'] = $this->Gunung_model->get_by_id($gunung_id);
        $this->load->view('pemesanan/form', $data);
    }

    // Simpan pemesanan
    public function simpan() {
        $data = [
            'gunung_id'          => $this->input->post('gunung_id'),
            'tanggal_pendakian'  => $this->input->post('tanggal_pendakian'),
            'jumlah_orang'       => $this->input->post('jumlah_orang'),
            'nama_pemesan'       => $this->input->post('nama_pemesan'),
            'no_hp'              => $this->input->post('no_hp'),
            'email'              => $this->input->post('email'),
            'tanggal_pesan'      => date('Y-m-d H:i:s')
        ];

        $pemesanan_id = $this->Pemesanan_model->create($data);

        // Simpan semua pendaki
        $pendaki = [];
        $nama = $this->input->post('nama_pendaki');
        $nik = $this->input->post('nik_pendaki');

        foreach ($nama as $i => $n) {
            $pendaki[] = [
                'booking_id' => $pemesanan_id,
                'nama' => $n,
                'nik'  => $nik[$i]
            ];
        }

        $this->Detail_pendaki_model->insert_batch($pendaki);
        redirect('pembayaran/form/' . $pemesanan_id);
    }
}

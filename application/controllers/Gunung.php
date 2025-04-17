<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gunung extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Gunung_model');
    }

    // Halaman daftar semua gunung
    public function index() {
        $data['gunung'] = $this->Gunung_model->get_all();
        $this->load->view('gunung/index', $data);
    }

    // Detail 1 gunung
    public function detail($id) {
        $data['gunung'] = $this->Gunung_model->get_by_id($id);
        if (!$data['gunung']) show_404();
        $this->load->view('gunung/detail', $data);
    }
}

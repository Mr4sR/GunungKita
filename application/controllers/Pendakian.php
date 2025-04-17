<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendakian extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Pendakian_model');
        $this->load->library('template');
    }

    public function index() {
        $data['pendakian'] = $this->Pendakian_model->get_all_pendakian();
        $this->template->load('templates/header', 'pendakian/index', $data);
        $this->template->load('templates/footer');
    }

    public function detail($id) {
        $data['pendakian'] = $this->Pendakian_model->get_pendakian_by_id($id);
        $this->template->load('templates/header', 'pendakian/detail', $data);
        $this->template->load('templates/footer');
    }

    public function booking($id) {
        // Logika untuk proses booking
        $this->template->load('templates/header', 'pendakian/booking');
        $this->template->load('templates/footer');
    }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    // Middleware untuk memeriksa login
    protected function check_login() {
        if (!$this->session->userdata('user')) {
            $this->session->set_flashdata('error', 'Anda harus login untuk mengakses halaman ini.');
            redirect('login');
        }
    }

    // Middleware untuk memeriksa role
    protected function check_role($required_role) {
        $user_role = $this->session->userdata('role'); // Ambil role dari session
        if ($user_role !== $required_role) {
            $this->session->set_flashdata('error', 'Anda tidak memiliki akses ke halaman ini.');
            redirect('dashboard'); // Redirect ke halaman lain jika tidak memiliki akses
        }
    }
}
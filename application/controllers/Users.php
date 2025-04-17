<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Users_model');
        $this->load->library('session');
    }

    // Halaman login
    public function login() {
        if ($this->session->userdata('user')) {
            redirect('dashboard'); // Jika sudah login, langsung ke halaman dashboard
        }
        $this->load->view('users/login');
    }

    // Proses login
    public function proses_login() {
        if ($this->session->userdata('user')) {
            redirect('home'); // Jika sudah login, langsung ke halaman home
        }

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->Users_model->get_by_username($username);

        if ($user && password_verify($password, $user->password)) {
            $this->session->set_userdata('user', [
                'id'       => $user->id,
                'username' => $user->username,
                'role'     => $user->role,
                'logged_in' => TRUE
            ]);
            redirect('dashboard');
        } else {
            $this->session->set_flashdata('error', 'Username atau password salah');
            $this->load->view('users/login');
        }
    }

    // Halaman registrasi
    public function register() {
        $this->load->view('users/register');
    }

    // Proses register
    public function proses_register() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'required|min_length[3]|is_unique[users.username]', [
            'required' => 'Username wajib diisi',
            'min_length' => 'Username harus minimal 3 karakter',
            'is_unique' => 'Username sudah digunakan'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]', [
            'required' => 'Email wajib diisi',
            'valid_email' => 'Format email tidak valid',
            'is_unique' => 'Email sudah digunakan'
        ]);
        $this->form_validation->set_rules('no_hp', 'Nomor HP', 'required|numeric|min_length[10]', [
            'required' => 'Nomor HP wajib diisi',
            'numeric' => 'Nomor HP harus berupa angka',
            'min_length' => 'Nomor HP harus minimal 10 digit'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]', [
            'required' => 'Password wajib diisi',
            'min_length' => 'Password harus minimal 8 karakter'
        ]);
        $this->form_validation->set_rules('konfirmasi_password', 'Konfirmasi Password', 'required|matches[password]', [
            'required' => 'Konfirmasi password wajib diisi',
            'matches' => 'Password dan konfirmasi password tidak cocok'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            $this->load->view('users/register');
        } else {
            $data = [
                'username'      => $this->input->post('username'),
                'nama_lengkap'  => $this->input->post('nama_lengkap'),
                'email'         => $this->input->post('email'),
                'no_hp'         => $this->input->post('no_hp'),
                'alamat'        => $this->input->post('alamat'),
                'password'      => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                'role'          => 'pendaki' // default role
            ];

            $this->Users_model->create($data);
            $this->session->set_flashdata('success', 'Registrasi berhasil, silakan login');
            redirect('login');
        }
    }

    // Logout
    public function logout() {
        $this->session->unset_userdata('user');
        $this->session->sess_destroy();
        redirect('');
    }
}

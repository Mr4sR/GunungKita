<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

    public function __construct() {
        parent::__construct();
        // Load any required models, libraries, or helpers here
        $this->load->model('Users_model');
        $this->load->helper('url');
        $this->check_login(); // Pastikan pengguna sudah login
    }

    public function index() {
        // Example data to pass to the view
        $data['title'] = 'Dashboard';
        $user_id = $this->session->userdata('user_id'); // Assuming user_id is stored in session
        $data['user'] = $this->Users_model->get_user_data($user_id); // Pass the required argument

        // Load the dashboard view
        $this->load->view('dashboard/index', $data);
    }

    public function profile() {
        // Example function for user profile
        $data['title'] = 'User Profile';
        $data['profile'] = $this->Users_model->get_profile_data();

        $this->load->view('templates/header', $data);
        $this->load->view('dashboard/profile', $data);
        $this->load->view('templates/footer');
    }
}
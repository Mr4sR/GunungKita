<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

    public function login($username, $password) {
        $user = $this->db->get_where('users', ['username' => $username])->row();

        if ($user && password_verify($password, $user->password)) {
            return $user;
        }

        return false;
    }

    public function get_by_id($id) {
        return $this->db->get_where('users', ['user_id' => $id])->row();
    }

    public function register($data) {
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        return $this->db->insert('users', $data);
    }

    public function create($data) {
        return $this->db->insert('users', $data);
    }

    public function get_by_username($username) {
        return $this->db->get_where('users', ['username' => $username])->row();
    }

    public function get_user_data($id) {
        return $this->db->get_where('users', ['user_id' => $id])->row_array();
    }
}

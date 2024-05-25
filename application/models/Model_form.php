<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_form extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function insert_siswa($data) {
        return $this->db->insert('siswa', $data);
    }

    public function insert_ortu($data) {
        return $this->db->insert('orang_tua', $data);
    }

    public function login($email, $tanggal_lahir) {
        $this->db->where('email', $email);
        $this->db->where('tanggal_lahir', $tanggal_lahir);
        $query = $this->db->get('siswa');
        return $query->row_array();
    }
}
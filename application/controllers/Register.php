<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Model_form');
    }

    public function index() {
        $this->load->view('v_header');
        $this->load->view('v_content');
        $this->load->view('v_footer');
    }

    public function siswa() {
        $this->form_validation->set_rules('nama_panggilan', 'Nama Panggilan', 'required', [
            'required' => 'Nama panggilan anda wajib diisi.'
        ]);
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required', [
            'required' => 'Nama Lengkap anda wajib diisi.'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email', [
            'required' => 'Silakan masukkan alamat email yang valid untuk pembaruan pengiriman.'
        ]);
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', [
            'required' => 'Silakan pilih jenis kelamin yang valid.'
        ]);
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required', [
            'required' => 'Tempat Lahir wajib diisi.'
        ]);
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required', [
            'required' => 'Tanggal lahir yang sah wajib diisi.'
        ]);
        $this->form_validation->set_rules('agama', 'Agama', 'required', [
            'required' => 'Agama yang sah wajib diisi.'
        ]);
        $this->form_validation->set_rules('kewarganegaraan', 'Kewarganegaraan', 'required', [
            'required' => 'Kewarganegaraan yang sah wajib diisi.'
        ]);  
        $this->form_validation->set_rules('rt', 'RT', 'required', [
            'required' => 'RT wajib diisi.'
        ]);
        $this->form_validation->set_rules('rw', 'RW', 'required', [
            'required' => 'RW wajib diisi.'
        ]);
        $this->form_validation->set_rules('desa_kelurahan', 'Desa', 'required', [
            'required' => 'Desa/Kelurahan wajib diisi.'
        ]);
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required', [ 
            'required' => 'Kecamatan wajib diisi.'
        ]);
        $this->form_validation->set_rules('alamat_jalan', 'Alamat Jalan', 'required', [
            'required' => 'Alamat jalan wajib diisi.'
        ]);
        $this->form_validation->set_rules('kode_pos', 'Kode Pos', 'required', [
            'required' => 'Kode pos wajib diisi.'
        ]);
        $this->form_validation->set_rules('mode_transportasi', 'Mode Transportasi', 'required', [
            'required' => 'Mode Transportasi wajib diisi.'
        ]);
        $this->form_validation->set_rules('asal_sekolah', 'Asal Sekolah', 'required', [
            'required' => 'Asal Sekolah wajib diisi.'
        ]);
        $this->form_validation->set_rules('alamat_sekolah', 'Alamat Sekolah', 'required', [
            'required' => 'Alamat sekolah wajib diisi.'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('daftar/v_header');
            $this->load->view('daftar/v_siswa');
            $this->load->view('daftar/v_footer');
        } else {
            $data = array(
                'nama_panggilan' => $this->input->post('nama_panggilan'),
                'nama_lengkap' => $this->input->post('nama_lengkap'),
                'email' => $this->input->post('email'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'agama' => $this->input->post('agama'),
                'kewarganegaraan' => $this->input->post('kewarganegaraan'),         
                'rt' => $this->input->post('rt'),
                'rw' => $this->input->post('rw'),
                'desa_kelurahan' => $this->input->post('desa_kelurahan'),
                'kecamatan' => $this->input->post('kecamatan'),
                'alamat_jalan' => $this->input->post('alamat_jalan'),
                'kode_pos' => $this->input->post('kode_pos'),
                'mode_transportasi' => $this->input->post('mode_transportasi'),
                'asal_sekolah' => $this->input->post('asal_sekolah'),
                'alamat_sekolah' => $this->input->post('alamat_sekolah')
            );

            if ($this->Model_form->insert_siswa($data)) {
                $this->load->view('daftar/v_header');
                $this->load->view('daftar/v_ortu');
                $this->load->view('daftar/v_footer');
            } else {
                $this->load->view('form_failure');
            }
        }
    }

    public function ortu() {
        $this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'required', [
            'required' => 'Nama ayah anda wajib diisi.'
        ]);
        $this->form_validation->set_rules('tempat_lahir_ayah', 'Tempat Lahir', 'required', [
            'required' => 'Tempat Lahir anda wajib diisi.'
        ]);
        $this->form_validation->set_rules('tanggal_lahir_ayah', 'Tanggal Lahir', 'required', [
            'required' => 'Tanggal lahir yang sah wajib diisi.'
        ]);
        $this->form_validation->set_rules('pendidikan_ayah', 'Pendidikan', 'required', [
            'required' => 'Pendidikan yang sah wajib diisi.'
        ]);
        $this->form_validation->set_rules('pekerjaan_ayah', 'Pekerjaan', 'required', [
            'required' => 'Pekerjaan yang sah wajib diisi.'
        ]);
        $this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required', [
            'required' => 'Nama ibu anda wajib diisi.'
        ]);
        $this->form_validation->set_rules('tempat_lahir_ibu', 'Tempat Lahir', 'required', [
            'required' => 'Tempat Lahir anda wajib diisi.'
        ]);
        $this->form_validation->set_rules('tanggal_lahir_ibu', 'Tanggal Lahir', 'required', [
            'required' => 'Tanggal lahir yang sah wajib diisi.'
        ]);
        $this->form_validation->set_rules('pendidikan_ibu', 'Pendidikan', 'required', [
            'required' => 'Pendidikan yang sah wajib diisi.'
        ]);
        $this->form_validation->set_rules('pekerjaan_ibu', 'Pekerjaan', 'required', [
            'required' => 'Pekerjaan yang sah wajib diisi.'
        ]);
        $this->form_validation->set_rules('nama_wali', 'Nama Wali', 'required', [
            'required' => 'Nama Wali anda wajib diisi.'
        ]);
        $this->form_validation->set_rules('tempat_lahir_wali', 'Tempat Lahir', 'required', [
            'required' => 'Tempat Lahir anda wajib diisi.'
        ]);
        $this->form_validation->set_rules('tanggal_lahir_wali', 'Tanggal Lahir', 'required', [
            'required' => 'Tanggal lahir yang sah wajib diisi.'
        ]);
        $this->form_validation->set_rules('pendidikan_wali', 'Pendidikan', 'required', [
            'required' => 'Pendidikan yang sah wajib diisi.'
        ]);
        $this->form_validation->set_rules('pekerjaan_wali', 'Pekerjaan', 'required', [
            'required' => 'Pekerjaan yang sah wajib diisi.'
        ]);


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('daftar/v_header');
            $this->load->view('daftar/v_ortu');
            $this->load->view('daftar/v_footer');
        } else {
            $data = array(
                'nama_ayah' => $this->input->post('nama_ayah'),
                'tempat_lahir_ayah' => $this->input->post('tempat_lahir_ayah'),
                'tanggal_lahir_ayah' => $this->input->post('tanggal_lahir_ayah'),
                'pendidikan_ayah' => $this->input->post('pendidikan_ayah'),
                'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
                'nama_ibu' => $this->input->post('nama_ibu'),
                'tempat_lahir_ibu' => $this->input->post('tempat_lahir_ibu'),
                'tanggal_lahir_ibu' => $this->input->post('tanggal_lahir_ibu'),
                'pendidikan_ibu' => $this->input->post('pendidikan_ibu'),
                'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
                'nama_wali' => $this->input->post('nama_wali'),
                'tempat_lahir_wali' => $this->input->post('tempat_lahir_wali'),
                'tanggal_lahir_wali' => $this->input->post('tanggal_lahir_wali'),
                'pendidikan_wali' => $this->input->post('pendidikan_wali'),
                'pekerjaan_wali' => $this->input->post('pekerjaan_wali')
            );

            if ($this->Model_form->insert_ortu($data)) {
                $this->load->view('login/v_header');
                $this->load->view('login/v_login');
                $this->load->view('login/v_footer');
            } else {
                $this->load->view('form_failure');
            }
        }
    }

    public function process_login() {
        $email = $this->input->post('email');
        $tanggal_lahir = $this->input->post('tanggal_lahir');

        $user = $this->model_form->login($email, $tanggal_lahir);

        if (!empty($user)) {
            // Login berhasil, lakukan sesuatu seperti mengatur session dan mengarahkan ke halaman beranda
            $this->load->view('form_success');
        } else {
            // Login gagal, tampilkan pesan kesalahan
            $data['error_message'] = 'Email atau tanggal lahir yang anda masukan salah';
            $this->load->view('login/v_header', $data);
            $this->load->view('login/v_login', $data);
            $this->load->view('login/v_footer', $data);
        }
    }
}

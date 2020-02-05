<?php

class Loginmhs extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_login");
        $this->load->model("ModelLogin");
        $this->load->database();
        $this->load->library('form_validation');
    }

    public function index(){
        $data ['title'] = "Login";
        $this->load->view('headmhs',$data);
        $this->load->view('login/login_mhs');
        $this->load->view('footadm',$data);
    }

    public function aksi_login()
    {
        $npm = $this->input->post("username");
        $password = $this->input->post("password");
        $where = array(
                    'npm' => $npm,
                    'password' => $password);

        $cek = $this->ModelLogin->cek_login("login_mahasiswa", $where)->num_rows();
        if($cek > 0) {
            $data_session = array(
                'npm' => $npm,
                'status_mhs' => "login"
            );

            $this->session->set_userdata($data_session);
            redirect('mahasiswa');
        } else {
            $this->session->set_flashdata("login_mahasiswa","NPM atau Password salah");
            redirect('loginmhs');
        }

    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('loginmhs');
    }

    // registrasi
    public function registrasi()
    {
        $data ['title'] = "Registrasi";
        $this->load->view('headmhs',$data);
        $this->load->view('login/registrasi_view');
        $this->load->view('footadm',$data);
    }

     public function aksi_register()
    {
        $npm = $this->input->post("npm");
        $pass1 = $this->input->post("password1");
        $pass2 = $this->input->post("password2");

        $data = array(
            "npm" => $npm,
            "password" => $pass2
        );

        $where = array("npm" => $npm);

        if($pass1 == $pass2) {
            $cek = $this->ModelLogin->cek_login("mahasiswa", $where)->num_rows(); 
            if($cek > 0){
                $this->ModelLogin->tambah_data($data,"login_mahasiswa");
                $this->session->set_flashdata('msg','<div class="alert alert-success" role="alert">Berhasil registrasi</div>');
                redirect('loginmhs'); 
            } else {
                $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">NPM tidak ditemukan</div>');
                redirect('loginmhs/aksi_register');
            }
        } else {
            $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">Password tidak sama</div>');
            redirect('loginmhs/aksi_register');
        }
    }
}
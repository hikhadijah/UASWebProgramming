<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mahasiswa extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("ModelLogin");
        $this->load->model("ModelAdmin");
        if($this->session->userdata('status_mhs') != 'login') {
			redirect("loginmhs");
		}
    }

	public function index() 
	{
		$data ['title'] = "Mahasiswa";
		$datamhs['datamhs'] = $this->ModelAdmin->data_mhs_fetch($this->session->userdata('npm'));
		$this->load->view('mahasiswa/dashboard', $datamhs);
	}
}
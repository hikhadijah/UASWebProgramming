<?php


class dashboard extends CI_Controller {

  public function index()
  {
    $title['title'] = 'Dashboard';
    $this->load->view('dashboard');
  }

}
?>
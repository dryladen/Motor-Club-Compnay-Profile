<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Company extends CI_Controller
{
  public function index(){
    $this->load->view('/templates/header');
    $this->load->view('/templates/sidebar');
    $this->load->view('company');
    $this->load->view('/templates/footer');
  }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Company extends CI_Controller
{
  public function index(){
    $data['title'] = 'Profile';
    $data['isActive'] = 'Home';
    $this->load->view('/templates/header',$data);
    $this->load->view('/templates/sidebar',$data);
    $this->load->view('company');
    $this->load->view('/templates/footer');
  }
  public function gallery(){
    $data['title'] = 'Galeri';
    $data['isActive'] = 'Galeri';
    $this->load->view('/templates/header',$data);
    $this->load->view('/templates/sidebar',$data);
    $this->load->view('gallery');
    $this->load->view('/templates/footer');
  }
}

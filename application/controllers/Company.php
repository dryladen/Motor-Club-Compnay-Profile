<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Company extends CI_Controller
{
  public function index()
  {
    $data['title'] = 'Profile';
    $data['isActive'] = 'Home';
    $this->_template($data,'company');
  }
  public function login()
  {
    $data['title'] = 'Login';
    $data['isActive'] = 'Login';
    $this->_template($data,'login');
  }
  public function register()
  {
    $data['title'] = 'Register';
    $data['isActive'] = 'Login';
    $this->_template($data,'register');
  }
  public function produk()
  {
    $data['title'] = 'Produk';
    $data['isActive'] = 'Home';
    $this->_template($data,'produk');
  }
  public function kontak()
  {
    $data['title'] = 'Kontak';
    $data['isActive'] = 'Home';
    $this->_template($data,'kontak');
  }
  public function tentang()
  {
    $data['title'] = 'Tentang Kami';
    $data['isActive'] = 'Home';
    $this->_template($data,'tentang');
  }
  public function visimisi()
  {
    $data['title'] = 'Visi dan Misi';
    $data['isActive'] = 'Home';
    $this->_template($data,'visidanmisi');
  }
  public function galeri()
  {
    $data['title'] = 'Galeri';
    $data['isActive'] = 'Galeri';
    $this->_template($data,'galeri');
  }
  public function artikel()
  {
    $data['title'] = 'Artikel';
    $data['isActive'] = 'Artikel';
    $this->_template($data,'artikel');
  }
  public function klien()
  {
    $data['title'] = 'Klien Kami';
    $data['isActive'] = 'Klien Kami';
    $this->_template($data,'klien');
  }
  private function _template($data,$url){
    $this->load->view('/templates/header', $data);
    $this->load->view('/templates/sidebar', $data);
    $this->load->view('/templates/navbar');
    $this->load->view($url);
    $this->load->view('/templates/endnavbar');
    $this->load->view('/templates/footer');
  }
}

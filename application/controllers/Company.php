<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Company extends CI_Controller
{
  public function index()
  {
    $data['title'] = 'Profile';
    $data['isActive'] = 'Home';
    $this->load->view('/templates/header', $data);
    $this->load->view('/templates/sidebar', $data);
    $this->load->view('/templates/navbar');
    $this->load->view('company');
    $this->load->view('/templates/endnavbar');
    $this->load->view('/templates/footer');
  }
  public function login()
  {
    $data['title'] = 'Login';
    $data['isActive'] = 'Login';
    $this->load->view('/templates/header', $data);
    $this->load->view('/templates/sidebar', $data);
    $this->load->view('/templates/navbar');
    $this->load->view('login');
    $this->load->view('/templates/endnavbar');
    $this->load->view('/templates/footer');
  }
  public function register()
  {
    $data['title'] = 'Login';
    $data['isActive'] = 'Login';
    $this->load->view('/templates/header', $data);
    $this->load->view('/templates/sidebar', $data);
    $this->load->view('/templates/navbar');
    $this->load->view('register');
    $this->load->view('/templates/endnavbar');
    $this->load->view('/templates/footer');
  }
  public function produk()
  {
    $data['title'] = 'Produk';
    $data['isActive'] = 'Home';
    $this->load->view('/templates/header', $data);
    $this->load->view('/templates/sidebar', $data);
    $this->load->view('/templates/navbar');
    $this->load->view('produk');
    $this->load->view('/templates/endnavbar');
    $this->load->view('/templates/footer');
  }
  public function kontak()
  {
    $data['title'] = 'Kontak';
    $data['isActive'] = 'Home';
    $this->load->view('/templates/header', $data);
    $this->load->view('/templates/sidebar', $data);
    $this->load->view('/templates/navbar');
    $this->load->view('kontak');
    $this->load->view('/templates/endnavbar');
    $this->load->view('/templates/footer');
  }
  public function tentang()
  {
    $data['title'] = 'Tentang Kami';
    $data['isActive'] = 'Home';
    $this->load->view('/templates/header', $data);
    $this->load->view('/templates/sidebar', $data);
    $this->load->view('/templates/navbar');
    $this->load->view('tentang');
    $this->load->view('/templates/endnavbar');
    $this->load->view('/templates/footer');
  }
  public function visimisi()
  {
    $data['title'] = 'Visi dan Misi';
    $data['isActive'] = 'Home';
    $this->load->view('/templates/header', $data);
    $this->load->view('/templates/sidebar', $data);
    $this->load->view('/templates/navbar');
    $this->load->view('visidanmisi');
    $this->load->view('/templates/endnavbar');
    $this->load->view('/templates/footer');
  }
  public function galeri()
  {
    $data['title'] = 'Galeri';
    $data['isActive'] = 'Galeri';
    $this->load->view('/templates/header', $data);
    $this->load->view('/templates/sidebar', $data);
    $this->load->view('/templates/navbar');
    $this->load->view('galeri');
    $this->load->view('/templates/endnavbar');
    $this->load->view('/templates/footer');
  }
  public function artikel()
  {
    $data['title'] = 'Artikel';
    $data['isActive'] = 'Artikel';
    $this->load->view('/templates/header', $data);
    $this->load->view('/templates/sidebar', $data);
    $this->load->view('/templates/navbar');
    $this->load->view('artikel');
    $this->load->view('/templates/endnavbar');
    $this->load->view('/templates/footer');
  }
  public function klien()
  {
    $data['title'] = 'Klien Kami';
    $data['isActive'] = 'Klien Kami';
    $this->load->view('/templates/header', $data);
    $this->load->view('/templates/sidebar', $data);
    $this->load->view('/templates/navbar');
    $this->load->view('klien');
    $this->load->view('/templates/endnavbar');
    $this->load->view('/templates/footer');
  }
}

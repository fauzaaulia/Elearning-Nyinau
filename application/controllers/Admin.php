<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model('User_model');
   }

   public function index()
   {
      $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

      $data['users'] = $this->User_model->getDataUser();

      $data['title'] = 'Dashboard';
      $data['dec'] = 'Admin';

      $this->load->view('templates/adm-header', $data);
      $this->load->view('templates/adm-sidebar', $data);
      $this->load->view('admin/dashboard');
      $this->load->view('templates/adm-footer');
   }

   public function guru()
   {
      $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

      $data['title'] = 'Kelas';
      $data['dec'] = 'Admin';

      $this->load->view('templates/adm-header', $data);
      $this->load->view('templates/adm-sidebar', $data);
      $this->load->view('admin/guru');
      $this->load->view('templates/adm-footer');
   }

   public function kelas()
   {
      $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

      $data['title'] = 'Kelas';
      $data['dec'] = 'Admin';

      $this->load->view('templates/adm-header', $data);
      $this->load->view('templates/adm-sidebar', $data);
      $this->load->view('admin/kelas');
      $this->load->view('templates/adm-footer');
   }

   public function murid()
   {
      $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

      $data['title'] = 'Kelas';
      $data['dec'] = 'Admin';

      $this->load->view('templates/adm-header', $data);
      $this->load->view('templates/adm-sidebar', $data);
      $this->load->view('admin/murid');
      $this->load->view('templates/adm-footer');
   }

   public function profil()
   {
      $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

      $data['title'] = 'Kelas';
      $data['dec'] = 'Admin';

      $this->load->view('templates/adm-header', $data);
      $this->load->view('templates/adm-sidebar', $data);
      $this->load->view('admin/profil');
      $this->load->view('templates/adm-footer');
   }
}

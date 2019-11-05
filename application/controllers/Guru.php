<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{

   public function index()
   {
      $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

      $data['title'] = 'Dashboard';
      $data['dec'] = 'Guru';

      $this->load->view('templates/adm-header', $data);
      $this->load->view('templates/gr-sidebar', $data);
      $this->load->view('guru/dashboard');
      $this->load->view('templates/adm-footer');
   }

   public function kelas()
   {
      $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

      $data['title'] = 'Kelas';
      $data['dec'] = 'Guru';

      $this->load->view('templates/adm-header', $data);
      $this->load->view('templates/gr-sidebar', $data);
      $this->load->view('guru/kelas');
      $this->load->view('templates/adm-footer');
   }

   public function profil()
   {
      $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

      $data['title'] = 'Profil';
      $data['dec'] = 'Guru';

      $this->load->view('templates/adm-header', $data);
      $this->load->view('templates/gr-sidebar', $data);
      $this->load->view('guru/profil');
      $this->load->view('templates/adm-footer');
   }

   public function babmateri()
   {
      $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

      $data['title'] = 'BAB MATERI';
      $data['dec'] = 'Guru';

      $this->load->view('templates/adm-header', $data);
      $this->load->view('templates/gr-sidebar', $data);
      $this->load->view('guru/babmateri');
      $this->load->view('templates/adm-footer');
   }

   public function addmateri()
   {
      $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

      $data['title'] = 'MATERI';
      $data['dec'] = 'Guru';

      $this->load->view('templates/adm-header', $data);
      $this->load->view('templates/gr-sidebar', $data);
      $this->load->view('guru/addmateri');
      $this->load->view('templates/adm-footer');
   }

   public function blank()
   {
      $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

      $data['title'] = 'Profil';
      $data['dec'] = 'Guru';

      $this->load->view('templates/adm-header', $data);
      $this->load->view('templates/gr-sidebar', $data);
      $this->load->view('guru/blank');
      $this->load->view('templates/adm-footer');
   }
}

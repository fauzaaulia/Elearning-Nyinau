<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      is_logged_in();
      $this->load->library('form_validation');
      $this->load->model('User_model', 'user');
      $this->load->model('Kelas_model', 'kelas');
      $this->load->model('Materi_model', 'materi');
   }

   public function index()
   {
      $data['user'] = $this->user->getUserByID();
      $data['kelas'] = $this->kelas->getAllKelas();

      $this->load->view('templates/s-header');
      $this->load->view('siswa/dashboard', $data);
      $this->load->view('templates/s-footer');
   }

   public function babmateri($id)
   {
      $data['user'] = $this->user->getUserByID();
      $data['kelas'] = $this->kelas->getKelasByID($id);
      $data['bab'] = $this->materi->getBabByID($id);
      $data['title'] = 'BAB MATERI';

      $this->load->view('templates/s-header');
      $this->load->view('siswa/babmateri', $data);
      $this->load->view('templates/s-footer');
   }

   public function materi($id)
   {
      $data['user'] = $this->user->getUserByID();
      $data['bab'] = $this->materi->getBabByID($id);
      $data['materi'] = $this->materi->getMateriByID($id);
      $data['title'] = 'BAB MATERI';

      $this->load->view('templates/s-header');
      $this->load->view('siswa/isimateri', $data);
      $this->load->view('templates/s-footer');
   }
}

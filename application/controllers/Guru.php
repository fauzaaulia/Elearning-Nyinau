<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      is_logged_in();
      $this->load->library('form_validation');
      $this->load->model('User_model');
      $this->load->model('Kelas_model');
   }

   public function index()
   {
      $this->load->model('User_model', 'user');
      $data['user'] = $this->user->getUserByID();
      $data['totkelas'] = $this->Kelas_model->totKelasByUser();

      $data['title'] = 'Dashboard';

      $this->load->view('templates/adm-header', $data);
      $this->load->view('templates/adm-sidebar', $data);
      $this->load->view('guru/dashboard');
      $this->load->view('templates/adm-footer');
   }

   public function kelas()
   {
      $this->load->model('User_model', 'user');
      $this->load->model('Kelas_model', 'kelas');
      $data['user'] = $this->user->getUserByID();
      $data['kelas'] = $this->kelas->getKelasByUser();

      $data['title'] = 'Kelas';

      $this->load->view('templates/adm-header', $data);
      $this->load->view('templates/adm-sidebar', $data);
      $this->load->view('guru/kelas');
      $this->load->view('templates/adm-footer');
   }

   public function addkelas()
   {
      $this->form_validation->set_rules('nama', 'Nama Kelas', 'required|trim');
      $this->form_validation->set_rules('kategori', 'Kategori', 'required|trim');

      if ($this->form_validation->run() == false) {
         $this->load->model('User_model', 'user');
         $data['user'] = $this->user->getUserByID();

         $data['title'] = 'Add Kelas';

         $this->load->view('templates/adm-header', $data);
         $this->load->view('templates/adm-sidebar', $data);
         $this->load->view('guru/addkelas');
         $this->load->view('templates/adm-footer');
      } else {
         $id = $this->session->userdata('id');
         $data = [
            'user_id' => $id,
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'kategori' => htmlspecialchars($this->input->post('kategori', true)),
            'is_active' => 1,
            'date_create' => time()
         ];

         $this->db->insert('kelas', $data);
         $this->session->set_flashdata('message', '<div class="bs-component"><div class="alert alert-dismissible alert-success"><strong>Well done!</strong> You successfully add Member.</div></div>');
         redirect('guru/kelas');
      }
   }

   public function deletekelas($id)
   {
      $this->db->delete('kelas', ['id' => $id]);
      $this->session->set_flashdata('message', '<div class="bs-component"><div class="alert alert-dismissible alert-success"><strong>Well done!</strong> You successfully delete Kelas.</div></div>');
      redirect('guru/kelas');
   }

   public function profil()
   {
      $this->load->model('User_model', 'user');
      $data['user'] = $this->user->getUserByID();

      $data['title'] = 'Profil';

      $this->load->view('templates/adm-header', $data);
      $this->load->view('templates/adm-sidebar', $data);
      $this->load->view('guru/profil');
      $this->load->view('templates/adm-footer');
   }

   public function babmateri()
   {
      $this->load->model('User_model', 'user');
      $data['user'] = $this->user->getUserByID();

      $data['title'] = 'BAB MATERI';

      $this->load->view('templates/adm-header', $data);
      $this->load->view('templates/adm-sidebar', $data);
      $this->load->view('guru/babmateri');
      $this->load->view('templates/adm-footer');
   }

   public function addmateri()
   {
      $this->load->model('User_model', 'user');
      $data['user'] = $this->user->getUserByID();

      $data['title'] = 'MATERI';

      $this->load->view('templates/adm-header', $data);
      $this->load->view('templates/adm-sidebar', $data);
      $this->load->view('guru/addmateri');
      $this->load->view('templates/adm-footer');
   }

   public function blank()
   {
      $this->load->model('User_model', 'user');
      $data['user'] = $this->user->getUserByID();

      $data['title'] = 'Profil';

      $this->load->view('templates/adm-header', $data);
      $this->load->view('templates/adm-sidebar', $data);
      $this->load->view('guru/blank');
      $this->load->view('templates/adm-footer');
   }
}

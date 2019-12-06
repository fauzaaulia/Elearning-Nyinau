<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      is_logged_in();
      $this->load->model('User_model');
   }

   public function index()
   {
      $this->load->model('User_model', 'user');
      $data['user'] = $this->user->getUserByID();
      $data['users'] = $this->User_model->getDataUser();
      $data['totguru'] = $this->User_model->getTotalGuru();
      $data['totmurid'] = $this->User_model->getTotalMurid();

      $data['title'] = 'Dashboard';

      $this->load->view('templates/adm-header', $data);
      $this->load->view('templates/adm-sidebar', $data);
      $this->load->view('admin/dashboard');
      $this->load->view('templates/adm-footer');
   }

   public function listguru()
   {
      $this->load->model('User_model', 'user');
      $data['user'] = $this->user->getUserByID();
      $data['userguru'] = $this->user->getUserGuru();

      $data['title'] = 'Guru';

      $this->load->view('templates/adm-header', $data);
      $this->load->view('templates/adm-sidebar', $data);
      $this->load->view('admin/guru');
      $this->load->view('templates/adm-footer');
   }

   public function listkelas()
   {
      $this->load->model('User_model', 'user');
      $this->load->model('Kelas_model', 'kelas');
      $data['user'] = $this->user->getUserByID();
      $data['kelas'] = $this->kelas->getAllKelas();

      $data['title'] = 'Kelas';

      $this->load->view('templates/adm-header', $data);
      $this->load->view('templates/adm-sidebar', $data);
      $this->load->view('admin/kelas');
      $this->load->view('templates/adm-footer');
   }

   public function deletekelas($id)
   {
      $this->db->delete('kelas', ['id' => $id]);
      $this->session->set_flashdata('message', '<div class="bs-component"><div class="alert alert-dismissible alert-success"><strong>Well done!</strong> You successfully delete Kelas.</div></div>');
      redirect('guru/kelas');
   }

   public function listmurid()
   {
      $this->load->model('User_model', 'user');
      $data['user'] = $this->user->getUserByID();
      $data['usermurid'] = $this->user->getUserMurid();

      $data['title'] = 'Murid';

      $this->load->view('templates/adm-header', $data);
      $this->load->view('templates/adm-sidebar', $data);
      $this->load->view('admin/murid');
      $this->load->view('templates/adm-footer');
   }
}

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
      $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
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
            'deskripsi' => htmlspecialchars($this->input->post('deskripsi', true)),
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

   public function babmateri($id)
   {
      $this->load->model('User_model', 'user');
      $this->load->model('Materi_model', 'materi');
      $data['user'] = $this->user->getUserByID();
      $data['bab'] = $this->materi->getBabByID($id);

      $data['title'] = 'BAB MATERI';

      $this->load->view('templates/adm-header', $data);
      $this->load->view('templates/adm-sidebar', $data);
      $this->load->view('guru/babmateri');
      $this->load->view('templates/adm-footer');
   }

   public function addmateri($id)
   {
      $this->form_validation->set_rules('judul', 'Judul Materi', 'required|trim');
      $this->form_validation->set_rules('editor1', 'Isi Materi', 'required|trim');

      if ($this->form_validation->run() == false) {
         $this->load->model('User_model', 'user');
         $data['user'] = $this->user->getUserByID();
         $data['title'] = 'MATERI';

         $this->load->view('templates/adm-header', $data);
         $this->load->view('templates/adm-sidebar', $data);
         $this->load->view('guru/addmateri');
         $this->load->view('templates/adm-footer');
      } else {
         $data = [
            'kelas_id' => htmlspecialchars($this->input->post('kelas_id', true)),
            'judul' => htmlspecialchars($this->input->post('judul', true)),
            'link_video' => $this->input->post('video', true),
            'cover' => htmlspecialchars($this->input->post('cover', true)),
            'isi_materi' => $this->input->post('editor1'),
            'is_active' => 1,
            'date_create' => time()
         ];

         $id = $this->input->post('kelas_id');
         $this->db->insert('materi_kelas', $data);
         $this->session->set_flashdata('message', '<div class="bs-component"><div class="alert alert-dismissible alert-success"><strong>Well done!</strong> Berhasil menambahkan materi.</div></div>');
         redirect('guru/babmateri/' . $id);
      }
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

   public function deletemateri($id, $id2)
   {
      $this->db->delete('materi_kelas', ['id' => $id2]);
      $this->session->set_flashdata('message', '<div class="bs-component"><div class="alert alert-dismissible alert-success"><strong>Well done!</strong> You successfully delete Materi.</div></div>');
      redirect('guru/babmateri/' . $id);
   }
}

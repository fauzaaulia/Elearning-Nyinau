<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

   public function __construct()
   {
      parent::__construct();
      $this->load->library('form_validation');
   }

   public function index()
   {
      $this->form_validation->set_rules('username', 'Username', 'required|trim');
      $this->form_validation->set_rules('password', 'Password', 'required|trim');

      if ($this->form_validation->run() == false) {
         $this->load->view('templates/auth-header');
         $this->load->view('auth/login');
         $this->load->view('templates/auth-footer');
      } else {
         //validasi sukses
         $this->_login();
      }
   }

   private function _login()
   {
      $username = $this->input->post('username');
      $password = $this->input->post('password');

      $user = $this->db->get_where('user', ['username' => $username])->row_array();
      //jika user ada
      if ($user) {
         //jika user aktif
         if ($user['is_active'] == 1) {
            //cek password
            if (password_verify($password, $user['password'])) {
               //password benar
               $data = [
                  'username' => $user['username'],
                  'role_id' => $user['role_id'],
                  'id' => $user['id'],
               ];
               $this->session->set_userdata($data);
               if ($user['role_id'] == 1) {
                  redirect('admin');
               } elseif ($user['role_id'] == 2) {
                  redirect('guru');
               } else {
                  redirect('siswa');
               }
            } else {
               //password tidak sama
               $this->session->set_flashdata('message', '<div class="bs-component"><div class="alert alert-dismissible alert-danger">Wrong password!</div></div>');
               redirect('page');
            }
         } else {
            //tidak aktif
            $this->session->set_flashdata('message', '<div class="bs-component"><div class="alert alert-dismissible alert-danger">Username has not ben activated!</div></div>');
            redirect('page');
         }
      } else {
         //tidak ada
         $this->session->set_flashdata('message', '<div class="bs-component"><div class="alert alert-dismissible alert-danger">Username is not registered!</div></div>');
         redirect('page');
      }
   }

   public function register()
   {
      $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
      $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]', [
         'is_unique' => 'username sudah digunakan'
      ]);
      $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
         'is_unique' => 'email sudah digunakan'
      ]);
      $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]');
      $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

      if ($this->form_validation->run() == false) {
         $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

         $this->load->view('templates/auth-header');
         $this->load->view('auth/register');
         $this->load->view('templates/auth-footer');
      } else {
         $data = [
            'name' => htmlspecialchars($this->input->post('nama', true)),
            'username' => htmlspecialchars($this->input->post('username', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'role_id' => htmlspecialchars($this->input->post('role', true)),
            'images' => 'default.JPG',
            'is_active' => 1,
            'date_created' => time()
         ];

         $this->db->insert('user', $data);
         $this->session->set_flashdata('message', '<div class="bs-component"><div class="alert alert-dismissible alert-success"><strong>Well done!</strong> You successfully Registered.</div></div>');
         redirect('auth');
      }
   }

   public function logout()
   {
      $this->session->unset_userdata('username');
      $this->session->unset_userdata('role_id');
      $this->session->unset_userdata('id');

      $this->session->set_flashdata('message', '<div class="bs-component"><div class="alert alert-dismissible alert-success">You have been Logout!</div></div>');
      redirect('page');
   }

   public function blocked()
   {
      $this->load->model('User_model', 'user');
      $data['user'] = $this->user->getUserByID();

      $data['title'] = 'Blocked';
      $data['dec'] = 'xxx';

      $this->load->view('templates/adm-header', $data);
      $this->load->view('templates/adm-sidebar', $data);
      $this->load->view('auth/blocked', $data);
      $this->load->view('templates/adm-footer');
   }
}

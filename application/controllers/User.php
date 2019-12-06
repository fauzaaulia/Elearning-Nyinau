<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      is_logged_in();
      $this->load->model('User_model', 'user');
   }

   public function index()
   {
      $this->load->model('User_model', 'user');
      $data['user'] = $this->user->getUserByID();

      $data['title'] = 'Profil';

      $this->load->view('templates/adm-header', $data);
      $this->load->view('templates/adm-sidebar', $data);
      $this->load->view('user/profil');
      $this->load->view('templates/adm-footer');
   }
}

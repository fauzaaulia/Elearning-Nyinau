<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{

   public function index()
   {
      $data['siswa'] = 'Ahmad Fauza';

      $this->load->view('templates/s-header');
      $this->load->view('siswa/dashboard', $data);
      $this->load->view('templates/s-footer');
   }
}

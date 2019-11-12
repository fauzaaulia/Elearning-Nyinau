<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas_model extends CI_Model
{
   public function getAllKelas()
   {
      return $this->db->get('kelas')->result_array();
   }

   public function getKelasByUser()
   {
      $id = $this->session->userdata('id');
      $query = "SELECT *
               FROM kelas
               WHERE user_id = '$id'
               ";
      return $this->db->query($query)->result_array();
   }

   public function totKelasByUser()
   {
      $id = $this->session->userdata('id');
      $query = "SELECT count(*) AS total
                  FROM kelas
                  WHERE user_id = '$id'
                  ";
      return $this->db->query($query)->result_array();
   }
}

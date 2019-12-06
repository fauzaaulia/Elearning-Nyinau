<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Materi_model extends CI_Model
{
   public function getAllMateri()
   {
      return $this->db->get('materi_kelas')->result_array();
   }

   public function getBabByID($id)
   {
      $query = "SELECT *
               FROM materi_kelas
               WHERE kelas_id = '$id'
               ";
      return $this->db->query($query)->result_array();
   }

   public function getMateriByID($id)
   {
      $query = "SELECT *
               FROM materi_kelas
               WHERE id = '$id'
               ";
      return $this->db->query($query)->row_array();
   }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Materi_model extends CI_Model
{
   public function getBabByID($id)
   {
      $query = "SELECT *
               FROM materi_kelas
               WHERE kelas_id = '$id'
               ";
      return $this->db->query($query)->result_array();
   }
}

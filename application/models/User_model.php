<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
   public function getDataUser()
   {
      $this->db->select('*');
      $this->db->from('user');
      $this->db->join('user_role', 'user.role_id = user_role.id');
      $this->db->where('username', $this->session->userdata('username'));
      $query = $this->db->get()->result_array();
      //$query = $this->db->get_where('events', ['events.id' => $this->session->userdata('id')]);

      return $query;

      // Produces:
      // SELECT * FROM blogs JOIN comments ON comments.id = blogs.id
   }
}

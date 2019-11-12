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

   public function getUserByID()
   {
      $username = $this->session->userdata('username');
      $query = "SELECT *
               FROM user
               JOIN user_role
               ON user.role_id = user_role.id
               WHERE user.username = '$username'
               ";
      return $this->db->query($query)->row_array();
   }

   public function getUserGuru()
   {
      $query = "SELECT *
               FROM user
               JOIN user_role
               ON user.role_id = user_role.id
               WHERE user_role.id = 2
               ";
      return $this->db->query($query)->result_array();
   }

   public function getTotalGuru()
   {
      $query = "SELECT count(*) AS total
                  FROM user
                  WHERE role_id = 2 ";
      return $this->db->query($query)->result_array();
   }

   public function getUserMurid()
   {
      $query = "SELECT *
               FROM user
               JOIN user_role
               ON user.role_id = user_role.id
               WHERE user_role.id = 3
               ";
      return $this->db->query($query)->result_array();
   }

   public function getTotalMurid()
   {
      $query = "SELECT count(*) AS total
                  FROM user
                  WHERE role_id = 3 ";
      return $this->db->query($query)->result_array();
   }
}

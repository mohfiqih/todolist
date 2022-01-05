<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_todo extends CI_Model
{
    public function get_todo() 
    {
     $this->db->select('*');
     $this->db->from('todo');
     $this->db->join('user', 'user.user_id = todo.id_user');
     $query = $this->db->get()->result();
     return $query;
    }

    public function get_relasi()
    {
        # code...
    }
}
?>
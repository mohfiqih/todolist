<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_todo extends CI_Model
{
    public function get_todo($id_todo = null) 
    {
     $this->db->select('*');
     $this->db->from('todo');
     $this->db->join('user', 'user.user_id = todo.id_user');
    //  if($id_todo) $this->db->where('todo.id',$id_todo);
     $query = $this->db->get()->result();
     return $query;
    }

    public function get_relasi()
    {
        # code...
    }
}
?>
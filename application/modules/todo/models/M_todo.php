<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_todo extends CI_Model
{
    public function get_todo($id_todo = null) 
    {
     $this->db->select('todo.id as id_todo, todo.id_user, todo.task, todo.mulai, todo.selesai, todo.date_created, todo.date_updated, todo.level, todo.status, todo.checked');
     $this->db->from('todo');
     $this->db->join('user', 'user.user_id = todo.id_user');
     if($id_todo) $this->db->where('todo.id',$id_todo);
     $query = $this->db->get()->result();
     return $query;
    }
}
?>
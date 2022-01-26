<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_dasbor extends CI_Model
{
     function total_user()
     {
         return $this->db->get('user')->num_rows();
     }

     public function get_todo($namalengkap, $level) 
    {
        // $limit, $start
        if ($level) {
            $this->db->select('*');
            $this->db->from('todo');
            $this->db->join('user', 'user.user_id = todo.id_user','user.user_namalengkap');
            // $this->db->where('user.user_namalengkap', $namalengkap);
            $this->db->order_by('id', 'asc');
            $query = $this->db->get()->result();
            return $query;
        } else {
            $this->db->select('*');
            $this->db->from('todo');
            $this->db->join('user', 'user.user_id = todo.id_user');
            $this->db->where('user.user_namalengkap', $namalengkap);
            $query = $this->db->get()->result();
            return $query;
        }
    
    }
}
?>
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

    public function getMulti($where, $tabel)
    {
        if (!empty($where)) {
            $this->db->where($where);
        }
        $data = $this->db->get($tabel)->result();
        return $data;
    }

    public function getOne($where, $tabel)
    {
        // if (!empty($where)) {
        //     $this->db->where($where);
        // }

        // $this->db->where($where);
        // $data = $this->db->get($tabel)->row();
        // return (count((array)$data) > 0) ? $data : false;

        $this->db->where($where);
        $data = $this->db->get($tabel);
        // return $data->row();
        echo $data->row();

        // $this->db->where('id_alat', $id_alat);
        // $query = $this->db->get('tabel_alat');
        // return $query->row();
    }

    
}
?>
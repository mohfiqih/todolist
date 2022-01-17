<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_todo extends CI_Model
{
    public function get_todo($namalengkap, $level, $limit, $start) 
    {
        if ($level) {
            $this->db->select('*');
            $this->db->from('todo');
            $this->db->join('user', 'user.user_id = todo.id_user','user.user_namalengkap');
            // $this->db->where('user.user_namalengkap', $namalengkap);
            $query = $this->db->get('',$limit,$start)->result();
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

    public function countDataTodo()
    {
        return $this->db->get('todo')->num_rows();
        
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

    public function ambil_data($keyword=null){
		$this->db->select('*');
		$this->db->from('user');
		if(!empty($keyword)){
               $this->db->like('user_namalengkap',$keyword);
			// $this->db->or_like('nama_apl',$keyword);
               // $this->db->or_like('versi_apl',$keyword);
               // $this->db->or_like('tgl_publish',$keyword);
               // $this->db->or_like('penyedia_apl',$keyword);
		}
		return $this->db->get()->result_array();
	}

    function total_todo()
     {
         return $this->db->get('todo')->num_rows();
     }
}
?>
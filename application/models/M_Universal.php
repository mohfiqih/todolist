<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_universal extends CI_Model
{
    public function getOne($where, $tabel)
    {
        if (!empty($where)) {
            $this->db->where($where);
        }

        $data = $this->db->get($tabel)->row();
        return (count((array)$data) > 0) ? $data : false;
    }

    public function getOneSelect($select, $where, $table)
    {
        $this->db->select($select);
        if (!empty($where)) {
            $this->db->where($where);
        }
        $data = $this->db->get($table)->row();
        return (count((array)$data) > 0) ? $data : false;
    }

    public function getMulti($where, $tabel)
    {
        if (!empty($where)) {
            $this->db->where($where);
        }
        $data = $this->db->get($tabel)->result();
        return (count((array)$data) > 0) ? $data : false;
    }

    public function getDashboard($where, $tabel)
    {
        if (!empty($where)) {
            $this->db->where('add_by',$where);
        }
        $data = $this->db->get($tabel)->result();
        return (count((array)$data) > 0) ? $data : false;
    }



    public function update($data, $where, $tabel)
    {
        $this->db->where($where);
        $update = $this->db->update($tabel, $data);
        return ($update) ? true : false;
    }

    public function insert($data, $tabel)
    { 
        return ($this->db->insert($tabel, $data)) ? true : false;
    }

    public function delete($where, $tabel)
    {
        return ($this->db->where($where)->delete($tabel)) ? true : false;
    }
	
    public function getOrderBy($where, $tabel, $order, $urutan, $limit)
    {
        if (!empty($where)) {
            $this->db->where($where);
        }
        if (!empty($urutan)) {
            $this->db->order_by($order, $urutan);
        }
        $this->db->order_by($order);
        if (!empty($limit)) {
            $this->db->limit($limit);
        }

        $data = $this->db->get($tabel)->result();
        return (count((array)$data) > 0) ? $data : false;
    }
	
    public function insert_batch($data, $tabel)
    {
        return ($this->db->insert_batch($tabel, $data)) ? true : false;
    }

    function total_user()
    {
        return $this->db->get('user')->num_rows();
    }

    function total_todo($namalengkap,$tabel)
    {
        
        $this->db->select('*');
        $this->db->from($tabel);
        $this->db->join('user', 'user.user_id = todo.id_user','user.user_namalengkap');
        if (!empty($namalengkap)) {
            $this->db->where('user.user_namalengkap',$namalengkap);
        }
        $data = $this->db->get()->result();
        return count((array)$data);
    }

    public function total_acc($acc,$level,$namalengkap)
    {

        if ($level == "Staf" or $level == "Magang") {

            $query = $this->db->query("SELECT COUNT(id) as count_id
                               FROM todo join user on user.user_id = todo.id_user
                               WHERE user.user_namalengkap = '$namalengkap' and checked = '$acc'");
            return $query->row();
        }else{
            $query = $this->db->query("SELECT COUNT(id) as count_id
                               FROM todo join user on user.user_id = todo.id_user
                               WHERE checked = '$acc'");
            return $query->row();
        }
    }

    public function total_tolak($tolak,$level,$namalengkap)
    {

        if ($level == "Staf" or $level == "Magang") {
        
            $query = $this->db->query("SELECT COUNT(id) as count_id
                               FROM todo join user on user.user_id = todo.id_user
                               WHERE user.user_namalengkap = '$namalengkap' and checked = '$tolak'");
            return $query->row();

        }else{
            $query = $this->db->query("SELECT COUNT(id) as count_id
                               FROM todo join user on user.user_id = todo.id_user
                               WHERE checked = '$tolak'");
            return $query->row();
        }
    }
}
?>
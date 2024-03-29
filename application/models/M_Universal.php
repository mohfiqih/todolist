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
            $this->db->where("user_nama",$where);
        }
        $data = $this->db->get($tabel)->result(); 
        return (count((array)$data) > 0) ? $data : false;
    }

    public function getUnit($where, $tabel)
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

        // $this->db->select('*');
        // $this->db->from($tabel);
        $this->db->join('hd_unit', 'hd_unit.unit_id = user.unit_id', 'left');
        // $query = $this->db->get();
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

    function total_todo($level,$username)
    {
        
        if($level == "Super Admin"){
            $query = $this->db->query("SELECT COUNT(id) as count_id
                               FROM todo join user on user.user_id = todo.id_user
                               ");
            return $query->row();
        }
        else if($level == "Staf" or $level == "Magang"){
            $query = $this->db->query("SELECT COUNT(id) as count_id
                               FROM todo join user on user.user_id = todo.id_user
                               WHERE user.user_nama = '$username' ");
            return $query->row();
        }
        else if($level == "Sub Bag"){
            $query = $this->db->query("SELECT COUNT(id) as count_id
                               FROM todo join user on user.user_id = todo.id_user
                               WHERE user.user_nama = '$username' or user.add_by = '$username'");
            return $query->row();
        }
        else{
            $query = $this->db->query("SELECT COUNT(id) as count_id
                               FROM todo join user on user.user_id = todo.id_user
                               WHERE user.unit_id = '$username'");
            return $query->row();
        }

        
    }

    public function total_acc($acc,$level,$username)
    {

        if ($level == "Staf" or $level == "Magang") {

            $query = $this->db->query("SELECT COUNT(id) as count_id
                               FROM todo join user on user.user_id = todo.id_user
                               WHERE user.user_nama = '$username' and checked = '$acc'");
            return $query->row();
        }
        if ($level == "Sub Bag"){
            $query = $this->db->query("SELECT COUNT(id) as count_id
                               FROM todo join user on user.user_id = todo.id_user
                               WHERE (user.user_nama = '$username' or user.add_by = '$username') and checked = '$acc' ");
            return $query->row();
        }
        else{
            $query = $this->db->query("SELECT COUNT(id) as count_id
                               FROM todo join user on user.user_id = todo.id_user
                               WHERE checked = '$acc'");
            return $query->row();
        }
    }

    public function total_pending($pending,$level,$username)
    {

        if ($level == "Staf" or $level == "Magang") {
        
            $query = $this->db->query("SELECT COUNT(id) as count_id
                               FROM todo join user on user.user_id = todo.id_user
                               WHERE user.user_nama = '$username' and checked = '$pending'");
            return $query->row();

        }
        if ($level == "Sub Bag"){
            $query = $this->db->query("SELECT COUNT(id) as count_id
                               FROM todo join user on user.user_id = todo.id_user
                               WHERE (user.user_nama = '$username' or user.add_by = '$username') and checked = '$pending' ");
            return $query->row();
        }
        else{
            $query = $this->db->query("SELECT COUNT(id) as count_id
                               FROM todo join user on user.user_id = todo.id_user
                               WHERE checked = '$pending'");
            return $query->row();
        }
    }

    public function total_belum($belum,$level,$username)
    {
        if ($level == "Staf" or $level == "Magang") {
        
            $query = $this->db->query("SELECT COUNT(id) as count_id
                               FROM todo join user on user.user_id = todo.id_user
                               WHERE user.user_nama = '$username' and checked = '$belum'");
            return $query->row();

        }
        if ($level == "Sub Bag"){
            $query = $this->db->query("SELECT COUNT(id) as count_id
                               FROM todo join user on user.user_id = todo.id_user
                               WHERE (user.user_nama = '$username' or user.add_by = '$username') and checked = '$belum' ");
            return $query->row();
        }
        else{
            $query = $this->db->query("SELECT COUNT(id) as count_id
                               FROM todo join user on user.user_id = todo.id_user
                               WHERE checked = '$belum'");
            return $query->row();
        }
    }

    public function infoUnit($where,$unit)
    {
        if (!empty($where)) {
            $query = $this->db->query("SELECT COUNT(id) as count_id
                               FROM todo join user on user.user_id = todo.id_user
                               WHERE checked = '$where' and user.unit_id = '$unit'");
            return $query->row();
        }
        else{
            $query = $this->db->query("SELECT COUNT(id) as count_id
                               FROM todo join user on user.user_id = todo.id_user
                               WHERE user.unit_id = '$unit'");
            return $query->row();            
        }
    }

}
?>
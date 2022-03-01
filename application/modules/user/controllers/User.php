<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {
	
    public function __construct()
    {
        parent::__construct();
		
		$this->cek_login();
		$this->load->library('upload');
    }
	
	private function meta()
	{
        $data = array(
			"judul"			=> "User",
			"keterangan"	=> "Manajemen Pengguna",
			"halaman"		=> "user",
			"breadcrumb"	=> "Master Data|User",
			"view"			=> "user",
			"data_user"		=> $this->M_Universal->getDashboard($this->user_nama, "user"),
			"data_unit"		=> $this->M_Universal->getMulti("", "hd_unit"),
		);
		
		return $data;
		
	}
	
	public function index()
	{
		$this->load->view('template', $this->meta());
	}
	
	public function edit()
	{
		$data			= $this->meta();
		$data["edit"]	     = $this->M_Universal->getOne(["user_id" => dekrip(uri(3))], "user");
		
		$this->load->view('template', $data);
	}

	public function tambah()
	{
		// $nama = $this->user_nama;

		if($this->user_level == "Ka. Bag" or $this->user_level == "Sub Bag"){
			$data = array(
				//"user_id"			=> date("ymdHis"),
				"user_nama"			=> $this->input->post("user_nama"),
				"user_password"		=> password_hash($this->input->post("user_password"), PASSWORD_BCRYPT),
				"user_namalengkap"	=> $this->input->post("user_namalengkap"),
				"user_level"		=> $this->input->post("user_level"),
				"add_by"			=> $this->user_nama,
				"unit_id"			=> $this->unit_id
				);
					
			$tambah = $this->M_Universal->insert($data, "user");
			$tambah_join = $this->M_Universal->insert($data, "hd_unit");
					
			if ($tambah && $tambah_join){
				notifikasi_redirect("success", "Tambah user berhasil", uri(1));
			} else {
				notifikasi_redirect("error", "Tambah user gagal", uri(1));
			}
		}else{

			$data = array(
				//"user_id"			=> date("ymdHis"),
				"user_nama"			=> $this->input->post("user_nama"),
				"user_password"		=> password_hash($this->input->post("user_password"), PASSWORD_BCRYPT),
				"user_namalengkap"	=> $this->input->post("user_namalengkap"),
				"user_level"		=> $this->input->post("user_level"),
				"add_by"			=> $this->user_nama,
				"unit_id"			=> $this->input->post(dekrip("unit_id"))
				);
					
			$tambah = $this->M_Universal->insert($data, "user");
					
			if ($tambah){
				notifikasi_redirect("success", "Tambah user berhasil", uri(1));
			} else {
				notifikasi_redirect("error", "Tambah user gagal", uri(1));
			}
		}
		
	}
	
	public function update()
	{
		$user_id		= dekrip($this->input->post("user_id"));
		$unit_id        = dekrip($this->input->post("unit_id"));
		$user_password	= $this->input->post("user_password");

		if($this->user_level == "Ka. Bag" or $this->user_level == "Sub Bag"){
			$cek			= $this->M_Universal->getOneSelect("user_password", ["user_id" => $user_id], "user");
			$data			= array(
				"user_nama"			=> $this->input->post("user_nama"),
				"user_password"		=> $user_password != $cek->user_password ? password_hash($user_password, PASSWORD_BCRYPT) : $user_password,
				"user_namalengkap"	=> $this->input->post("user_namalengkap"),
				"user_level"		=> $this->input->post("user_level"),
			);
		
			$update = $this->M_Universal->update($data, ["user_id" => $user_id], "user");
			
			if ($update){
				notifikasi_redirect("success", "Update user berhasil", uri(1));
			} else {
				notifikasi_redirect("error", "Update user gagal", uri(1));
			}
		}else{
			$cek			= $this->M_Universal->getOneSelect("user_password", ["user_id" => $user_id], "user");
			$data			= array(
				"user_nama"			=> $this->input->post("user_nama"),
				"user_password"		=> $user_password != $cek->user_password ? password_hash($user_password, PASSWORD_BCRYPT) : $user_password,
				"user_namalengkap"	=> $this->input->post("user_namalengkap"),
				"user_level"		=> $this->input->post("user_level"),
				"unit_id"			=> $this->input->post($unit_id)
			);
			
			$update = $this->M_Universal->update($data, ["user_id" => $user_id], "user");
			$update = $this->M_Universal->update($data, ["user_id" => $user_id], "hd_unit");
			
			if ($update){
				notifikasi_redirect("success", "Update user berhasil", uri(1));
			} else {
				notifikasi_redirect("error", "Update user gagal", uri(1));
			}
		}
	}
	
	public function hapus()
	{
		$hapus = $this->M_Universal->delete(["user_id" => dekrip(uri(3))], "user");
		
		if ($hapus){
			notifikasi_redirect("success", "Hapus user berhasil", uri(1));
		} else {
			notifikasi_redirect("error", "Hapus user gagal", uri(1));
		}
	}
	
}
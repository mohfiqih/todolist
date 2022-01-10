<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {
	
    public function __construct()
    {
        parent::__construct();
		
		$this->cek_login();
    }
	
	private function meta()
	{
        $data = array(
			"judul"			=> "User",
			"keterangan"	=> "Manajemen Pengguna",
			"halaman"		=> "user",
			"breadcrumb"	=> "Master Data|User",
			"view"			=> "user",
			"data_user"		=> $this->M_Universal->getMulti(NULL, "user"),
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
		$data = array(
			//"user_id"			=> date("ymdHis"),
			"user_nama"			=> $this->input->post("user_nama"),
			"user_password"		=> password_hash($this->input->post("user_password"), PASSWORD_BCRYPT),
			"user_namalengkap"	=> $this->input->post("user_namalengkap"),
			"user_level"		=> $this->input->post("user_level")
		);
		
		$tambah = $this->M_Universal->insert($data, "user");
		
		if ($tambah){
			notifikasi_redirect("success", "Tambah user berhasil", uri(1));
		} else {
			notifikasi_redirect("error", "Tambah user gagal", uri(1));
		}
	}
	
	public function update()
	{
		$user_id		= dekrip($this->input->post("user_id"));
		$user_password	= $this->input->post("user_password");
		$cek			= $this->M_Universal->getOneSelect("user_password", ["user_id" => $user_id], "user");
		$data			= array(
			"user_nama"			=> $this->input->post("user_nama"),
			"user_password"		=> $user_password != $cek->user_password ? password_hash($user_password, PASSWORD_BCRYPT) : $user_password,
			"user_namalengkap"	=> $this->input->post("user_namalengkap"),
			"user_level"		=> $this->input->post("user_level")
		);
		
		$update = $this->M_Universal->update($data, ["user_id" => $user_id], "user");
		
		if ($update){
			notifikasi_redirect("success", "Update user berhasil", uri(1));
		} else {
			notifikasi_redirect("error", "Update user gagal", uri(1));
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
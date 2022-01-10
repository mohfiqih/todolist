<?php

use phpDocumentor\Reflection\Types\Null_;

defined('BASEPATH') OR exit('No direct script access allowed');

class Todo extends MY_Controller {

    public function __construct()
    {
        // Load the constructer from MY_Controller
        parent::__construct();
	   $this->cek_login();
	   $this->load->model('M_todo','todo');
    }

    private function meta()
	{
		if ($this->user_level == "Ka. Bag" or $this->user_level == "Sub Bag") {
			$level = $this->user_level;
			// $namalengkap = $this->user_namalengkap;
        	$data = array(
			"judul"			=> "Data Pekerjaan",
			"keterangan"	=> "Manajemen Pengguna",
			"halaman"		=> "data_kerjaan",
			"breadcrumb"	=> "Master Data|User",
			"view"			=> "todolist",
			// "nama" 			=> $this->user_namalengkap, ->hasil Wirayuda
			"data_todo"		=> $this->todo->get_todo(NULL, $level),
			);
		
			return $data;
		} else {
			// $level = $this->user_level;
			$namalengkap = $this->user_namalengkap;
        	$data = array(
			"judul"			=> "Data Pekerjaan",
			"keterangan"	=> "Manajemen Pengguna",
			"halaman"		=> "data_kerjaan",
			"breadcrumb"	=> "Master Data|User",
			"view"			=> "todolist",
			// "nama" 			=> $this->user_namalengkap, ->hasil Wirayuda
			"data_todo"		=> $this->todo->get_todo($namalengkap,NULL),
			);
		
			return $data;
		}
		
	}

	public function index()
	{
        $this->load->view('template', $this->meta());
	}
	
	public function add()
	{
        $data = array(
			"judul"		=> "Halaman To-Do-List",
			"keterangan"	=> "Contoh Keterangan",
			"halaman"		=> "tambah_list",
			"view"		=> "tambah_list",
			"data_user"	=> $this->M_Universal->getMulti('', "user"),
		);
					
		$this->load->view('template', $data);
	}

	public function cek()
	{
        $data = array(
			"judul"			=> "Halaman Check",
			"keterangan"	=> "Contoh Keterangan",
			"halaman"		=> "check",
			"view"			=> "check",
			"data_check"	=> $this->M_Universal->getMulti(["id" => dekrip(uri(3))], "todo"),
			"data_user"		=> $this->M_Universal->getMulti('', "user")
		);
					
		$this->load->view('template', $data);
	}

	public function checked()
	{
		$id	= dekrip($this->input->post("id"));
		$data	= array(
			"id_user"			=> dekrip($this->input->post("id_user")),
			"checked"			=> $this->input->post("ceked"),
		);
		
		$tambah = $this->M_Universal->update($data, ["id" => $id], "todo");
		
		if ($tambah){
			notifikasi_redirect("success", "Data berhasil ditambahkan", uri(1));
		} else {
			notifikasi_redirect("error", "Gagal menambah data", uri(1));
		}
	}
	
	public function tambah()
	{
		$data = array(
			//"user_id"			=> date("ymdHis"),
			"id_user"		=> dekrip($this->input->post("id_user")),
			"task"			=> $this->input->post("pekerjaan"),
			"date_created"	=> $this->input->post("tanggal"),
			"mulai"	   		=> $this->input->post("jam_mulai"),
			"selesai"		=> $this->input->post("jam_selesai"),
			"level"			=> $this->input->post("user_level"),
			"status"		=> $this->input->post("progres"),
			"ceked"		    	=> $this->input->post("ceked"),
		);

		$tambah = $this->M_Universal->insert($data, "todo");
		
		if ($tambah){
			notifikasi_redirect("success", "Data berhasil ditambahkan", uri(1));
		} else {
			notifikasi_redirect("error", "Gagal menambah data", uri(1));
		}
	}

	public function edit() 
	{
		$data = array(
			"judul"		=> "Halaman Edit",
			"halaman"	     => "edit_list",
			"view"		=> "edit_list",
			"data_edit"	=> $this->M_Universal->getMulti(["id" => dekrip(uri(3))], "todo"),
			"data_user"	=> $this->M_Universal->getMulti('', "user")
			// "data_user"	=> $this->M_Universal->getMulti(["id" => (uri(3))], "user"),
		);
		$this->load->view('template', $data);
	}

	public function update()
	{
		$id	= dekrip($this->input->post("id"));
		$data	= array(
			"id_user"		=> dekrip($this->input->post("id_user")),
			"task"			=> $this->input->post("pekerjaan"),
			"date_created"	=> $this->input->post("tanggal"),
			"mulai"	   		=> $this->input->post("jam_mulai"),
			"selesai"		=> $this->input->post("jam_selesai"),
			"level"			=> $this->input->post("user_level"),
			"status"		=> $this->input->post("progres"),
			
		);
		
		$update = $this->M_Universal->update($data, ["id" => $id], "todo");
		
		if ($update){
			notifikasi_redirect("success", "Update data berhasil", redirect(base_url('todo')));
		} else {
			notifikasi_redirect("error", "Update data gagal", uri(1));
		}
	}

	public function hapus()
	{
		$hapus = $this->M_Universal->delete(["id" => dekrip(uri(3))], "todo");
		
		if ($hapus){
			notifikasi_redirect("success", "Hapus data berhasil", redirect(base_url('todo')));
		} else {
			notifikasi_redirect("error", "Hapus data gagal", uri(1));
		}
	}
}
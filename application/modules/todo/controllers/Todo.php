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
		$level = $this->user_level;
		$where = $this->user_nama;
		$unit = $this->unit_id;

		$data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
		if ($this->user_level == "Super Admin") {
			$level = $this->user_level;

        	$data = array(
				"judul"		=> "Data Unit",
				"keterangan"	=> "Manajemen Pengguna",
				"halaman"		=> "data_kerjaan",
				"breadcrumb"	=> "Master Data|User",
				"view"			=> "todolist",
				"data_unit"		=> $this->M_Universal->getMulti("", "hd_unit"),
				"user"			=> $data_user
				// "lihat_unit"	=> $this->M_Universal->getMulti(["unit_id" => dekrip(uri(3))], "hd_unit"),
			);
		
			return $data;
		}
		else if ($this->user_level == "Ka. Bag") {
			$level = $this->user_level;

        	$data = array(
				"judul"		=> "Data Pekerjaan",
				"keterangan"	=> "Manajemen Pengguna",
				"halaman"		=> "data_kerjaan",
				"breadcrumb"	=> "Master Data|User",
				"view"			=> "todolist",
				"data_todo"		=> $this->todo->get_todo($unit, $level),
				"jml_todo"		=> $this->todo->total_todo("", "todo"),
				"data_unit"		=> $this->M_Universal->getMulti("", "hd_unit"),
				"user"			=> $data_user
			);
		
			return $data;
		}
		else if($this->user_level == "Sub Bag"){

        	$data = array(
				"judul"			=> "Data Pekerjaan",
				"keterangan"	=> "Manajemen Pengguna",
				"halaman"		=> "data_kerjaan",
				"breadcrumb"	=> "Master Data|User",
				"view"			=> "todolist",
				"data_todo"		=> $this->todo->get_todo($where, $level),
				"jml_todo"		=> $this->todo->total_todo("", "todo"),
				"user"			=> $data_user
			);

			return $data;
		}
		else {
			
        	$data = array(
				"judul"			=> "Data Pekerjaan",
				"keterangan"	=> "Manajemen Pengguna",
				"halaman"		=> "data_kerjaan",
				"breadcrumb"	=> "Master Data|User",
				"view"			=> "todolist",
				"data_todo"		=> $this->todo->get_todo($where, NULL),
				"jml_todo"		=> $this->todo->total_todo("", "todo"),
				"user"			=> $data_user
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
		$data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
		$where = $this->user_nama;
        $data = array(
			"judul"			=> "Halaman To-Do-List",
			"keterangan"	=> "Contoh Keterangan",
			"halaman"		=> "tambah_list",
			"view"			=> "tambah_list",
			"data_user"		=> $this->M_Universal->getMulti($where, "user"),
			"user"			=> $data_user
		);
					
		$this->load->view('template', $data);
	}

	public function cek()
	{
		$where = $this->user_nama;
		$data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
        $data = array(
			"judul"			=> "Halaman Check",
			"keterangan"	=> "Contoh Keterangan",
			"halaman"		=> "check",
			"view"			=> "check",
			"data_check"	=> $this->todo->getMulti(["id" => dekrip(uri(3))], "todo"),
			"data_user"		=> $this->M_Universal->getMulti($where, "user"),
			"user"		=> $data_user
		);
					
		$this->load->view('template', $data);
	}

	public function acc() 
	{
		$data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
		if ($this->user_level == "Ka. Bag") {
			$username = $this->user_nama;
			$level = $this->user_level;

        	$data = array(
				"judul"		=> "Project Selesai",
				"keterangan"	=> "Manajemen Pengguna",
				"halaman"		=> "data_kerjaan",
				"breadcrumb"	=> "Master Data|User",
				"view"			=> "acc",
				"data_todo"		=> $this->todo->lihat_status("ACC",NULL, $level),
				"user"			=> $data_user
				// "jml_todo"	=> $this->todo->total_todo("", "todo"),
			);
		
			$this->load->view('template', $data);
		} else if($this->user_level == "Sub Bag"){
			$username = $this->user_nama;
			$level = $this->user_level;
			$data = array(
				"judul"			=> "Project Selesai",
				"keterangan"	=> "Manajemen Pengguna",
				"halaman"		=> "data_kerjaan",
				"breadcrumb"	=> "Master Data|User",
				"view"			=> "acc",
				"data_todo"		=> $this->todo->lihat_status("ACC",$username, $level),
				"user"			=> $data_user
				// "jml_todo"	=> $this->todo->total_todo("", "todo"),
			);
		
			$this->load->view('template', $data);
		} 
		else {
			$username = $this->user_nama;
			$level = $this->user_level;
			$data = array(
				"judul"			=> "Project Selesai",
				"keterangan"	=> "Manajemen Pengguna",
				"halaman"		=> "data_kerjaan",
				"breadcrumb"	=> "Master Data|User",
				"view"			=> "acc",
				"data_todo"		=> $this->todo->lihat_status("ACC",$username,$level),
				"user"			=> $data_user
				// "jml_todo"	=> $this->todo->total_todo("", "todo"),
			);
		
			$this->load->view('template', $data);
		}
	}

	public function belum() 
	{
		$data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
		if ($this->user_level == "Ka. Bag") {
			$username = $this->user_nama;
			$level = $this->user_level;

        	$data = array(
				"judul"			=> "Project Belum Selesai",
				"keterangan"	=> "Manajemen Pengguna",
				"halaman"		=> "data_kerjaan",
				"breadcrumb"	=> "Master Data|User",
				"view"			=> "acc",
				"data_todo"		=> $this->todo->lihat_status("Belum",NULL, $level),
				"user"		=> $data_user
				// "jml_todo"	=> $this->todo->total_todo("", "todo"),
			);
		
			$this->load->view('template', $data);
		} else if($this->user_level == "Sub Bag"){
			$username = $this->user_nama;
			$level = $this->user_level;
			$data = array(
				"judul"			=> "Project Belum Selesai",
				"keterangan"	=> "Manajemen Pengguna",
				"halaman"		=> "data_kerjaan",
				"breadcrumb"	=> "Master Data|User",
				"view"			=> "acc",
				"data_todo"		=> $this->todo->lihat_status("Belum",$username, $level),
				"user"		=> $data_user
				// "jml_todo"	=> $this->todo->total_todo("", "todo"),
			);
		
			$this->load->view('template', $data);
		} 
		else {
			$username = $this->user_nama;
			$level = $this->user_level;
			$data = array(
				"judul"			=> "Project Belum Selesai",
				"keterangan"	=> "Manajemen Pengguna",
				"halaman"		=> "data_kerjaan",
				"breadcrumb"	=> "Master Data|User",
				"view"			=> "acc",
				"data_todo"		=> $this->todo->lihat_status("Belum",$username,$level),
				"user"		=> $data_user
				// "jml_todo"	=> $this->todo->total_todo("", "todo"),
			);
		
			$this->load->view('template', $data);
		}
	}

	public function pending() 
	{
		$data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
		if ($this->user_level == "Ka. Bag") {
			$level = $this->user_level;

        	$data = array(
			"judul"		=> "Project Pending",
			// "keterangan"	=> "Manajemen Pengguna",
			// "halaman"		=> "data_kerjaan",
			// "breadcrumb"	=> "Master Data|User",
			"view"		=> "acc",
			"data_todo"	=> $this->todo->lihat_status("Tolak",NULL, $level),
			"user"		=> $data_user
			// "jml_todo"	=> $this->todo->total_todo("", "todo"),
			);
		
			$this->load->view('template', $data);
		}
		else if($this->user_level == "Sub Bag"){
			$username = $this->user_nama;
			$level = $this->user_level;
        	$data = array(
			"judul"		=> "Project Selesai",
			"keterangan"	=> "Manajemen Pengguna",
			"halaman"		=> "data_kerjaan",
			"breadcrumb"	=> "Master Data|User",
			"view"			=> "acc",
			"data_todo"		=> $this->todo->lihat_status("Tolak",$username, $level),
			"user"			=> $data_user
			// "jml_todo"	=> $this->todo->total_todo("", "todo"),
			);
		
			$this->load->view('template', $data);
		} 
		else {
			
			$username = $this->user_nama;
			$level = $this->user_level;
        	$data = array(
			"judul"		=> "Project Belum",
			"keterangan"	=> "Manajemen Pengguna",
			"halaman"		=> "data_kerjaan",
			"breadcrumb"	=> "Master Data|User",
			"view"			=> "acc",
			"data_todo"		=> $this->todo->lihat_status("Tolak",$username,$level),
			"user"			=> $data_user
			// "jml_todo"	=> $this->todo->total_todo("", "todo"),
			);
		
			$this->load->view('template', $data);
		}
	}
	
	public function lihat_unit()
	{
		
		$count_acc = $this->M_Universal->infoUnit("ACC",dekrip(uri(3)));
		$count_belum = $this->M_Universal->infoUnit("Belum",dekrip(uri(3)));
		$count_pending = $this->M_Universal->infoUnit("Tolak",dekrip(uri(3)));
		$count_todo = $this->M_Universal->infoUnit(NULL,dekrip(uri(3)));
		$data_user = $this->M_Universal->getOne(["user_id" => $this->user_id], "user");

		if ($this->user_level == "Super Admin") {
			$level = $this->user_level;

        	$data = array(
				"judul"		=> "Data Unit",
				"keterangan"	=> "Manajemen Pengguna",
				"halaman"		=> "data_kerjaan",
				"breadcrumb"	=> "Master Data|User",
				"view"			=> "lihat_unit",
				"lihat_unit"	=> $this->M_Universal->getUnit(["unit_id" => dekrip(uri(3))], "hd_unit"),
				"todo_unit"		=> $this->todo->get_todo(["user.unit_id" => dekrip(uri(3))], $level),
				"count_acc" 	=> $count_acc->count_id,
				"count_belum" 	=> $count_belum->count_id,
				"count_pending" => $count_pending->count_id,
				"count_todo" 	=> $count_todo->count_id,
				"user"			=> $data_user
			);
		
			$this->load->view('template', $data);

			// $todo_unit = $this->todo->get_todo(NULL, $level ,["user.unit_id" => dekrip(uri(3))]);
			// var_dump($todo_unit); die; 

		}
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
			notifikasi_redirect("success", "Data berhasil diceklist", uri(1));
		} else {
			notifikasi_redirect("error", "Gagal ceklist data", uri(1));
		};
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
		);

		$tambah = $this->M_Universal->insert($data, "todo");
		
		if ($tambah){
			notifikasi_redirect("success", "Data berhasil ditambahkan", uri(1));
		} else {
			notifikasi_redirect("error", "Gagal menambah data", uri(1));
		};
	}

	public function edit() 
	{
		$data_user = $this->M_Universal->getOne(["user_id" => $this->user_id], "user");;
		$where = $this->user_nama;
		$data = array(
			"judul"			=> "Halaman Edit",
			"halaman"		=> "edit_list",
			"view"			=> "edit_list",
			"data_edit"		=> $this->todo->getMulti(["id" => dekrip(uri(3))], "todo"),
			"data_user"		=> $this->M_Universal->getMulti($where, "user"),
			"user"			=> $data_user
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
			notifikasi_redirect("success", "Update data berhasil", uri(1));
		} else {
			notifikasi_redirect("error", "Update data gagal", uri(1));
		};
	}

	public function hapus()
	{
		$hapus = $this->M_Universal->delete(["id" => dekrip(uri(3))], "todo");
		
		if ($hapus){
			notifikasi_redirect("success", "Hapus data berhasil", uri(1));
		} else {
			notifikasi_redirect("error", "Hapus data gagal", uri(1));
		};
	}
}
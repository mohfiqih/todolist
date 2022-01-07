<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Todo extends MY_Controller {

    public function __construct()
    {
        // Load the constructer from MY_Controller
        parent::__construct();
	   $this->cek_login(1);
	   $this->load->model('M_todo','todo');
    }

    private function meta()
	{
        $data = array(
			"judul"		=> "Data Pekerjaan",
			"keterangan"	=> "Manajemen Pengguna",
			"halaman"		=> "data_kerjaan",
			"breadcrumb"	=> "Master Data|User",
			"view"		=> "todolist",
			"data_todo"	=> $this->todo->get_todo(),
		);
		
		return $data;
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

	// public function check()
	// {
	// 	$data = array(
	// 		"checked"		    	=> $this->input->post("cek"),
	// 	);	

	// 	$tambah = $this->M_Universal->insert($data, "todo");
		
	// 	if ($tambah){
	// 		notifikasi_redirect("success", "Tambah Pekerjaan berhasil", uri(1));
	// 	} else {
	// 		notifikasi_redirect("error", "Tambah Pekerjaan gagal", uri(1));
	// 	}
	// }

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
			// "checked"		    	=> $this->input->post("cek"),
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
			"halaman"	=> "edit_list",
			"view"		=> "edit_list",
			"data_edit"	=>  $this->M_Universal->getMulti(["id" => uri(3)], "todo")
		);
		$this->load->view('template', $data);
		// $this->M_Universal->getMulti(["id" => uri(3)], "todo");
	}

	public function update()
	{
		$id_user	= dekrip($this->input->post("id_user"));
		$data	= array(
			"task"			=> $this->input->post("pekerjaan"),
			"date_created"	=> $this->input->post("tanggal"),
			"mulai"	   		=> $this->input->post("jam_mulai"),
			"selesai"		=> $this->input->post("jam_selesai"),
			"level"			=> $this->input->post("user_level"),
			"status"		    	=> $this->input->post("progres"),
		);
		
		$update = $this->M_Universal->update($data, ["id_user" => $id_user], "todo");
		
		if ($update){
			notifikasi_redirect("success", "Update user berhasil", redirect(base_url('todo')));
		} else {
			notifikasi_redirect("error", "Update user gagal", uri(1));
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
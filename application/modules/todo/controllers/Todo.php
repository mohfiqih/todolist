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
		$config['base_url'] = 'https://localhost/todolist/todo/index';
		$config['total_rows'] = $this->todo->countDataTodo();
		$config['per_page'] = 10;
		// $config['uri_segment'] = 3;
		$config['num_links'] = 3;
		$config['full_tag_open'] = '<nav aria-label="..."><ul class="pagination">';
		$config['full_tag_close'] = '</ul></nav>';
		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';
		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';
		$config['next_link'] = 'Next';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = 'Previous';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';
		$config['attributes'] = array('class' => 'page-link');
		
		$this->pagination->initialize($config);
		
		$start = $this->uri->segment(3);

		if ($this->user_level == "Ka. Bag" or $this->user_level == "Sub Bag") {
			$level = $this->user_level;

        	$data = array(
			"judul"			=> "Data Pekerjaan",
			"keterangan"	=> "Manajemen Pengguna",
			"halaman"		=> "data_kerjaan",
			"breadcrumb"	=> "Master Data|User",
			"view"			=> "todolist",
			"start"			=> $start,
			
			"data_todo"		=> $this->todo->get_todo(NULL, $level, $config['per_page'], $start),
			);
		
			return $data;
		} else {
			
			$namalengkap = $this->user_namalengkap;
        	$data = array(
			"judul"			=> "Data Pekerjaan",
			"keterangan"	=> "Manajemen Pengguna",
			"halaman"		=> "data_kerjaan",
			"breadcrumb"	=> "Master Data|User",
			"view"			=> "todolist",
			// "start"			=> $this->uri->segment(3),
			// "nama" 			=> $this->user_namalengkap, ->hasil Wirayuda
			"data_todo"		=> $this->todo->get_todo($namalengkap,NULL, $config['per_page'], $start),
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
<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Todo extends MY_Controller {

    public function __construct()
    {
        // Load the constructer from MY_Controller
        parent::__construct();
		$this->cek_login(1);
    }

    private function meta()
	{
        $data = array(
			"judul"			=> "User",
			"keterangan"	=> "Manajemen Pengguna",
			"halaman"		=> "user",
			"breadcrumb"	=> "Master Data|User",
			"view"			=> "todolist",
			"data_user"		=> $this->M_Universal->getMulti(NULL, "user"),
		);
		
		return $data;
	}

	public function index()
	{
        $this->load->view('template', $this->meta());
	}

	// public function todolist()
	// {
    //     $data = array(
	// 		"judul"			=> "Halaman To-Do-List",
	// 		"keterangan"	=> "Contoh Keterangan",
	// 		"halaman"		=> "todolist",
	// 		"view"			=> "todolist",
	// 	);
				
	// 	$this->load->view('template', $data);
	// }

	public function tambah_list()
	{
        $data = array(
			"judul"			=> "Halaman To-Do-List",
			"keterangan"	=> "Contoh Keterangan",
			"halaman"		=> "tambah_list",
			"view"			=> "tambah_list",
		);
				
		$this->load->view('template', $data);
	}
}
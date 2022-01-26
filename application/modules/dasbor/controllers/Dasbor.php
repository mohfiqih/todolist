<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dasbor extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

    /**
     * [__construct description]
     *
     * @method __construct
     */
    public function __construct()
    {
        // Load the constructer from MY_Controller
        parent::__construct();
		$this->cek_login();
    }

    /**
     * [index description]
     *
     * @method index
     *
     * @return [type] [description]
     */
	public function index()
	{
        $data = array(
			"judul"		=> "Dashboard",
			"keterangan"	=> "Contoh Keterangan",
			"halaman"		=> "dasbor",
			"view"			=> "dasbor",
			"jml_user"	=> $this->M_Universal->total_user("", "user"),
			"jml_todo"	=> $this->M_Universal->total_todo("", "todo"),
			"jml_acc"	=> $this->M_Universal->total_acc("ACC"),
			"jml_tolak"	=> $this->M_Universal->total_tolak("Tolak")
		);
				
		$this->load->view('template', $data);
	}

	public function todolist()
	{
        $data = array(
			"judul"			=> "Halaman To-Do-List",
			"keterangan"	=> "Contoh Keterangan",
			"halaman"		=> "todolist",
			"view"			=> "todolist",
		);
				
		$this->load->view('template', $data);
	}

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
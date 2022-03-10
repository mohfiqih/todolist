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
		$this->load->model('M_dasbor','todo');
    }

    /**
     * [index description]
     *
     * @method index
     *
     * @return [type] [description]
     */
	public function meta()
	{
		$level = $this->user_level;
		$username = $this->user_nama;
		// $unit = $this->unit_id;


		$count_acc = $this->M_Universal->total_acc("ACC",$level,$username);
		$count_belum = $this->M_Universal->total_belum("Belum",$level,$username);
		$count_pending = $this->M_Universal->total_pending("Tolak",$level,$username);
		$count_todo = $this->M_Universal->total_todo($level,$username);

		$data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
	
		
		if($this->user_level == "Super Admin"){

			// $data_unit	= $this->M_Universal->getMulti("", "hd_unit");
			
			// var_dump($data_unit -> unit_id); die; 


			// // $count_todo = $this->M_Universal->total_todo($level,$username);
			



			$data = array(
				"judul"			=> "Unit Bagian",
				"keterangan"	=> "Contoh Keterangan",
				"halaman"		=> "dasbor",
				"view"			=> "dasbor",
				"data_unit"		=> $this->M_Universal->getMulti("", "hd_unit"),
				"jml_todo"		=> $count_todo->count_id,
				// "jml_acc"		=> $count_acc->count_id,
				// "jml_pending"	=> $count_pending->count_id,
				// "jml_belum"		=> $count_belum->count_id,
				"user"			=> $data_user
			);

			return $data;
		}
		else if ($this->user_level == "Staf" or $this->user_level == "Magang") {
		
        	$data = array(
				"judul"			=> "Dashboard",
				"keterangan"	=> "Contoh Keterangan",
				"halaman"		=> "dasbor",
				"view"			=> "dasbor",
				"jml_user"		=> $this->M_Universal->total_user("", "user"),
				"jml_todo"		=> $count_todo->count_id,
				"jml_acc"		=> $count_acc->count_id,
				"jml_pending"	=> $count_pending->count_id,
				"jml_belum"		=> $count_belum->count_id,
				"user"			=> $data_user
			);

			return $data;
		}  
		else if($this->user_level == "Sub Bag"){
			
        	$data = array(
				"judul"			=> "Dashboard",
				"keterangan"	=> "Contoh Keterangan",
				"halaman"		=> "dasbor",
				"view"			=> "dasbor",
				"jml_user"		=> $this->M_Universal->total_user("", "user"),
				"jml_todo"		=> $count_todo->count_id,
				"jml_acc"		=> $count_acc->count_id,
				"jml_pending"	=> $count_pending->count_id,
				"jml_belum"		=> $count_belum->count_id,
				"user"			=> $data_user
				
			);

			return $data;
		}
		else{
			$unit = $this->unit_id;
			$count_todo_kabag = $this->M_Universal->total_todo($level,$unit);

        	$data = array(
				"judul"			=> "Dashboard",
				"keterangan"	=> "Contoh Keterangan",
				"halaman"		=> "dasbor",
				"view"			=> "dasbor",
				"jml_user"		=> $this->M_Universal->total_user("", "user"),
				"jml_todo"		=> $count_todo_kabag->count_id,
				"jml_acc"		=> $count_acc->count_id,
				"jml_pending"	=> $count_pending->count_id,
				"jml_belum"		=> $count_belum->count_id,
				"user"			=> $data_user
			);

			return $data;
		}
	}

	public function index()
	{
        $this->load->view('template', $this->meta());
	}

	

}
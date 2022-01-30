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
		if ($this->user_level == "Staf" or $this->user_level == "Magang") {
			$level = $this->user_level;
			$namalengkap = $this->user_namalengkap;

			$count_acc = $this->M_Universal->total_acc("ACC",$level,$namalengkap);
			$count_tolak = $this->M_Universal->total_tolak("Tolak",$level,$namalengkap);

        	$data = array(
				"judul"		=> "Dashboard",
				"keterangan"	=> "Contoh Keterangan",
				"halaman"		=> "dasbor",
				"view"		=> "dasbor",
				"jml_user"	=> $this->M_Universal->total_user("", "user"),
				"jml_todo"	=> $this->M_Universal->total_todo("", "todo"),
				"jml_acc"		=> $count_acc->count_id,
				"jml_tolak"	=> $count_tolak->count_id,
			);

			return $data;
		} else{
			$level = $this->user_level;

        	$data = array(
				"judul"			=> "Dashboard",
				"keterangan"	=> "Contoh Keterangan",
				"halaman"		=> "dasbor",
				"view"			=> "dasbor",
				"jml_user"	=> $this->M_Universal->total_user("", "user"),
				"jml_todo"	=> $this->M_Universal->total_todo("", "todo"),
				"jml_acc"	=> $this->M_Universal->total_acc("ACC",$level,NULL),
				"jml_tolak"	=> $this->M_Universal->total_tolak("Tolak",$level,NULL)
			);

			return $data;
		}
	}

	public function index()
	{
        $this->load->view('template', $this->meta());
	}
}
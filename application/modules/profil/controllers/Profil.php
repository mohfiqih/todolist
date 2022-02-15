<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends MY_Controller {
	
    public function __construct()
    {
        parent::__construct();
		
		$this->cek_login();
    }
	
	public function index()
	{
		$data = array(
			"judul"			=> "Profil",
			"keterangan"	=> "Sunting Data Diri",
			"halaman"		=> "profil",
			"breadcrumb"	=> "User|Profil",
			"view"		=> "profil",
			"edit"		=> $this->M_Universal->getOne(["user_id" => $this->user_id], "user"),
			"data_join"	=> $this->M_Universal->getMulti(NULL, "user"),
		);
		
		$this->load->view('template', $data);
	}
	
	public function update()
	{
		$user_id		= $this->user_id;
		$namalengkap	= $this->input->post('nama_lengkap');
		$username		= $this->input->post('username');

		$config['upload_path'] = './assets/images/'; //path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] = TRUE; //nama yang terupload nantinya

		$this->upload->initialize($config);

		if(!empty($_FILES['file_foto']['name']))
	            {
	                if ($this->upload->do_upload('file_foto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 300;
	                        $config['height']= 300;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $gambar=$gbr['file_name'];
	                        // $kode=$this->input->post('kode');
	                        // $nama=$this->input->post('xnama');
	                		// $jenkel=$this->input->post('xjenkel');
	                		// $username=$this->input->post('xusername');
	                		// $password=$this->input->post('xpassword');
                    		// $konfirm_password=$this->input->post('xpassword2');
                    		// $email=$this->input->post('xemail');
                    		// $nohp=$this->input->post('xkontak');
							// $level=$this->input->post('xlevel');

							//update username, pass, dan gambar
							if ($this->input->post('password_sekarang')){	
								$passlama		= addslashes($this->input->post('password_sekarang'));
								$passbaru1		= addslashes($this->input->post('password_baru_1'));
								$passbaru2		= password_hash(addslashes($this->input->post('password_baru_2')), PASSWORD_DEFAULT);
								
								$cek = $this->db->query("SELECT user_password FROM user WHERE user_id='$user_id'");
								if (password_verify($passlama, $cek->row('user_password'))){
									if (password_verify($passbaru1, $passbaru2)){
										
										$data = array(
											// "foto"				=> $foto,
											"user_namalengkap"	=> $namalengkap,
											"user_nama"			=> $username,
											"user_password"		=> $passbaru2,
											"user_foto"			=> $gambar,
										);
										
										$update = $this->M_Universal->update($data, ["user_id" => $user_id], "user");
										
										notifikasi_redirect("success", "Update profil dan password berhasil", $_SERVER['HTTP_REFERER']);
									} else {
										notifikasi_redirect("error", "Password baru yang Anda masukkan tidak sama", $_SERVER['HTTP_REFERER']);
									}
								} else {
									notifikasi_redirect("error", "Password saat ini yang Anda masukkan salah", $_SERVER['HTTP_REFERER']);
								}
							} 
							// update nama user dan gambar
							else {
								$data = array(
									"user_namalengkap"	=> $namalengkap,
									"user_nama"			=> $username,
									"user_foto"			=> $gambar,
								);
								$update = $this->M_Universal->update($data, ["user_id" => $user_id], "user");
							}
							
							if ($update){
								$session = array(
									'is_logged_in'		=> $this->login,
									'user_nama'			=> $this->user_nama,
									'user_level'		=> $this->user_level,
									'user_id'			=> $this->user_id,
									'user_namalengkap'	=> $this->user_namalengkap,
									'user_foto'			=> $this->user_foto
								);
								
								$this->session->set_userdata("log_admin", $session);
								notifikasi_redirect("success", "Update profil berhasil", $_SERVER['HTTP_REFERER']);
							} else {
								notifikasi_redirect("error", "Update profil gagal", $_SERVER['HTTP_REFERER']);
							}

                            // if (empty($password) && empty($konfirm_password)) {
                            // 	$this->m_pengguna->update_pengguna_tanpa_pass($kode,$nama,$jenkel,$username,$password,$email,$nohp,$level,$gambar);
	                    	// 	echo $this->session->set_flashdata('msg','info');
	               			// 	redirect('admin/pengguna');
     						// }elseif ($password <> $konfirm_password) {
     						// 	echo $this->session->set_flashdata('msg','error');
	               			// 	redirect('admin/pengguna');
     						// }else{
	               			// 	$this->m_pengguna->update_pengguna($kode,$nama,$jenkel,$username,$password,$email,$nohp,$level,$gambar);
	                    	// 	echo $this->session->set_flashdata('msg','info');
	               			// 	redirect('admin/pengguna');
	               			// }
	                    
	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/pengguna');
	                }
	                
	            }else{
	            	// $kode=$this->input->post('kode');
	            	// $nama=$this->input->post('xnama');
	                // $jenkel=$this->input->post('xjenkel');
	                // $username=$this->input->post('xusername');
	                // $password=$this->input->post('xpassword');
                    // $konfirm_password=$this->input->post('xpassword2');
                    // $email=$this->input->post('xemail');
                    // $nohp=$this->input->post('xkontak');
					// $level=$this->input->post('xlevel');

	            	// if (empty($password) && empty($konfirm_password)) {
                    //    	$this->m_pengguna->update_pengguna_tanpa_pass_dan_gambar($kode,$nama,$jenkel,$username,$password,$email,$nohp,$level);
	                //     echo $this->session->set_flashdata('msg','info');
	               	// 	redirect('admin/pengguna');
     				// }elseif ($password <> $konfirm_password) {
     				// 	echo $this->session->set_flashdata('msg','error');
	               	// 	redirect('admin/pengguna');
     				// }else{
	               	// 	$this->m_pengguna->update_pengguna_tanpa_gambar($kode,$nama,$jenkel,$username,$password,$email,$nohp,$level);
	                //     echo $this->session->set_flashdata('msg','warning');
	               	// 	redirect('admin/pengguna');
	               	// }

					   if ($this->input->post('password_sekarang')){	
						$passlama		= addslashes($this->input->post('password_sekarang'));
						$passbaru1		= addslashes($this->input->post('password_baru_1'));
						$passbaru2		= password_hash(addslashes($this->input->post('password_baru_2')), PASSWORD_DEFAULT);
						
						$cek = $this->db->query("SELECT user_password FROM user WHERE user_id='$user_id'");
						if (password_verify($passlama, $cek->row('user_password'))){
							if (password_verify($passbaru1, $passbaru2)){
								
								$data = array(
									// "foto"				=> $foto,
									"user_namalengkap"	=> $namalengkap,
									"user_nama"			=> $username,
									"user_password"		=> $passbaru2,
								);
								
								$update = $this->M_Universal->update($data, ["user_id" => $user_id], "user");
								
								notifikasi_redirect("success", "Update profil dan password berhasil", $_SERVER['HTTP_REFERER']);
							} else {
								notifikasi_redirect("error", "Password baru yang Anda masukkan tidak sama", $_SERVER['HTTP_REFERER']);
							}
						} else {
							notifikasi_redirect("error", "Password saat ini yang Anda masukkan salah", $_SERVER['HTTP_REFERER']);
						}
					} 
					// update nama user dan gambar
					else {
						$data = array(
							"user_namalengkap"	=> $namalengkap,
							"user_nama"			=> $username,
						);
						$update = $this->M_Universal->update($data, ["user_id" => $user_id], "user");
					}
					
					if ($update){
						$session = array(
							'is_logged_in'		=> $this->login,
							'user_nama'			=> $this->user_nama,
							'user_level'		=> $this->user_level,
							'user_id'			=> $this->user_id,
							'user_namalengkap'	=> $this->user_namalengkap,
							'user_foto'			=> $this->user_foto
						);
						
						$this->session->set_userdata("log_admin", $session);
						notifikasi_redirect("success", "Update profil berhasil", $_SERVER['HTTP_REFERER']);
					} else {
						notifikasi_redirect("error", "Update profil gagal", $_SERVER['HTTP_REFERER']);
					}

	            } 


		// if ($this->input->post('password_sekarang')){	
		// 	$passlama		= addslashes($this->input->post('password_sekarang'));
		// 	$passbaru1		= addslashes($this->input->post('password_baru_1'));
		// 	$passbaru2		= password_hash(addslashes($this->input->post('password_baru_2')), PASSWORD_DEFAULT);
			
		// 	$cek = $this->db->query("SELECT user_password FROM user WHERE user_id='$user_id'");
		// 	if (password_verify($passlama, $cek->row('user_password'))){
		// 		if (password_verify($passbaru1, $passbaru2)){
					
		// 			$data = array(
		// 				// "foto"				=> $foto,
		// 				"user_namalengkap"		=> $namalengkap,
		// 				"user_nama"			=> $username,
		// 				"user_password"		=> $passbaru2,
		// 			);
					
		// 			$update = $this->M_Universal->update($data, ["user_id" => $user_id], "user");
					
		// 			notifikasi_redirect("success", "Update profil dan password berhasil", $_SERVER['HTTP_REFERER']);
		// 		} else {
		// 			notifikasi_redirect("error", "Password baru yang Anda masukkan tidak sama", $_SERVER['HTTP_REFERER']);
		// 		}
		// 	} else {
		// 		notifikasi_redirect("error", "Password saat ini yang Anda masukkan salah", $_SERVER['HTTP_REFERER']);
		// 	}
		// } else {
		// 	$data = array(
		// 		"user_namalengkap"	=> $namalengkap,
		// 		"user_nama"			=> $username,
		// 	);
		// 	$update = $this->M_Universal->update($data, ["user_id" => $user_id], "user");
		// }
		
		// if ($update){
		// 	$session = array(
		// 		'is_logged_in'		=> $this->login,
		// 		'user_nama'			=> $this->user_nama,
		// 		'user_level'		=> $this->user_level,
		// 		'user_id'			=> $this->user_id,
		// 		'user_namalengkap'	=> $namalengkap
		// 	);
			
		// 	$this->session->set_userdata("log_admin", $session);
		// 	notifikasi_redirect("success", "Update profil berhasil", $_SERVER['HTTP_REFERER']);
		// } else {
		// 	notifikasi_redirect("error", "Update profil gagal", $_SERVER['HTTP_REFERER']);
		// }
	}
	
}
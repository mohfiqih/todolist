<div class="content-page"><br />
     <div class="content">

          <!-- Start Content-->
          <div class="container-fluid">
               <form action="<?php echo base_url('profil/update'); ?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                         value="<?php echo $this->security->get_csrf_hash(); ?>">

                    <div class="row push">
                         <div class="col-md-4">
                              <div class="card">
                                   <div class="card-body">

                                        <center>
                                             <img style="width: 210px; height: 210px;" type="file" alt="poltek"
                                                  src="<?php echo base_url('assets/backend'); ?>/images/bg-auth3.png" /><br />
                                        </center>
                                        <br />
                                        <div class="mb-2"><br />
                                             <label class="form-label">Foto Profil</label>
                                             <input type="file" class="form-control" name="foto" value=""><br />
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="col-md-8">
                              <div class="card">
                                   <div class="card-body">
                                        <div class="mb-2">
                                             <label class="form-label">Nama Lengkap</label>
                                             <input type="text" class="form-control" name="nama_lengkap"
                                                  value="<?php echo $this->user_nama; ?> ">
                                        </div>
                                        <div class="mb-2">
                                             <label class="form-label">Password Saat Ini</label>
                                             <input type="password" class="form-control" name="password_sekarang">
                                        </div>
                                        <div class="mb-2">

                                             <label class="form-label">Password Baru</label>
                                             <input type="password" class="form-control" name="password_baru_1">

                                        </div>
                                        <div class="mb-2">

                                             <label class="form-label">Ulangi Password Baru</label>
                                             <input type="password" class="form-control" name="password_baru_2">

                                        </div>
                                        <div class="text-center">
                                             <button type="submit" class="btn btn-primary">Update</button>
                                             <a href="<?php echo base_url('dasbor');?>">
                                                  <button type="submit" class="btn btn-danger">Kembali</button>
                                             </a>
                                        </div>
                                   </div>
                              </div>
               </form>
          </div>
     </div>
</div>
</div>
</div>
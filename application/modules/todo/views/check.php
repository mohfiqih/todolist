<div class="content-page">
     <div class="content">

          <!-- Start Content-->
          <div class="container-fluid">
               <div class="row">
                    <div class="col-md-4">
                         <div class="card">
                              <div class="card-body">
                                   <h4 class="header-title mb-3">
                                        Check List</h4>

                                   <?php
                                   if ($data_edit){
                                   foreach ($data_edit as $d){ 
                                   ?>
                                   <form action="<?php echo uri(2) == "edit" ? url(1, "update") : url(1, "tambah"); ?>"
                                        method="POST">
                                        <input type="hidden" name="id"
                                             value="<?php echo uri(2) == "edit" ? enkrip($d->id) : ""; ?>">
                                        <div class="form-floating mb-3">
                                             <select type="option" class="form-select" name="id_user" placeholder="Nama"
                                                  autocomplete="off" required>
                                                  <option value="">
                                                       Nama</option>
                                                  <?php 
                                                  foreach($data_user as $d) : ?>
                                                  <option value="<?php echo enkrip($d->user_id) ?>">
                                                       <?php echo $d->user_namalengkap; ?>
                                                  </option>
                                                  <?php endforeach; ?>
                                             </select>
                                             <label for="example-select-floating">Nama</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                             <select class="form-select" name="checked" placeholder="Check">
                                                  <option>Pilih Checked</option>
                                                  <option class="bg-success" style="color: white;" value="1">ACC
                                                  </option>
                                                  <option class="bg-warning" style="color: white;" value="2">Belum
                                                  </option>
                                                  <option class="bg-danger" style="color: white;" value="3">Tolak
                                                  </option>
                                             </select>
                                             <label for="example-select-floating">Check</label>
                                        </div>

                                        <div class="text-center">
                                             <button type="submit" class="btn btn-primary">Tambah</button>
                                             <a href="<?php echo base_url("todo"); ?>">
                                                  <button type="button" class="btn btn-danger">Batal</button>
                                             </a>
                                        </div>
                                        <?php }} else { ?>
                                        <td class="text-center" colspan="8">Tidak ada data</td>
                                        <?php } ?>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>
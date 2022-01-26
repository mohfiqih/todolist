<div class="content-page"><br />
     <div class="content">

          <!-- Start Content-->
          <div class="container-fluid">
               <?php echo form_open(uri(2) == "cek" ? url(1, "checked") : url(1, "tambah")); ?>
               <div class="row">
                    <div class="col-md-4">
                         <div class="card">
                              <div class="card-body">
                                   <h4 class="header-title mb-3">
                                        Check List</h4>
                                   <?php
                                   if ($data_check){
                                   foreach ($data_check as $d){ 
                                   ?>
                                   <form action="<?php echo uri(2) == "cek" ? url(1, "checked") : url(1, "tambah"); ?>"
                                        method="POST">
                                        <input type="hidden" name="id"
                                             value="<?php echo uri(2) == "cek" ? enkrip($d->id) : ""; ?>">

                                        <div class="form-floating mb-3">
                                             <select type="option" class="form-select" name="id_user" placeholder="Nama"
                                                  autocomplete="off" required>
                                                  <?php 
                                                       foreach($data_user as $e) : ?>

                                                  <option value="<?php echo enkrip($e->user_id) ?>"
                                                       <?=$d->id_user == $e->user_id ? 'selected' : null?>>
                                                       <?=$e->user_namalengkap;?>
                                                  </option>

                                                  <?php endforeach; ?>
                                             </select>
                                             <label for="example-select-floating">Nama</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                             <select class="form-select" name="ceked" placeholder="Check">
                                                  <option>Pilih Checked</option>
                                                  <option value="ACC"
                                                       <?php if (uri(1) == "checked") echo $d->ceked == "ACC" ? "selected" : ""; ?>>
                                                       ACC</option>
                                                  <option value="Belum"
                                                       <?php if (uri(1) == "checked") echo $d->ceked == "Belum" ? "selected" : ""; ?>>
                                                       Belum</option>
                                                  <option value="Tolak"
                                                       <?php if (uri(1) == "checked") echo $d->ceked == "Tolak" ? "selected" : ""; ?>>
                                                       Tolak</option>
                                             </select>
                                             <label for="example-select-floating">Check</label>
                                        </div>

                                        <div class="text-center">
                                             <button id="sweet" type="submit"
                                                  class="btn btn-primary"><?php echo (uri(1) == 'checked') ? : 'Ceklist'; ?></button>
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
               <?php echo form_close(); ?>
          </div>
     </div>
</div>
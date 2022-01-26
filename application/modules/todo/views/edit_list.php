<div class="content-page"><br />
     <div class="content">

          <!-- Start Content-->
          <div class="container-fluid">
               <form action="<?php echo uri(2) == "edit" ? url(1, "update") : url(1, "tambah"); ?>" method="POST">
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                         value="<?php echo $this->security->get_csrf_hash(); ?>">

                    <?php
			     if ($data_edit){
			     foreach ($data_edit as $d) { ?>

                    <div class="row">
                         <div class="col-md-4">
                              <div class="card">
                                   <div class="card-body">
                                        <h4 class="header-title mb-3">
                                             <?php echo (uri(2) == 'edit') ? 'Edit List' : 'Tambah'; ?></h4>

                                        <form action="<?php echo uri(2) == "edit" ? url(1, "update") : url(1, "tambah"); ?>"
                                             method="POST">

                                             <input type="hidden" name="id"
                                                  value="<?php echo uri(2) == "edit" ? enkrip($d->id) : ""; ?>">
                                             <div class="form-floating mb-3">
                                                  <select type="option" class="form-select" name="id_user"
                                                       placeholder="Nama" autocomplete="off" required>
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
                                                  <input value="<?php echo uri(2) == "edit" ? ($d->task) : ""; ?>"
                                                       type="text" class="form-control" name="pekerjaan"
                                                       placeholder="Pekerjaan" autocomplete="off" required>
                                                  <label>Pekerjaan</label>
                                             </div>
                                             <div class="form-floating mb-3">
                                                  <input
                                                       value="<?php echo uri(2) == "edit" ? ($d->date_created) : ""; ?>"
                                                       type="text" id="basic-datepicker"
                                                       class="form-control flatpickr-input active" name="tanggal"
                                                       placeholder="Tanggal">
                                                  <label>Tanggal</label>
                                             </div>

                                             <div class="text-center">
                                                  <button type="submit"
                                                       class="btn btn-primary"><?php echo (uri(1) == 'update') ? : 'Update'; ?></button>
                                                  <a href="<?php echo base_url("todo"); ?>">
                                                       <button type="button" class="btn btn-danger">Batal</button>
                                                  </a>
                                             </div>
                                        </form>
                                   </div>
                              </div>
                         </div>

                         <div class="col-md-8">
                              <div class="card">
                                   <div class="card-body">
                                        <h4 class="header-title mb-3"></h4>
                                        <div class="form-floating mb-3">
                                             <input value="<?php echo uri(2) == "edit" ? ($d->mulai) : ""; ?>"
                                                  type="time" class="form-control clockpicker" readonly="readonly"
                                                  name="jam_mulai" placeholder="Jam Mulai" autocomplete="off">
                                             <label>Jam Mulai</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                             <input value="<?php echo uri(2) == "edit" ? ($d->selesai) : ""; ?>"
                                                  type="time" class="form-control clockpicker" name="jam_selesai"
                                                  readonly="readonly" placeholder="Jam Selesai" autocomplete="off">
                                             <label>Jam Selesai</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                             <select class="form-select" name="user_level"
                                                  aria-label="Floating label select example" required>
                                                  <option value="">Pilih Level</option>
                                                  <option value="High"
                                                       <?php if (uri(2) == "edit") echo $d->level == 'High' ? "selected" : ""; ?>>
                                                       High</option>
                                                  <option value="Middle"
                                                       <?php if (uri(2) == "edit") echo $d->level == 'Middle' ? "selected" : ""; ?>>
                                                       Middle</option>
                                                  <option value="Low"
                                                       <?php if (uri(2) == "edit") echo $d->level == 'Low' ? "selected" : ""; ?>>
                                                       Low</option>
                                             </select>
                                             <label for="example-select-floating">Level</label>
                                        </div>

                                        <div class="col-md-6">
                                             <div class="card">
                                                  <p>Progres (%)
                                                  </p>
                                                  <input value="<?php echo uri(2) == "edit" ? ($d->status) : ""; ?>"
                                                       type="text" id="range_01" name="progres">
                                                  <!-- <p>Catatan: <br />1.) 0-50% = Low <br />2.) 51-80% = Medium
                                                       <br />3.)
                                                       81-100%
                                                       = High
                                                  </p> -->
                                             </div>
                                        </div> <!-- end card-->
                                   </div> <!-- end card-->
                              </div> <!-- end col -->
                              <!-- </form> -->
                         </div>
                    </div>
               </form>
          </div>
          <?php }} 
          else { ?>
               <td class="text-center" colspan="8">Tidak ada data</td>
          <?php } ?>
     </div>
</div>
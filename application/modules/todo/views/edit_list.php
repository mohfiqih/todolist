<div class="content-page">
     <div class="content">

          <!-- Start Content-->
          <div class="container-fluid">
               <?php echo form_open(uri(2) == "edit" ? url(1, "update") : url(1, "tambah")); ?>
               <!-- <input type="hidden" value="<?php echo enkrip($data_edit->id) ?>" name="id_todo"> -->

               <div class="row">
                    <div class="col-md-4">
                         <div class="card">
                              <div class="card-body">
                                   <h4 class="header-title mb-3">
                                        Edit List</h4>

                                   <div class="form-floating mb-3">
                                        <select type="option" class="form-select" name="id_user" placeholder="ID User"
                                             autocomplete="off" required>
                                             <option value="">User</option>
                                             <?php 
                                                foreach($data_user as $e) : ?>
                                             <option value="<?php echo uri(2) == "edit" ? enkrip($e->user_id) : ""; ?>">
                                                  <?php echo $e->user_namalengkap; ?>
                                             </option>
                                             <?php endforeach; ?>
                                        </select>
                                        <label for="example-select-floating">ID User</label>
                                   </div>
                                   <div class="form-floating mb-3">
                                        <input value="<?php echo uri(2) == "edit" ? ($d->task) : ""; ?>" type="text"
                                             class="form-control" name="pekerjaan" placeholder="Pekerjaan"
                                             autocomplete="off" required>
                                        <label>Pekerjaan</label>
                                   </div>
                                   <div class="form-floating mb-3">
                                        <input value="<?php echo uri(2) == "edit" ? ($d->date_created) : ""; ?>"
                                             type="text" id="basic-datepicker"
                                             class="form-control flatpickr-input active" name="tanggal"
                                             placeholder="Tanggal">
                                        <label>Tanggal</label>
                                   </div>

                                   <!-- <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="user_namalengkap"
                                    autocomplete="off" required>
                                    <label>Jam Selesai</label>
                                </div> -->
                                   <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Edit</button>
                                        <a href="<?php echo base_url("todo"); ?>">
                                             <button type="button" class="btn btn-danger">Batal</button>
                                        </a>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-8">
                         <div class="card">
                              <div class="card-body">
                                   <h4 class="header-title mb-3"></h4>

                                   <div class="form-floating mb-3">
                                        <input value="<?php echo uri(2) == "edit" ? ($d->mulai) : ""; ?>" type="time"
                                             class="form-control clockpicker" readonly="readonly" name="jam_mulai"
                                             placeholder="Jam Mulai" autocomplete="off">
                                        <label>Jam Mulai</label>
                                   </div>
                                   <div class="form-floating mb-3">
                                        <input value="<?php echo uri(2) == "edit" ? ($d->selesai) : ""; ?>" type="time"
                                             class="form-control clockpicker" name="jam_selesai" readonly="readonly"
                                             placeholder="Jam Selesai" autocomplete="off">
                                        <label>Jam Selesai</label>
                                   </div>
                                   <div class="form-floating mb-3">
                                        <select class="form-select" name="user_level"
                                             aria-label="Floating label select example" required>
                                             <option value="">Pilih Level</option>
                                             <option value="High"
                                                  <?php if (uri(2) == "edit") echo $d->level == 'High' ? "selected" : ""; ?>>
                                                  High</option>
                                             <option value="Medium"
                                                  <?php if (uri(2) == "edit") echo $d->level == 'Medium' ? "selected" : ""; ?>>
                                                  Medium</option>==
                                             <option value="Low"
                                                  <?php if (uri(2) == "edit") echo $dt->level == 'Low' ? "selected" : ""; ?>>
                                                  Low</option>
                                        </select>
                                        <label for="example-select-floating">Level</label>
                                   </div>

                                   <div class="col-md-6">
                                        <div class="card">
                                             <div class="card-body">
                                                  <h4 class="header-title">Progres</h4>
                                                  <!-- <p class="sub-header">
                                                    Example of square skin
                                                </p> -->
                                                  <input value="<?php echo uri(2) == "edit" ? ($d->status) : ""; ?>"
                                                       type="text" id="range_01" name="progres">
                                             </div>
                                        </div> <!-- end card-->
                                   </div> <!-- end col -->
                                   <!-- </form> -->
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          </form>
     </div>
</div>
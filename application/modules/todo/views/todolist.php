<div class="content-page"><br />
     <div class="content">
          <!-- Start Content-->
          <div class="container-fluid">
               <div class="card">
                    <!-- <div class="card-body"> -->
                    <!-- <div class="row"> -->

                    <?php if ($this->user_level == "Super Admin") {?>
                    <!-- Tabel -->
                    <div class="card-body" data-mdb-perfect-scrollbar="true" style="height: 490px;overflow: auto;">

                         <!-- <div class="card-body" style="overflow: auto;height: 1010px;"> -->
                         <table id="example" class="table table-hover mb-0">
                              <thead>
                                   <br />
                                   <tr>
                                        <th class="align-middle" scope="col" style="width: 3px;">
                                             No
                                        </th>
                                        <th class="align-middle" scope="col">
                                             Nama Unit
                                        </th>
                                        <th class="align-middle" scope="col">
                                             Unit Inisial
                                        </th>
                                        <th class="align-middle" scope="col" style="width: 50px;">
                                             Action</th>
                                   </tr>

                              </thead>
                              <?php
                                        $no=0+1;
								if ($data_unit){
								foreach ($data_unit as $d){ 
								?>
                              <tr class="fw-normal">
                                   <th class="align-middle">
                                        <?php echo $no++; ?>
                                   </th>
                                   <th class="align-middle">
                                        <?php echo $d->unit_nama; ?>
                                   </th>
                                   <th class="align-middle">
                                        <?php echo $d->unit_inisial; ?>
                                   </th>
                                   <td class="align-middle" style="text-align: center; width: 50px;">
                                        <a href="<?php echo url(1) .'/lihat_unit/'. enkrip($d->unit_id); ?>"
                                             data-mdb-toggle="tooltip" title="Done"><i
                                                  class="fas fa-eye text-success me-3"></i></a>

                                        <!-- <a href="<?php echo url(2) .'edit/'. enkrip($d->unit_id); ?>"
                                             data-mdb-toggle="tooltip" title="Done"><i
                                                  class="fas fa-edit text-warning me-3"></i></a>

                                        <a href="<?php echo url(1) .'/hapus/'. enkrip($d->unit_id); ?>"
                                             data-mdb-toggle="tooltip" title="Remove"
                                             onclick="return confirm('Yakin hapus data?')"><i
                                                  class="fas fa-trash-alt text-danger"></i></a> -->
                                   </td>
                              </tr>
                              <?php }} else { ?>
                              <td class="text-center" colspan="11">Tidak ada data</td>
                              <?php } ?>
                              </tbody>
                         </table><br />
                    </div>
                    <!-- end table -->

                    <?php } else if($this->user_level == "Ka. Bag" or $this->user_level == "Sub Bag") {?>
                    <!-- Tabel -->
                    <div class="card-body" data-mdb-perfect-scrollbar="true" style="height: 490px;overflow: auto;">
                         <a href="<?php echo base_url('Todo/add'); ?>">
                              <button type="button" class="btn btn-success"><i class=" fas fa-plus"></i>
                                   Add</button>
                              <br>
                         </a>
                         <!-- <div class="card-body" style="overflow: auto;height: 1010px;"> -->
                         <table id="example" class="table table-hover mb-0">
                              <thead>
                                   <br />
                                   <tr>
                                        <th class="align-middle" scope="col" style="width: 3px;">
                                             No
                                        </th>
                                        <th class="align-middle" scope="col">
                                             Nama
                                        </th>
                                        <th class="align-middle" scope="col">Pekerjaan</th>
                                        <th class="align-middle" scope="col">Tanggal</th>
                                        <th class="align-middle" scope="col">Jam</th>
                                        <th class="align-middle" scope="col">Level</th>
                                        <th class="align-middle" scope="col">Progres</th>
                                        <th class="align-middle" scope="col" style="text-align: center">Status</th>
                                        <th class="align-middle" scope="col" style="text-align: center">Unit</th>
                                        <th class="align-middle" scope="col" style="width: 50px;">
                                             Action</th>
                                   </tr>

                              </thead>
                              <?php
                                        $no=0+1;
								if ($data_todo){
								foreach ($data_todo as $d){ 
								?>
                              <tr class="fw-normal">
                                   <th class="align-middle">
                                        <?php echo $no++; ?>
                                   </th>
                                   <th class="align-middle">
                                        <?php echo $d->user_namalengkap; ?>
                                   </th>
                                   <td class="align-middle">
                                        <?php echo $d->task; ?>
                                   </td>
                                   <td class="align-middle" style="text-align: center">
                                        <?php echo $d->date_created; ?>
                                   </td>
                                   <td class="align-middle">
                                        <?php echo $d->mulai; ?>-<?php echo $d->selesai; ?>
                                   </td>
                                   <td class="align-middle">
                                        <?php if ($d->status > 80 ): ?>
                                        <h6 class="align-middle">
                                             <span class="badge bg-success">
                                                  <?php echo $d->level; ?>
                                             </span>

                                             <?php elseif ($d->status > 50 ): ?>

                                             <span class="badge bg-warning">
                                                  <?php echo $d->level; ?>
                                             </span>

                                             <?php else: ?>

                                             <span class="badge bg-danger">
                                                  <?php echo $d->level; ?>
                                             </span>

                                             <?php endif; ?>
                                        </h6>
                                   </td>

                                   <td class="align-middle" style="text-align: center">
                                        <?php echo $d->status; ?> %</td>

                                   <td class="align-middle" style="text-align: center">
                                        <?php if ($d->checked == 'ACC'): ?>
                                        <h5 class="align-middle mb-0">
                                             <span class="badge bg-success">
                                                  <?php echo $d->checked; ?>
                                             </span>
                                        </h5>
                                        <?php elseif ($d->checked == 'Belum'): ?>
                                        <h5 class="align-middle mb-0">
                                             <span class="badge bg-warning">
                                                  <?php echo $d->checked; ?>
                                             </span>
                                        </h5>
                                        <?php else: ?>
                                        <h5 class="align-middle mb-0">
                                             <span class="badge bg-danger">
                                                  <?php echo $d->checked; ?>
                                             </span>
                                        </h5>
                                        <?php endif; ?>
                                   </td>
                                   <td class="align-middle" style="text-align: center">
                                   </td>
                                   <td class="align-middle" style="text-align: center; width: 50px;">
                                        <a href="<?php echo url(2) .'cek/'. enkrip($d->id); ?>"
                                             data-mdb-toggle="tooltip" title="Done"><i
                                                  class="fas fa-check text-success me-3"></i></a>

                                        <a href="<?php echo url(2) .'edit/'. enkrip($d->id); ?>"
                                             data-mdb-toggle="tooltip" title="Done"><i
                                                  class="fas fa-edit text-warning me-3"></i></a>

                                        <a href="<?php echo url(1) .'/hapus/'. enkrip($d->id); ?>"
                                             data-mdb-toggle="tooltip" title="Remove"
                                             onclick="return confirm('Yakin hapus data?')"><i
                                                  class="fas fa-trash-alt text-danger"></i></a>
                                   </td>
                              </tr>
                              <?php }} else { ?>
                              <td class="text-center" colspan="11">Tidak ada data</td>
                              <?php } ?>
                              </tbody>
                         </table><br />
                    </div>
                    <!-- end table -->

                    <?php } else { ?>

                    <!-- start table -->
                    <div class="card-body" data-mdb-perfect-scrollbar="true" style="height: 490px;overflow: auto;">
                         <a href="<?php echo base_url('Todo/add'); ?>">
                              <button type="button" class="btn btn-success"><i class=" fas fa-plus"></i>
                                   Add</button><br><br>
                         </a>
                         <table id="example" class="table mb-0">
                              <thead>

                                   <tr>
                                        <th class="align-middle" scope="col">
                                             No
                                        </th>
                                        <th class="align-middle" scope="col">
                                             Nama
                                        </th>
                                        <th class="align-middle" scope="col">Pekerjaan</th>
                                        <th class="align-middle" scope="col">Tanggal</th>
                                        <th class="align-middle" scope="col">Jam Mulai</th>
                                        <th class="align-middle" scope="col">Jam Selesai</th>
                                        <th class="align-middle" scope="col">Level</th>
                                        <th class="align-middle" scope="col">Progres</th>
                                        <th class="align-middle" scope="col" style="text-align: center">Status</th>
                                   </tr>

                              </thead>
                              <?php
                                        $no=0+1;
								if ($data_todo){
								foreach ($data_todo as $d){ 
								?>
                              <tr class="fw-normal">
                                   <th class="align-middle">
                                        <?php echo $no++; ?>
                                   </th>
                                   <th class="align-middle">
                                        <?php echo $d->user_namalengkap; ?>
                                   </th>
                                   <td class="align-middle">
                                        <?php echo $d->task; ?>
                                   </td>
                                   <td class="align-middle" style="text-align: center">
                                        <?php echo $d->date_created; ?>
                                   </td>
                                   <td class="align-middle">
                                        <?php echo $d->mulai; ?>
                                   </td>
                                   <td class="align-middle">
                                        <?php echo $d->selesai; ?>
                                   </td>
                                   <td class="align-middle">
                                        <?php if ($d->status > 80 ): ?>
                                        <h6 class="align-middle mb-0">
                                             <span class="badge bg-success">
                                                  <?php echo $d->level; ?>
                                             </span>
                                        </h6>
                                        <?php elseif ($d->status > 50 ): ?>
                                        <h6 class="align-middle mb-0">
                                             <span class="badge bg-warning">
                                                  <?php echo $d->level; ?>
                                             </span>
                                        </h6>
                                        <?php else: ?>
                                        <h6 class="align-middle mb-0">
                                             <span class="badge bg-danger">
                                                  <?php echo $d->level; ?>
                                             </span>
                                        </h6>
                                        <?php endif; ?>
                                   </td>

                                   <td class="align-middle" style="text-align: center">
                                        <?php echo $d->status; ?> %</td>

                                   <td class="align-middle" style="text-align: center">
                                        <!-- <?php echo $d->checked; ?> -->
                                        <?php if ($d->checked == 'ACC'): ?>
                                        <h6 class="align-middle mb-0">
                                             <span class="badge bg-success">
                                                  <?php echo $d->checked; ?>
                                             </span>
                                        </h6>
                                        <?php elseif ($d->checked == 'Belum'): ?>
                                        <h6 class="align-middle mb-0">
                                             <span class="badge bg-warning">
                                                  <?php echo $d->checked; ?>
                                             </span>
                                        </h6>
                                        <?php else: ?>
                                        <h6 class="align-middle mb-0">
                                             <span class="badge bg-danger">
                                                  <?php echo $d->checked; ?>
                                             </span>
                                        </h6>
                                        <?php endif; ?>
                                   </td>
                              </tr>
                              <?php }} else { ?>
                              <td class="text-center" colspan="11">Tidak ada data</td>
                              <?php } ?>
                              </tbody>
                         </table>
                    </div>
                    <!-- end table -->

                    <?php } ?>

               </div>
          </div>
     </div>
</div>
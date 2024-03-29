<div class="content-page"><br />
     <div class="content">
          <!-- Start Content-->
          <div class="container-fluid">
               <div class="card">
                    <?php if ($this->user_level == "Ka. Bag" or $this->user_level == "Sub Bag"):?>
                    <div class="card-body" data-mdb-perfect-scrollbar="true" style="height: 490px;overflow: auto;">
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
                                        <th class="align-middle" scope="col">Jam Mulai</th>
                                        <th class="align-middle" scope="col">Jam Selesai</th>
                                        <th class="align-middle" scope="col">Level</th>
                                        <th class="align-middle" scope="col">Progres</th>
                                        <th class="align-middle" scope="col" style="text-align: center">Status</th>
                                        <!-- <th class="align-middle" scope="col" style="width: 50px;">
                                             Action</th> -->
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


                    <?php else: ?>
                    <!-- Level 3 dan 4 -->
                    <div class="card-body" data-mdb-perfect-scrollbar="true" style="height: 490px;overflow: auto;">
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
                                        <th class="align-middle" scope="col">Jam Mulai</th>
                                        <th class="align-middle" scope="col">Jam Selesai</th>
                                        <th class="align-middle" scope="col">Level</th>
                                        <th class="align-middle" scope="col">Progres</th>
                                        <th class="align-middle" scope="col" style="text-align: center">Status</th>
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
                                        <?php echo $d->mulai; ?>
                                   </td>
                                   <td class="align-middle">
                                        <?php echo $d->selesai; ?>
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
                                   <!-- <td class="align-middle" style="text-align: center; width: 50px;">
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
                                   </td> -->
                              </tr>
                              <?php }} else { ?>
                              <td class="text-center" colspan="11">Tidak ada data</td>
                              <?php } ?>
                              </tbody>
                         </table><br />
                    </div>
                    <?php endif; ?>
               </div>
          </div>
     </div>
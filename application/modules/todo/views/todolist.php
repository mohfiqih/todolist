<div class="content-page">
     <div class="content">
          <!-- Start Content-->
          <div class="container-fluid">
               <div class="card">
                    <div class="card-body">
                         <div class="row">
                              <?php if ($this->user_level == "Ka. Bag" or $this->user_level == "Sub Bag"):?>
                              <!-- Tabel -->
                              <div class="card-body" data-mdb-perfect-scrollbar="true"
                                   style="height: 1010px; overflow-x: auto;">
                                   <a href="<?php echo base_url('Todo/add'); ?>">
                                        <button type="button" class="btn btn-success"><i class=" fas fa-plus"></i>
                                             Add</button><br />
                                   </a>
                                   <table id="example" class="table mb-0">
                                        <thead>

                                             <tr>
                                                  <th scope="col">
                                                       No
                                                  </th>
                                                  <th scope="col">
                                                       Nama
                                                  </th>
                                                  <th scope="col">Pekerjaan</th>
                                                  <th scope="col">Tanggal</th>
                                                  <th scope="col">Jam Mulai</th>
                                                  <th scope="col">Jam Selesai</th>
                                                  <th scope="col">Level</th>
                                                  <th scope="col">Progres</th>
                                                  <th scope="col" style="text-align: center">Status</th>
                                                  <th scope="col" style="width: 30px;">
                                                       Actions</th>
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
                                             <td class="align-middle" style="text-align: center">
                                                  <a href="<?php echo site_url('todo/cek/'.enkrip($d->id)); ?>"
                                                       data-mdb-toggle="tooltip" title="Done"><i
                                                            class="fas fa-check text-success me-3"></i></a>

                                                  <a href="<?php echo site_url('todo/edit/'.enkrip($d->id)); ?>"
                                                       data-mdb-toggle="tooltip" title="Done"><i
                                                            class="fas fa-edit text-warning me-3"></i></a>

                                                  <a href="<?php echo url(3) .'/hapus/'.enkrip($d->id); ?>"
                                                       data-mdb-toggle="tooltip" title="Remove"
                                                       onclick="return confirm('Yakin hapus data?')"><i
                                                            class="fas fa-trash-alt text-danger"></i></a>
                                             </td>
                                        </tr>
                                        <?php }} else { ?>
                                        <td class="text-center" colspan="9">Tidak ada data</td>
                                        <?php } ?>
                                        </tbody>
                                   </table><br />

                              </div>
                              <?php else: ?>
                              <table id="example" class="table mb-0">
                                   <thead>

                                        <tr>
                                             <th scope="col">
                                                  No
                                             </th>
                                             <th scope="col">
                                                  Nama
                                             </th>
                                             <th scope="col">Pekerjaan</th>
                                             <th scope="col">Tanggal</th>
                                             <th scope="col">Jam Mulai</th>
                                             <th scope="col">Jam Selesai</th>
                                             <th scope="col">Level</th>
                                             <th scope="col">Progres</th>
                                             <th scope="col" style="text-align: center">Status</th>
                                        </tr>

                                   </thead>
                                   <?php
                                        
								if ($data_todo){
								foreach ($data_todo as $d){ 
								?>
                                   <tr class="fw-normal">
                                        <th class="align-middle">
                                             <?= ++$start; ?>
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
                                   <td class="text-center" colspan="9">Tidak ada data</td>
                                   <?php } ?>
                                   </tbody>
                              </table>

                         </div>

                         <?php endif; ?>

                    </div>
               </div>
          </div>
     </div>
</div>
</div>
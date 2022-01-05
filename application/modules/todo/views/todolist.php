<div class="content-page">
     <div class="content">

          <!-- Start Content-->
          <div class="container-fluid">

               <div class="card">
                    <div class="card-body">
                         <div class="row">

                              <div class="d-flex flex-row align-items-center">
                                   <div class=" align-right" style="float: right;">
                                        <a href="<?php echo base_url('Todo/add'); ?>">
                                             <button type="button" class="btn btn-primary" style="float: right;"><i
                                                       class="fas fa-plus"></i>
                                                  Add List</button>
                                        </a>
                                   </div>
                              </div>
                              <!-- <hr class="my-4"> -->
                              <!-- Tabel -->
                              <div class="card-body" data-mdb-perfect-scrollbar="true"
                                   style="position: relative; height: 400px; overflow-x: auto;">

                                   <table class="table mb-0">
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
                                                  <th scope="col" style="text-align: center">
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
                                                  <?php echo $d->id_user; ?>
                                             </th>
                                             <td class="align-middle">
                                                  <?php echo $d->task; ?>
                                             </td>
                                             <td class="align-middle">
                                                  <?php echo $d->date_created; ?>
                                             </td>
                                             <td class="align-middle">
                                                  <?php echo $d->mulai; ?>
                                             </td>
                                             <td class="align-middle">
                                                  <?php echo $d->selesai; ?>
                                             </td>
                                             <td class="align-middle">
                                                  <h6 class="align-middle mb-0">
                                                       <span class="badge bg-success">
                                                            <?php echo $d->level; ?>
                                                       </span>
                                                  </h6>
                                             </td>
                                             <td class="align-middle" style="text-align: center">
                                                  <?php echo $d->status; ?> %</td>
                                             <td class="align-middle">

                                                  <a href="<?php echo url(1) .'/check/'. enkrip($d->checked); ?>"
                                                       data-mdb-toggle="tooltip" title="Done"><i
                                                            class="fas fa-check text-success me-3"></i></a>

                                                  <a href="<?php echo url(1) .'/edit/'. enkrip($d->id_user); ?>"
                                                       data-mdb-toggle="tooltip" title="Done"><i
                                                            class="fas fa-edit text-warning me-3"></i></a>

                                                  <a href="<?php echo url(1) .'/hapus/'. enkrip($d->id_user); ?>"
                                                       data-mdb-toggle="tooltip" title="Remove"
                                                       onclick="return confirm('Yakin hapus data?')"><i
                                                            class="fas fa-trash-alt text-danger"></i></a>
                                             </td>
                                        </tr>
                                        <?php }} else { ?>
                                        <td class="text-center" colspan="9">Tidak ada data</td>
                                        <?php } ?>
                                        </tbody>
                                   </table>
                              </div>
                              <!-- End Tabel -->
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>
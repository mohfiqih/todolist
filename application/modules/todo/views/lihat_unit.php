<div class="content-page"><br />
     <div class="content">
          <div class="container-fluid">
               <div>
                    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                         aria-label="breadcrumb">
                         <ol class="breadcrumb">
                              <li class="breadcrumb-item">
                                   <a href="<?php echo base_url('dasbor'); ?>">Home
                                   </a>
                              </li>
                              <li class="breadcrumb-item" aria-current="page">
                                   <a href="<?php echo base_url('todo'); ?>">Todolist
                                   </a>
                              </li>
                              <li class="breadcrumb-item active" aria-current="page">Detail
                              </li>
                         </ol>
                    </nav>
               </div>
               <div class="card">
                    <div class="card-body">
                         <form action="<?php echo uri(2) == "edit" ? url(1, "update") : url(1, "tambah"); ?>"
                              method="POST">

                              <div class="row">
                                   <input type="hidden" name="unit_id" value="">
                                   <div class="col-md-6">
                                        <div class="box-header with-border">
                                             <h4 class="box-title" style="margin-left: 10px;">Data Unit</h4>
                                        </div>
                                        <?php if($lihat_unit) {
                                             foreach($lihat_unit as $lu){
                                        ?>
                                        <table class="table table-hover mb-0">
                                             <tbody>
                                                  <tr>
                                                       <td>Nama Unit</td>
                                                       <td>:</td>
                                                       <td>
                                                            <?php echo $lu->unit_nama; ?>
                                                       </td>
                                                  </tr>
                                                  <tr>
                                                       <td>Inisial Unit</td>
                                                       <td>:</td>
                                                       <td>
                                                            <?php echo $lu->unit_inisial; ?>
                                                       </td>
                                                  </tr>
                                             </tbody>

                                        </table>
                                        <?php }} ?>
                                   </div>
                         </form>
                         <div class="col-md-6">
                              <div class="box-header with-border">
                                   <h4 class="box-title" style="margin-left: 10px;">Data Lain</h4>
                              </div>

                              <table class="table table-hover mb-0">
                                   <tbody>
                                        <tr>
                                             <td width="150">Total Todo</td>
                                             <td width="20">:</td>
                                             <td><?php echo $count_todo ?></td>
                                        </tr>
                                        <tr>
                                             <td>Total ACC</td>
                                             <td>:</td>
                                             <td><?php echo $count_acc ?></td>
                                        </tr>
                                        <tr>
                                             <td>Total Pending</td>
                                             <td>:</td>
                                             <td><?php echo $count_pending ?></td>
                                        </tr>
                                        <tr>
                                             <td>Total Belum</td>
                                             <td>:</td>
                                             <td><?php echo $count_belum ?></td>
                                        </tr>
                                   </tbody>
                              </table>
                         </div>
                         <div class=""><br />
                              <!-- <a href="" data-mdb-toggle="tooltip" title="Done"><button style="margin-left: 10px;"
                                        type="button" class="btn btn-warning">Edit
                                        Data</button></a> -->

                              <a href="<?php echo base_url("todo"); ?>">
                                   <button style="margin-left: 10px;" type="button"
                                        class="btn btn-danger">Kembali</button>
                              </a>
                         </div><br />
                         <!-- </form> -->
                    </div>
               </div>
          </div>
          <div class="card">
               <div class="card-body">
                    <form action="<?php echo uri(2) == "edit" ? url(1, "update") : url(1, "tambah"); ?>" method="POST">
                         <div class="row">
                              <div class="col-md-12">
                                   <div class="box-header with-border">
                                        <h4 class="box-title" style="margin-left: 10px;">Data Todolist
                                        </h4>
                                   </div>

                                   <table id="example" class="table table-hover mb-0" style="overflow-x: auto;">
                                        <thead>
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
                                                  <th class="align-middle" scope="col" style="text-align: center">Status
                                                  </th>
                                                  <th class="align-middle" scope="col" style="width: 50px;">
                                                       Action</th>
                                             </tr>
                                        </thead>

                                        <tbody>
                                             <?php
                                                  $no=0+1;
                                                  if ($todo_unit){
                                                  foreach ($todo_unit as $d){ 
                                             ?>
                                             <tr class="fw-normal">
                                                  <th class="align-middle">
                                                       <?php echo $no++; ?>
                                                  </th>
                                                  <th class="align-middle">
                                                       <?php echo $d->user_namalengkap; ?>
                                                  </th>
                                                  <th class="align-middle">
                                                       <?php echo $d->task; ?>
                                                  </th>
                                                  <th class="align-middle">
                                                       <?php echo $d->date_created; ?>
                                                  </th>
                                                  <th class="align-middle">
                                                       <?php echo $d->mulai; ?>-<?php echo $d->selesai; ?>
                                                  </th>
                                                  <th class="align-middle">
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
                                                       </h6>
                                                       <?php endif; ?>
                                                  </th>
                                                  <th class="align-middle">
                                                       <?php echo $d->status; ?> %</td>
                                                  </th>
                                                  <th class="align-middle">
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
                                                  </th>
                                                  <td class="align-middle">

                                                       <a href="" data-mdb-toggle="tooltip" title="Hapus">
                                                            <h5 class="align-middle mb-0">
                                                                 <span class="badge bg-danger"
                                                                      onclick="return confirm('Apakah Anda yakin?')">
                                                                      <i class="fas fa-trash"> Hapus </i>
                                                                 </span>

                                                            </h5>
                                                       </a>
                                                  </td>
                                             </tr>
                                             <?php }} else { ?>
                                             <td class="text-center" colspan="11">Tidak ada data</td>
                                             <?php } ?>
                                        </tbody>
                                   </table>
                              </div>
                    </form>
               </div>
               </form>
          </div>
     </div>
</div>
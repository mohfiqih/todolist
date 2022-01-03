<div class="content-page">
     <div class="content">

          <!-- Start Content-->
          <div class="container-fluid">

               <div class="card">
                    <div class="card-body">
                         <div class="row">

                              <div class="d-flex flex-row align-items-center">
                                   <!-- <nav class="breadcrumbs">
                                <a href="#home" class="breadcrumbs__item"><i class="fas fa-home"></i></a>
                                <a href="#shop" class="breadcrumbs__item">Shop</a>
                                <a href="#cart" class="breadcrumbs__item">Cart</a>
                                <a href="#checkout" class="breadcrumbs__item is-active">Checkout</a>
                            </nav> -->
                                   <!-- <a href="#!" data-mdb-toggle="tooltip" title="Set due date"><i
                                    class="fas fa-calendar-alt fa-lg me-3"
                                    style="float: right;padding-left: 25px;"></i></a>
                            <!-- <div class="search-box">
                                <button class="btn-search"><i class="fas fa-search"></i></button>
                                <input type="text" class="input-search" placeholder="Type to Search...">
                            </div> -->
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
                                                  <th scope="col">Actions</th>
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
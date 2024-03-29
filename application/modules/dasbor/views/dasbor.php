<?php if ($this->user_level == "Super Admin"){ ?>
<div class="content-page"><br />
     <div class="content">

          <!-- Start Content-->
          <div class="container-fluid">
               <div class="row">

                    <?php foreach($data_unit as $u){ ?>
                    <div class="col-xl-3 col-md-6">
                         <div class="card">
                              <a href="<?php echo url(0) .'todo/'. enkrip($u->unit_id); ?>" class="dropdown-item">
                                   <div class="card-body">
                                        <div class="widget-box-4">
                                             <div class="widget-detail-2">
                                                  <h2 class="fw-normal mb-1"><?php echo $u->unit_inisial;?></h2>
                                                  <!-- <?php if ($jml_todo) { ?>
                                                       <p class="text-muted mb-3" <?=$u->unit_id == $jml_todo ? 'selected' : null ?>><?php echo $u->unit_nama;?></p>
                                                  <?php } else { ?>
                                                       # code...
                                                  <?php
                                                  }
                                                  ?> -->
                                                  
                                                  
                                                  <h2 class="fw-normal text-primary" data-plugin="counterup">2000</h2>
                                             </div>
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div><!-- end col -->
                    <?php }?>

               </div>
          </div>
     </div> <!-- end card -->
</div>

<?php } else if ($this->user_level == "Ka. Bag" or $this->user_level == "Sub Bag") {?>

<div class="content-page"><br />
     <div class="content">

          <!-- Start Content-->
          <div class="container-fluid">
               <div class="row">

                    <div class="col-xl-3 col-md-6">
                         <div class="card">
                              <a href="<?php echo base_url('user'); ?>" class="dropdown-item">
                                   <div class="card-body">

                                        <h4 class="header-title mt-0 mb-4">Total User</h4>

                                        <div class="widget-chart-1">
                                             <div class="widget-chart-box-1 float-start" dir="ltr">
                                                  <input data-plugin="knob" data-width="70" data-height="70"
                                                       data-fgColor="#f05050 " data-bgColor="#F9B9B9"
                                                       value="<?php  echo $jml_user; ?>" data-skin="tron"
                                                       data-angleOffset="180" data-readOnly=true data-thickness=".15" />
                                             </div>

                                             <div class="widget-detail-1 text-end">
                                                  <h2 class="fw-normal pt-2 mb-1"> <?php  echo $jml_user; ?> </h2>
                                                  <p class="text-muted mb-1">Users</p>
                                             </div>
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div><!-- end col -->
                    </a>

                    <div class="col-xl-3 col-md-6">
                         <div class="card">
                              <a href="<?php echo base_url('todo'); ?>" class="dropdown-item">
                                   <div class="card-body">

                                        <h4 class="header-title mt-0 mb-4">Total Todolist</h4>

                                        <div class="widget-chart-1">
                                             <div class="widget-chart-box-1 float-start" dir="ltr">
                                                  <input data-plugin="knob" data-width="70" data-height="70"
                                                       data-fgColor="#ffbd4a" data-bgColor="#FFE6BA"
                                                       value="<?php  echo $jml_todo; ?>" data-skin="tron"
                                                       data-angleOffset="180" data-readOnly=true data-thickness=".15" />
                                             </div>
                                             <div class="widget-detail-1 text-end">
                                                  <h2 class="fw-normal pt-2 mb-1"> <?php  echo $jml_todo; ?> </h2>
                                                  <p class="text-muted mb-1">Todolist</p>
                                             </div>
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                         <div class="card">
                              <a href="<?php echo base_url('todo/acc'); ?>" class="dropdown-item">
                                   <div class="card-body">

                                        <h4 class="header-title mt-0 mb-3">Total Selesai</h4>

                                        <div class="widget-box-2">
                                             <div class="widget-detail-2 text-end">
                                                  <span class="badge bg-success rounded-pill float-start mt-3"><?php  echo $jml_acc; ?>
                                                       <i class="mdi mdi-trending-up"></i> </span>
                                                  <h2 class="fw-normal mb-1"> <?php  echo $jml_acc; ?> </h2>
                                                  <p class="text-muted mb-3">ACC</p>
                                             </div>
                                             <div class="progress progress-bar-alt-success progress-sm">
                                                  <div class="progress-bar bg-success" role="progressbar"
                                                       aria-valuemax="100" style="width: 77%;">
                                                       <span class="visually-hidden"><?php  echo $jml_acc; ?></span>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div><!-- end col -->


                    <div class="col-xl-3 col-md-6">
                         <div class="card">
                              <a href="<?php echo base_url('todo/belum'); ?>" class="dropdown-item">
                                   <div class="card-body">

                                        <h4 class="header-title mt-0 mb-3">Total Belum Selesai</h4>

                                        <div class="widget-box-2">
                                             <div class="widget-detail-2 text-end">
                                                  <span class="badge bg-warning rounded-pill float-start mt-3">
                                                       <i class="mdi mdi-trending-up"></i> </span>
                                                  <h2 class="fw-normal mb-1"><?php echo $jml_belum; ?></h2>
                                                  <p class="text-muted mb-3">Belum</p>
                                             </div>
                                             <div class="progress progress-bar-alt-success progress-sm">
                                                  <div class="progress-bar bg-warning" role="progressbar"
                                                       aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"
                                                       style="width: 77%;">
                                                       <span class="visually-hidden"><?php echo $jml_belum; ?></span>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div><!-- end col -->

                    <div class="col-xl-4">
                         <div class="card">
                              <a href="<?php echo base_url('todo/pending'); ?>" class="dropdown-item">
                                   <div class="card-body">

                                        <h4 class="header-title mt-0 mb-3">Total Pending</h4>

                                        <div class="widget-box-2">
                                             <div class="widget-detail-2 text-end">
                                                  <span class="badge bg-danger rounded-pill float-start mt-3"><?php  echo $jml_pending; ?>
                                                       <i class="mdi mdi-trending-up"></i> </span>
                                                  <h2 class="fw-normal mb-1"><?php  echo $jml_pending; ?></h2>
                                                  <p class="text-muted mb-3">Pending</p>
                                             </div>
                                             <div class="progress progress-bar-alt-success progress-sm">
                                                  <div class="progress-bar bg-danger" role="progressbar"
                                                       aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"
                                                       style="width: 77%;">
                                                       <span class="visually-hidden"><?php  echo $jml_pending; ?></span>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div><!-- end col -->

                    <div class="col-xl-8">
                         <div class="card">
                              <div class="card-body">

                                   <h4 class="header-title mt-0 mb-3">Project Selesai</h4>

                                   <div class="table-responsive">
                                        <table class="table table-hover mb-0">
                                             <thead>
                                                  <tr>
                                                       <th>No</th>
                                                       <th>Nama Lengkap</th>
                                                       <th>Pekerjaan</th>
                                                       <th>Level</th>
                                                       <th>Progress</th>
                                                       <th>Status</th>
                                                  </tr>
                                             </thead>
                                             <!-- <?php
                                                  $no=0+1;
                                                  if ($data_todo){
                                                  foreach ($data_todo as $d){ 
                                                  ?> -->
                                             <tbody>
                                                  <tr>
                                                       <!-- <td><?php echo $no++; ?></td> -->
                                                       <!-- <td><?php echo $d->user_namalengkap; ?></td> -->
                                                       <!-- <td><?php echo $d->task; ?></td> -->
                                                       <td class="align-middle">
                                                            <!-- <?php if ($d->status > 80 ): ?> -->
                                                            <h6 class="align-middle">
                                                                 <span class="badge bg-success">
                                                                      <!-- <?php echo $d->level; ?> -->
                                                                 </span>

                                                                 <!-- <?php elseif ($d->status > 50 ): ?> -->

                                                                 <span class="badge bg-warning">
                                                                      <!-- <?php echo $d->level; ?> -->
                                                                 </span>

                                                                 <!-- <?php else: ?> -->

                                                                 <span class="badge bg-danger">
                                                                      <!-- <?php echo $d->level; ?> -->
                                                                 </span>

                                                                 <!-- <?php endif; ?> -->
                                                            </h6>
                                                       </td>
                                                       <td class="align-middle" style="text-align: center">
                                                            <!-- <?php echo $d->status; ?> % -->
                                                       </td>
                                                       <td class="align-middle" style="text-align: center">
                                                            <!-- <?php if ($d->checked == 'ACC'): ?> -->
                                                            <h6 class="align-middle mb-0">
                                                                 <span class="badge bg-success">
                                                                      <!-- <?php echo $d->checked; ?> -->
                                                                 </span>
                                                            </h6>
                                                            <!-- <?php elseif ($d->checked == 'Belum'): ?> -->
                                                            <h6 class="align-middle mb-0">
                                                                 <span class="badge bg-warning">
                                                                      <!-- <?php echo $d->checked; ?> -->
                                                                 </span>
                                                            </h6>
                                                            <!-- <?php else: ?> -->
                                                            <h6 class="align-middle mb-0">
                                                                 <span class="badge bg-danger">
                                                                      <!-- <?php echo $d->checked; ?> -->
                                                                 </span>
                                                            </h6>
                                                            <!-- <?php endif; ?> -->
                                                       </td>
                                                  </tr>
                                                  <!-- <?php }} else { ?>
                                                  <td class="text-center" colspan="9">Tidak ada data</td>
                                                  <?php } ?> -->
                                             </tbody>
                                        </table>
                                   </div>

                              </div>
                         </div>

                    </div><!-- end col -->

                    <div class="col-xl-4">
                         <div class="card">
                              <div class="card-body">

                                   <h4 class="header-title mt-0">Statistics</h4>
                                   <svg height="280" version="1.1" width="283" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        style="overflow: hidden; position: relative; left: -0.640625px; top: -0.796875px;">

                                        <defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text
                                             x="30.7109375" y="241" text-anchor="end" font-family="sans-serif"
                                             font-size="12px" stroke="none" fill="#888888"
                                             style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                                             font-weight="normal">
                                             <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0
                                             </tspan>
                                        </text>
                                        <path fill="none" stroke="#adb5bd" d="M43.2109375,241.5H258"
                                             stroke-opacity="0.1" stroke-width="0.5"
                                             style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text
                                             x="30.7109375" y="187" text-anchor="end" font-family="sans-serif"
                                             font-size="12px" stroke="none" fill="#888888"
                                             style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                                             font-weight="normal">
                                             <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">25
                                             </tspan>
                                        </text>
                                        <path fill="none" stroke="#adb5bd" d="M43.2109375,187.5H258"
                                             stroke-opacity="0.1" stroke-width="0.5"
                                             style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text
                                             x="30.7109375" y="133" text-anchor="end" font-family="sans-serif"
                                             font-size="12px" stroke="none" fill="#888888"
                                             style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                                             font-weight="normal">
                                             <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">50
                                             </tspan>
                                        </text>
                                        <path fill="none" stroke="#adb5bd" d="M43.2109375,133.5H258"
                                             stroke-opacity="0.1" stroke-width="0.5"
                                             style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text
                                             x="30.7109375" y="79" text-anchor="end" font-family="sans-serif"
                                             font-size="12px" stroke="none" fill="#888888"
                                             style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                                             font-weight="normal">
                                             <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">75
                                             </tspan>
                                        </text>
                                        <path fill="none" stroke="#adb5bd" d="M43.2109375,79.5H258" stroke-opacity="0.1"
                                             stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                        </path><text x="30.7109375" y="25" text-anchor="end" font-family="sans-serif"
                                             font-size="12px" stroke="none" fill="#888888"
                                             style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                                             font-weight="normal">
                                             <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">400
                                             </tspan>
                                        </text>
                                        <path fill="none" stroke="#adb5bd" d="M43.2109375,25.5H258" stroke-opacity="0.1"
                                             stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                        </path>
                                        </text><text x="168.50455729166669" y="253.5" text-anchor="middle"
                                             font-family="sans-serif" font-size="12px" stroke="none" fill="#888888"
                                             style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                                             font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                                             <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Belum
                                             </tspan>
                                        </text><text x="132.70638020833331" y="253.5" text-anchor="middle"
                                             font-family="sans-serif" font-size="12px" stroke="none" fill="#888888"
                                             style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                                             font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                                             <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">ACC
                                             </tspan>
                                        </text><text x="96.908203125" y="253.5" text-anchor="middle"
                                             font-family="sans-serif" font-size="12px" stroke="none" fill="#888888"
                                             style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                                             font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                                             <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Todo
                                             </tspan>
                                        </text><text x="61.11002604166667" y="253.5" text-anchor="middle"
                                             font-family="sans-serif" font-size="12px" stroke="none" fill="#888888"
                                             style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                                             font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                                             <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">User
                                             </tspan>
                                        </text>
                                        <!-- User -->
                                        <rect x="57.530208333333334" y="230" width="7.159635416666667"
                                             height="<?php echo $jml_user; ?>" rx="0" ry="0" fill="#188ae2"
                                             stroke="none">
                                        </rect>
                                        <!-- Todo -->
                                        <rect x="93.32838541666668" y="232" width="7.159635416666667"
                                             height="<?php  echo $jml_todo; ?>" rx="0" ry="0" fill="#188ae2"
                                             stroke="none" fill-opacity="1">
                                        </rect>
                                        <!-- ACC -->
                                        <rect x="129.1265625" y="79" width="7.159635416666667" height="162" rx="0"
                                             ry="0" fill="#188ae2" stroke="none" fill-opacity="1"
                                             style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;">
                                        </rect>
                                        <!-- Belum -->
                                        <rect x="164.92473958333335" y="158.92" width="7.159635416666667"
                                             height="82.08000000000001" rx="0" ry="0" fill="#188ae2" stroke="none"
                                             fill-opacity="1"
                                             style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;">
                                        </rect>
                                        <!-- <rect x="200.72291666666666" y="199.95999999999998" width="7.159635416666667"
                                             height="41.04000000000002" rx="0" ry="0" fill="#188ae2" stroke="none"
                                             fill-opacity="1"
                                             style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;">
                                        </rect>
                                        <rect x="236.52109375000003" y="40.119999999999976" width="7.159635416666667"
                                             height="200.88000000000002" rx="0" ry="0" fill="#188ae2" stroke="none"
                                             fill-opacity="1"
                                             style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;">
                                        </rect> -->
                                   </svg>
                              </div>
                         </div>
                    </div>
               </div>

          </div> <!-- end card -->
     </div><!-- end col -->
</div>
<!-- end row -->
<?php } else { ?>
<div class="content-page"><br />
     <div class="content">

          <!-- Start Content-->
          <div class="container-fluid">
               <div class="row">

                    <div class="col-xl-3 col-md-6">
                         <div class="card">
                              <a href="<?php echo base_url('todo'); ?>" class="dropdown-item">
                                   <div class="card-body">

                                        <h4 class="header-title mt-0 mb-4">Total Todolist</h4>

                                        <div class="widget-chart-1">
                                             <div class="widget-chart-box-1 float-start" dir="ltr">
                                                  <input data-plugin="knob" data-width="70" data-height="70"
                                                       data-fgColor="#ffbd4a" data-bgColor="#FFE6BA"
                                                       value="<?php  echo $jml_todo; ?>" data-skin="tron"
                                                       data-angleOffset="180" data-readOnly=true data-thickness=".15" />
                                             </div>
                                             <div class="widget-detail-1 text-end">
                                                  <h2 class="fw-normal pt-2 mb-1"> <?php  echo $jml_todo; ?> </h2>
                                                  <p class="text-muted mb-1">Todolist</p>
                                             </div>
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                         <div class="card">
                              <a href="<?php echo base_url('todo/acc'); ?>" class="dropdown-item">
                                   <div class="card-body">

                                        <h4 class="header-title mt-0 mb-3">Total Selesai</h4>

                                        <div class="widget-box-2">
                                             <div class="widget-detail-2 text-end">
                                                  <span class="badge bg-success rounded-pill float-start mt-3"><?php  echo $jml_acc; ?>
                                                       <i class="mdi mdi-trending-up"></i> </span>
                                                  <h2 class="fw-normal mb-1"> <?php  echo $jml_acc; ?> </h2>
                                                  <p class="text-muted mb-3">ACC</p>
                                             </div>
                                             <div class="progress progress-bar-alt-success progress-sm">
                                                  <div class="progress-bar bg-success" role="progressbar"
                                                       aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"
                                                       style="width: 77%;">
                                                       <span class="visually-hidden"><?php  echo $jml_acc; ?></span>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div><!-- end col -->


                    <div class="col-xl-3 col-md-6">
                         <div class="card">
                              <a href="<?php echo base_url('todo/belum'); ?>" class="dropdown-item">
                                   <div class="card-body">

                                        <h4 class="header-title mt-0 mb-3">Total Belum Selesai</h4>

                                        <div class="widget-box-2">
                                             <div class="widget-detail-2 text-end">
                                                  <span class="badge bg-warning rounded-pill float-start mt-3"><?php  echo $jml_belum; ?>
                                                       <i class="mdi mdi-trending-up"></i></span>
                                                  <h2 class="fw-normal mb-1"><?php  echo $jml_belum; ?></h2>
                                                  <p class="text-muted mb-3">Belum</p>
                                             </div>
                                             <div class="progress progress-bar-alt-success progress-sm">
                                                  <div class="progress-bar bg-warning" role="progressbar"
                                                       aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"
                                                       style="width: 77%;">
                                                       <span class="visually-hidden"><?php  echo $jml_belum; ?></span>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div><!-- end col -->


                    <div class="col-xl-3 col-md-6">
                         <div class="card">
                              <a href="<?php echo base_url('todo/pending'); ?>" class="dropdown-item">
                                   <div class="card-body">

                                        <h4 class="header-title mt-0 mb-3">Total Pending</h4>

                                        <div class="widget-box-2">
                                             <div class="widget-detail-2 text-end">
                                                  <span class="badge bg-danger rounded-pill float-start mt-3"><?php  echo $jml_pending; ?>
                                                       <i class="mdi mdi-trending-up"></i> </span>
                                                  <h2 class="fw-normal mb-1"> <?php  echo $jml_pending; ?> </h2>
                                                  <p class="text-muted mb-3">Pending</p>
                                             </div>
                                             <div class="progress progress-bar-alt-success progress-sm">
                                                  <div class="progress-bar bg-danger" role="progressbar"
                                                       aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"
                                                       style="width: 77%;">
                                                       <span class="visually-hidden"><?php  echo $jml_pending; ?></span>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div><!-- end col -->

                    <div class="col-xl-8">
                         <div class="card">
                              <div class="card-body">
                                   <div class="dropdown float-end">
                                        <!-- <a href="#" class="dropdown-toggle arrow-none card-drop"
                                             data-bs-toggle="dropdown" aria-expanded="false">
                                             <i class="mdi mdi-dots-vertical"></i>
                                        </a> -->
                                        <div class="dropdown-menu dropdown-menu-end">
                                             <!-- item-->
                                             <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                             <!-- item-->
                                             <a href="javascript:void(0);" class="dropdown-item">Another
                                                  action</a>
                                             <!-- item-->
                                             <a href="javascript:void(0);" class="dropdown-item">Something
                                                  else</a>
                                             <!-- item-->
                                             <a href="javascript:void(0);" class="dropdown-item">Separated
                                                  link</a>
                                        </div>
                                   </div>


                                   <h4 class="header-title mt-0 mb-3">Project Selesai</h4>

                                   <div class="table-responsive">
                                        <table class="table table-hover mb-0">
                                             <thead>
                                                  <tr>
                                                       <th>No</th>
                                                       <th>Nama Lengkap</th>
                                                       <th>Pekerjaan</th>
                                                       <th>Level</th>
                                                       <th>Progress</th>
                                                       <th>Status</th>
                                                  </tr>
                                             </thead>
                                             <!-- <?php
                                                  $no=0+1;
                                                  if ($data_todo){
                                                  foreach ($data_todo as $d){ 
                                                  ?> -->
                                             <tbody>
                                                  <tr>
                                                       <!-- <td><?php echo $no++; ?></td> -->
                                                       <!-- <td><?php echo $d->user_namalengkap; ?></td> -->
                                                       <!-- <td><?php echo $d->task; ?></td> -->
                                                       <td class="align-middle">
                                                            <!-- <?php if ($d->status > 80 ): ?> -->
                                                            <h6 class="align-middle">
                                                                 <span class="badge bg-success">
                                                                      <!-- <?php echo $d->level; ?> -->
                                                                 </span>

                                                                 <!-- <?php elseif ($d->status > 50 ): ?> -->

                                                                 <span class="badge bg-warning">
                                                                      <!-- <?php echo $d->level; ?> -->
                                                                 </span>

                                                                 <!-- <?php else: ?> -->

                                                                 <span class="badge bg-danger">
                                                                      <!-- <?php echo $d->level; ?> -->
                                                                 </span>

                                                                 <!-- <?php endif; ?> -->
                                                            </h6>
                                                       </td>
                                                       <td class="align-middle" style="text-align: center">
                                                            <!-- <?php echo $d->status; ?> % -->
                                                       </td>
                                                       <td class="align-middle" style="text-align: center">
                                                            <!-- <?php if ($d->checked == 'ACC'): ?> -->
                                                            <h6 class="align-middle mb-0">
                                                                 <span class="badge bg-success">
                                                                      <!-- <?php echo $d->checked; ?> -->
                                                                 </span>
                                                            </h6>
                                                            <!-- <?php elseif ($d->checked == 'Belum'): ?> -->
                                                            <h6 class="align-middle mb-0">
                                                                 <span class="badge bg-warning">
                                                                      <!-- <?php echo $d->checked; ?> -->
                                                                 </span>
                                                            </h6>
                                                            <!-- <?php else: ?> -->
                                                            <h6 class="align-middle mb-0">
                                                                 <span class="badge bg-danger">
                                                                      <!-- <?php echo $d->checked; ?> -->
                                                                 </span>
                                                            </h6>
                                                            <!-- <?php endif; ?> -->
                                                       </td>
                                                  </tr>
                                                  <!-- <?php }} else { ?>
                                                  <td class="text-center" colspan="9">Tidak ada data</td>
                                                  <?php } ?> -->
                                             </tbody>
                                        </table>
                                   </div>

                              </div>
                         </div>

                    </div><!-- end col -->
               </div>
          </div>
     </div> <!-- end card -->
</div><!-- end col -->
</div>
<?php } ?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="utf-8" />

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

     <title>Todo-List</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <meta name="description" content="Politeknik Harapan Bersama">
     <meta name="author" content="@PHBDev">
     <meta name="robots" content="noindex, nofollow">

     <!-- Open Graph Meta -->
     <meta property="og:title" content="Politeknik Harapan Bersama">
     <meta property="og:site_name" content="Politeknik Harapan Bersama">
     <meta property="og:description" content="Politeknik Harapan Bersama">
     <meta property="og:type" content="website">
     <meta property="og:url" content="">
     <meta property="og:image" content="">

     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
     <link rel="stylesheet" href="/resources/demos/style.css">
     <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
     <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

     <!-- App favicon -->
     <link rel="shortcut icon" href="<?php echo base_url('assets/backend'); ?>/images/phb.png">

     <!-- Plugins css -->
     <link href="<?php echo base_url('assets/backend'); ?>/libs/spectrum-colorpicker2/spectrum.min.css" rel="stylesheet"
          type="text/css">
     <link href="<?php echo base_url('assets/backend'); ?>/libs/flatpickr/flatpickr.min.css" rel="stylesheet"
          type="text/css" />
     <link href="<?php echo base_url('assets/backend'); ?>/libs/clockpicker/bootstrap-clockpicker.min.css"
          rel="stylesheet" type="text/css" />
     <link href="<?php echo base_url('assets/backend'); ?>/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css"
          rel="stylesheet" type="text/css" />
     <link href="<?php echo base_url('assets/backend'); ?>/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css"
          rel="stylesheet" type="text/css" />


     <link href="<?php echo base_url('assets/backend'); ?>/css/config/default/bootstrap-dark.min.css" rel="stylesheet"
          type="text/css" id="bs-dark-stylesheet" disabled="disabled" />
     <link href="<?php echo base_url('assets/backend'); ?>/css/config/default/app-dark.min.css" rel="stylesheet"
          type="text/css" id="app-dark-stylesheet" disabled="disabled" />

     <!-- App css -->
     <link href="<?php echo base_url('assets/backend'); ?>/css/config/default/bootstrap.min.css" rel="stylesheet"
          type="text/css" id="bs-default-stylesheet" />
     <link href="<?php echo base_url('assets/backend'); ?>/css/config/default/app.min.css" rel="stylesheet"
          type="text/css" id="app-default-stylesheet" />

     <!-- slider -->
     <link href="<?php echo base_url('assets/backend'); ?>/css/config/default/bootstrap-dark.min.css" rel="stylesheet"
          type="text/css" id="bs-dark-stylesheet" disabled="disabled" />
     <link href="<?php echo base_url('assets/backend'); ?>/css/config/default/app-dark.min.css" rel="stylesheet"
          type="text/css" id="app-dark-stylesheet" disabled="disabled" />

     <!-- datepicker -->
     <link href="<?php echo base_url('assets/backend'); ?>/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css"
          rel="stylesheet" type="text/css" />
     <link href="<?php echo base_url('assets/backend'); ?>/libs/flatpickr/flatpickr.min.css" rel="stylesheet"
          type="text/css" />
     <link href="<?php echo base_url('assets/backend'); ?>/libs/clockpicker/bootstrap-clockpicker.min.css"
          rel="stylesheet" type="text/css" />
     <link href="<?php echo base_url('assets/backend'); ?>/libs/bootstrap-datepicker/css/bootstrap-datepicker.standalone.min.css"
          rel="stylesheet" type="text/css" />
     <link href="<?php echo base_url('assets/backend'); ?>/libs/bootstrap-datepicker/css/bootstrap-datepicker3.min.css"
          rel="stylesheet" type="text/css" />
     <link href="<?php echo base_url('assets/backend'); ?>/libs/spectrum-colorpicker2/spectrum.min.css" rel="stylesheet"
          type="text/css" />

     <!-- ION Slider -->
     <link href="<?php echo base_url('assets/backend'); ?>/libs/ion-rangeslider/css/ion.rangeSlider.min.css"
          rel="stylesheet" type="text/css" />

     <!-- Notification css (Toastr) -->
     <link href="<?php echo base_url('assets/backend'); ?>/libs/toastr/build/toastr.min.css" rel="stylesheet"
          type="text/css" />
     <link href="<?php echo base_url('assets/backend'); ?>/css/todolist.css" rel="stylesheet" type="text/css" />

     <!-- icons -->
     <link href="<?php echo base_url('assets/backend'); ?>/css/icons.min.css" rel="stylesheet" type="text/css" />
</head>


<!-- body start -->

<body class="loading"
     data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "light"}, "showRightSidebarOnPageLoad": true}'>

     <!-- Begin page -->
     <div id="wrapper">

          <!-- Topbar Start -->
          <div class="navbar-custom">
               <ul class="list-unstyled topnav-menu float-end mb-0">
                    <li class="dropdown d-inline-block d-lg-none">
                         <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light"
                              data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                              aria-expanded="false">
                              <i class="fe-search noti-icon"></i>
                         </a>
                         <div class="dropdown-menu dropdown-lg dropdown-menu-end p-0">
                              <form class="p-3">
                                   <input type="text" class="form-control" placeholder="Search ..."
                                        aria-label="Recipient's username">
                              </form>
                         </div>
                    </li>

                    <li class="dropdown notification-list topbar-dropdown">
                         <a class="nav-link dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" href="#"
                              role="button" aria-haspopup="false" aria-expanded="false">
                              <i class="fe-bell noti-icon"></i>
                              <span class="badge bg-danger rounded-circle noti-icon-badge">9</span>
                         </a>
                         <div class="dropdown-menu dropdown-menu-end dropdown-lg">

                              <!-- item-->
                              <div class="dropdown-item noti-title">
                                   <h5 class="m-0">
                                        <span class="float-end">
                                             <a href="" class="text-dark">
                                                  <small>Clear All</small>
                                             </a>
                                        </span>Notification
                                   </h5>
                              </div>

                              <div class="noti-scroll" data-simplebar>

                                   <!-- item-->
                                   <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                        <div class="notify-icon">
                                             <img src="<?php echo base_url('assets/backend'); ?>/images/phb.png"
                                                  class="img-fluid rounded-circle" alt="" />
                                        </div>
                                        <p class="notify-details">Cristina Pride</p>
                                        <p class="text-muted mb-0 user-msg">
                                             <small>Hi, How are you? What about our next meeting</small>
                                        </p>
                                   </a>

                                   <!-- item-->
                                   <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-primary">
                                             <i class="mdi mdi-comment-account-outline"></i>
                                        </div>
                                        <p class="notify-details">Caleb Flakelar commented on Admin
                                             <small class="text-muted">1 min ago</small>
                                        </p>
                                   </a>

                                   <!-- item-->
                                   <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon">
                                             <img src="<?php echo base_url('assets/backend'); ?>/images/users/user-4.jpg"
                                                  class="img-fluid rounded-circle" alt="" />
                                        </div>
                                        <p class="notify-details">Karen Robinson</p>
                                        <p class="text-muted mb-0 user-msg">
                                             <small>Wow ! this admin looks good and awesome design</small>
                                        </p>
                                   </a>

                                   <!-- item-->
                                   <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-warning">
                                             <i class="mdi mdi-account-plus"></i>
                                        </div>
                                        <p class="notify-details">New user registered.
                                             <small class="text-muted">5 hours ago</small>
                                        </p>
                                   </a>

                                   <!-- item-->
                                   <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-info">
                                             <i class="mdi mdi-comment-account-outline"></i>
                                        </div>
                                        <p class="notify-details">Caleb Flakelar commented on Admin
                                             <small class="text-muted">4 days ago</small>
                                        </p>
                                   </a>

                                   <!-- item-->
                                   <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-secondary">
                                             <i class="mdi mdi-heart"></i>
                                        </div>
                                        <p class="notify-details">Carlos Crouch liked
                                             <b>Admin</b>
                                             <small class="text-muted">13 days ago</small>
                                        </p>
                                   </a>
                              </div>

                              <!-- All-->
                              <a href="javascript:void(0);"
                                   class="dropdown-item text-center text-primary notify-item notify-all">
                                   View all
                                   <i class="fe-arrow-right"></i>
                              </a>
                         </div>
                    </li>

                    <li class="dropdown notification-list topbar-dropdown">
                         <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light"
                              data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                              aria-expanded="false">
                              <img src="<?php echo base_url('assets/backend'); ?>/images/phb.png" alt="user-image"
                                   class="rounded-circle">
                              <span class="pro-user-name ms-1">
                                   <?php echo $this->user_nama; ?> <i class="mdi mdi-chevron-down"></i>
                              </span>
                         </a>
                         <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                              <!-- item-->
                              <div class="dropdown-header noti-title">
                                   <h6 class="text-overflow m-0 text-center"><?php echo $this->user_namalengkap; ?></h6>
                              </div>

                              <!-- item-->
                              <a href="<?php echo base_url('profil'); ?>" class="dropdown-item notify-item">
                                   <i class="fe-user"></i>
                                   <span>Profil</span>
                              </a>

                              <!-- item-->
                              <a href="<?php echo base_url('logout'); ?>" class="dropdown-item notify-item">
                                   <i class="fe-log-out"></i>
                                   <span>Logout</span>
                              </a>
                         </div>
                    </li>
               </ul>

               <!-- LOGO -->
               <div class="logo-box">
                    <a href="<?php echo base_url('.'); ?>" class="logo logo-light text-center">
                         <span class="logo-sm">
                              <h3 class="d-inline">PHB</h3>
                         </span>

                         <span class="logo-lg">
                              <h3 class="d-inline">PHB UI</h3>
                         </span>
                    </a>

                    <a href="<?php echo base_url('.'); ?>" class="logo logo-dark text-center">
                         <span class="logo-sm">
                              <h3 class="d-inline">PHB</h3>
                         </span>
                         <span class="logo-lg">
                              <h3 class="d-inline">PHB UI</h3>
                         </span>
                    </a>
               </div>

               <ul class="list-unstyled topnav-menu topnav-menu-left mb-0">
                    <li>
                         <button class="button-menu-mobile waves-effect">
                              <i class="fe-menu"></i>
                         </button>
                    </li>

                    <li>
                         <h4 class="page-title-main"><?php echo $judul; ?></h4>
                    </li>

               </ul>

               <div class="clearfix"></div>

          </div>
          <!-- end Topbar -->

          <!-- ========== Left Sidebar Start ========== -->
          <div class="left-side-menu">
               <div class="h-100" data-simplebar>

                    <?php if ($this->user_level == "Ka. Bag" or $this->user_level == "Sub Bag"):?>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                         <ul id="side-menu">
                              <li class="menu-title">Navigation</li>
                              <li>
                                   <a href="<?php echo base_url('Dasbor/index'); ?>">
                                        <i class="mdi mdi-view-dashboard"></i>
                                        <span>Dasbor</span>
                                   </a>
                              </li>
                              <li>
                                   <a href="<?php echo base_url('todo'); ?>">
                                        <i class="mdi mdi-clipboard-list"></i>
                                        <span>Todo-List</span>
                                   </a>
                              </li>
                              <li>
                                   <a href="#sidebarMultilevel" data-bs-toggle="collapse">
                                        <i class="mdi mdi-share-variant"></i>
                                        <span> Multi Level </span>
                                        <span class="menu-arrow"></span>
                                   </a>
                                   <div class="collapse" id="sidebarMultilevel">
                                        <ul class="nav-second-level">
                                             <li>
                                                  <a href="#sidebarMultilevel2" data-bs-toggle="collapse">
                                                       Second Level <span class="menu-arrow"></span>
                                                  </a>
                                                  <div class="collapse" id="sidebarMultilevel2">
                                                       <ul class="nav-second-level">
                                                            <li>
                                                                 <a href="javascript: void(0);">Item 1</a>
                                                            </li>
                                                            <li>
                                                                 <a href="javascript: void(0);">Item 2</a>
                                                            </li>
                                                       </ul>
                                                  </div>
                                             </li>

                                             <li>
                                                  <a href="#sidebarMultilevel3" data-bs-toggle="collapse">
                                                       Third Level <span class="menu-arrow"></span>
                                                  </a>
                                                  <div class="collapse" id="sidebarMultilevel3">
                                                       <ul class="nav-second-level">
                                                            <li>
                                                                 <a href="javascript: void(0);">Item 1</a>
                                                            </li>
                                                            <li>
                                                                 <a href="#sidebarMultilevel4"
                                                                      data-bs-toggle="collapse">
                                                                      Item 2 <span class="menu-arrow"></span>
                                                                 </a>
                                                                 <div class="collapse" id="sidebarMultilevel4">
                                                                      <ul class="nav-second-level">
                                                                           <li>
                                                                                <a href="javascript: void(0);">Item
                                                                                     1</a>
                                                                           </li>
                                                                           <li>
                                                                                <a href="javascript: void(0);">Item
                                                                                     2</a>
                                                                           </li>
                                                                      </ul>
                                                                 </div>
                                                            </li>
                                                       </ul>
                                                  </div>
                                             </li>
                                        </ul>
                                   </div>
                              </li>

                              <li class="menu-title mt-2">Master Data</li>
                              <li>
                                   <a href="<?php echo base_url('user'); ?>">
                                        <i class="fa fa-users"></i>
                                        <span>User</span>
                                   </a>
                              </li>
                         </ul>

                    </div>
                    <!-- End Sidebar -->

                    <?php else: ?>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                         <ul id="side-menu">
                              <li class="menu-title">Navigation</li>
                              <li>
                                   <a href="<?php echo base_url('dasbor'); ?>">
                                        <i class="mdi mdi-view-dashboard"></i>
                                        <span>Dasbor</span>
                                   </a>
                              </li>
                              <li>
                                   <a href="<?php echo base_url('todo'); ?>">
                                        <i class="mdi mdi-clipboard-list"></i>
                                        <span>Todo-List</span>
                                   </a>
                              </li>
                         </ul>
                    </div>

                    <?php endif; ?>
                    <!-- End Sidebar -->
                    <div class="clearfix"></div>
               </div>
               <!-- Sidebar -left -->

          </div>
          <!-- Left Sidebar End -->

          <!-- ============================================================== -->
          <!-- Start Page Content here -->
          <!-- ============================================================== -->

          <?php $this->load->view($view); ?>

          <!-- ============================================================== -->
          <!-- End Page content -->
          <!-- ============================================================== -->


          <!-- Footer Start -->
          <footer class="footer">
               <div class="container-fluid">
                    <div class="row">
                         <div class="col-md-6">
                              <script>
                              document.write(new Date().getFullYear())
                              </script> &copy; Todo-List by<a href=""> TIK</a>
                         </div>
                         <div class="col-md-6">
                              <div class="text-md-end footer-links d-none d-sm-block">
                                   <a href="javascript:void(0);">About Us</a>
                                   <a href="javascript:void(0);">Help</a>
                                   <a href="javascript:void(0);">Contact Us</a>
                              </div>
                         </div>
                    </div>
               </div>
          </footer>
          <!-- end Footer -->
     </div>
     <!-- END wrapper -->

     <!-- Vendor js -->
     <script src="<?php echo base_url('assets/backend'); ?>/js/vendor.min.js"></script>

     <!-- knob plugin -->
     <script src="<?php echo base_url('assets/backend'); ?>/libs/jquery-knob/jquery.knob.min.js"></script>

     <!--Morris Chart-->
     <script src="<?php echo base_url('assets/backend'); ?>/libs/morris.js06/morris.min.js"></script>
     <script src="<?php echo base_url('assets/backend'); ?>/libs/raphael/raphael.min.js"></script>

     <!-- datepicker -->

     <!-- Plugins js-->
     <script src="<?php echo base_url('assets/backend'); ?>/libs/flatpickr/flatpickr.min.js"></script>
     <script src="<?php echo base_url('assets/backend'); ?>/libs/spectrum-colorpicker2/spectrum.min.js"></script>
     <script src="<?php echo base_url('assets/backend'); ?>/libs/clockpicker/bootstrap-clockpicker.min.js"></script>
     <script src="<?php echo base_url('assets/backend'); ?>/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js">
     </script>

     <!-- Init js-->
     <script src="<?php echo base_url('assets/backend'); ?>/js/pages/form-pickers.init.js"></script>

     <!-- App js -->
     <script src="<?php echo base_url('assets/backend'); ?>/js/app.min.js"></script>


     <!-- ION Sider JS -->

     <!-- Ion Range Slider-->
     <script src="<?php echo base_url('assets/backend'); ?>/libs/ion-rangeslider/js/ion.rangeSlider.min.js"></script>

     <!-- Range slider init js-->
     <script src="<?php echo base_url('assets/backend'); ?>/js/pages/range-sliders.init.js"></script>

     <!-- Optional JavaScript -->
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->

     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
          integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
     </script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
          integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
     </script>

     <script>
     toastr.options = {
          "newestOnTop": true,
          "positionClass": "toast-top-right",
          "preventDuplicates": true
     }
     </script>

     <script type="text/javascript">
     $('.clockpicker').clockpicker();
     </script>

     <!-- App js-->
     <script src="<?php echo base_url('assets/backend'); ?>/js/app.min.js"></script>

     <?php echo $this->session->flashdata('notifikasi'); ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <title>Login | Todo-List</title>
     <link rel="shortcut icon" href="https://oase.poltektegal.ac.id/assets/backend/media/favicons/favicon.png" />
     <meta name="description" content="Online Academic Service Politeknik Harapan Bersama Tegal" />
     <meta name="author" content="sisfo360" />
     <meta name="robots" content="index, follow" />
     <meta property="og:title" content="Login | OASE - Politeknik Harapan Bersama Tegal" />
     <meta property="og:site_name" content="OASE" />
     <meta property="og:description" content="Online Academic Service Politeknik Harapan Bersama Tegal" />
     <meta property="og:type" content="website" />
     <meta property="og:url" content="https://oase.poltektegal.ac.id" />
     <meta property="og:image" content="https://oase.poltektegal.ac.id/assets/poltek.png" />

     <link rel="stylesheet" type="text/css" href="assets/backend/css/login/bootstrap.min.css" />
     <link rel="stylesheet" type="text/css" href="assets/backend/css/login/fontawesome-all.min.css" />
     <link rel="stylesheet" type="text/css" href="assets/backend/css/login/style.css" />
     <link rel="stylesheet" type="text/css" href="assets/backend/css/login//theme.css" />
     <script type="text/javascript">
     var _paq = (window._paq = window._paq || []);
     _paq.push(["trackPageView"]);
     _paq.push(["enableLinkTracking"]);
     (function() {
          var u = "https://syncpantau.poltektegal.ac.id/";
          _paq.push(["setTrackerUrl", u + "matomo.php"]);
          _paq.push(["setSiteId", "4"]);
          var d = document,
               g = d.createElement("script"),
               s = d.getElementsByTagName("script")[0];
          g.type = "text/javascript";
          g.async = true;
          g.src = u + "matomo.js";
          s.parentNode.insertBefore(g, s);
     })();
     </script>
     <noscript>
          <p>
               <img src="https://syncpantau.poltektegal.ac.id/matomo.php?idsite=4&amp;rec=1" style="border: 0" alt="" />
          </p>
     </noscript>
</head>

<body>
     <div class="form-body" class="container-fluid">
          <div class="row">
               <div class="img-holder">
                    <div class="bg"></div>
                    <div class="info-holder">
                         <img style="width: 350px; height: 350px" src="assets/backend/images/todolist.svg"
                              alt="Politeknik Harapan Bersama" />
                    </div>
               </div>
               <div class="form-holder">
                    <div class="form-content">
                         <div class="form-items">
                              <h3>
                                   <span style="color: #000; font-weight: bold"></span> <br />
                                   Todo <span style="color: blue; font-weight: bold"></span>
                                   <span style="color: blue; font-weight: bold">List</span>
                                   <span style="color: black; font-weight: bold">Application</span><br />
                              </h3>
                              <p>
                                   TIK Politeknik Harapan Bersama<br />
                              </p>

                              <?php if ($this->session->flashdata('notifikasi')){ ?>
                              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                   <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                   <p class="mb-0"><?php echo $this->session->flashdata('notifikasi'); ?></p>
                              </div>
                              <?php } ?>

                              <form action="auth/proses" method="POST" autocomplete="off">
                                   <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                                        value="<?php echo $this->security->get_csrf_hash(); ?>">
                                   <input class="form-control" type="text" name="username" autocomplete="off"
                                        autocomplete="off" placeholder="Username" required />
                                   <input class="form-control" type="password" name="password" autocomplete="off"
                                        id="password" autocomplete="off" placeholder="Password" required />
                                   <input type="checkbox" class="form-check-input" id="showpw" />
                                   <label class="form-check-label font-weight-light" for="showpw">Show Password</label>
                                   <div class="form-button">
                                        <button id="submit" type="submit" class="ibtn">Login</button>
                                   </div>
                              </form>
                              <div class="other-links">
                                   <span>Lupa password? <a href="#">Reset sandi</a></span><br />
                                   <a href="https://github.com/PHBDev">Copyright © 2020 | Politeknik Harapan Bersama -
                                        Sisfo360</a>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
     <script type="text/javascript" src="assets/frontend/js/jquery.min.js"></script>
     <script type="text/javascript" src="assets/frontend/js/popper.min.js"></script>
     <script type="text/javascript" src="assets/frontend/js/bootstrap.min.js"></script>
     <script type="text/javascript" src="assets/frontend/js/main.js"></script>
</body>

</html>
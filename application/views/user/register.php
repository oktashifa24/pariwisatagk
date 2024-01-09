
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/vendors/bootstrap/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('assets/vendors/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url('assets/vendors/nprogress/nprogress.css'); ?>" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url('assets/vendors/animate.css/animate.min.css'); ?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="assets/build/css/custom.min.css" rel="stylesheet">
   
    <title>Pariwisataku ! | </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/vendors/bootstrap/dist/css/bootstrap.min.css');?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('assets/vendors/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url('assets/vendors/nprogress/nprogress.css');?>" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url('assets/vendors/animate.css/animate.min.css');?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="assets/build/css/custom.min.css" rel="stylesheet">
  </head>
  

  <br><br><br>

  <body class="login mt-5">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
	  <div class="container">
	  	  <a class="navbar-brand" href="#top">
		    <img src="<?php echo base_url('assets/images/logo.png');?>" width="50" height="50" alt="" loading="lazy">
		  </a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav ml-auto">
		      <li class="nav-item">
		        <a class="nav-link" href="<?php echo site_url('katalog/');?>">Beranda</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="<?php echo site_url('katalog/wisata/');?>">Wisata</a>
		      </li>
              <li class="nav-item">
		        <a class="nav-link" href="<?php echo site_url('user/');?>">Login User</a>
		      </li>

			  
		    </ul>
		  </div>
	  </div>
	</nav>
    <div class="container">
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="<?php echo site_url('user/register_aksi');?>" method="post">
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" name="username" required="required" data-validation-required-message="Please enter your username" />
              </div>
              <br>
              <div>
                <input type="email" class="form-control" placeholder="Email" name="emailaktif" required="required" data-validation-required-message="Please enter your username" />
              </div>
              <br>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="user_password" required="required" data-validation-required-message="Please enter your username" />
              </div>
              <br>
              <div>
                <input type="text" class="form-control" placeholder="Nama Lengkap" name="user_namalengkap" required="required" data-validation-required-message="Please enter your username" />
              </div>
              <br>
              <br>
              <div>
                <button class="btn btn-primary" type="submit">Submit</a>
              </div>

              <div class="clearfix"></div>
              <br>
              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="<?php echo site_url('user/');?>" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Pariwisataku !</h1>
                  <p>©2023 All Rights Reserved. Pariwisataku - Modify By Pariwisataku</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
    <br><br><br>

<!-- Bootstrap JS, jQuery, and Popper.js -->
<script src="js/jquery-3.5.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

  <!-- Copyright -->
  <footer class="text-center text-light bg-dark p-2">
    <p class="mt-3">Copyright &copy; 2023 by <a href="https://www.instagram.com/robertus988">Pariwisataku !</a></p>
</footer>

<!-- <a href="#" class="backToTop"></a> -->


<!-- jQuery and Bootstrap Bundle (includes Popper) -->
<script src="js/jquery-3.5.1.slim.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<!-- Fontawesome JS Online-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
<!-- Fontawesome JS Offline -->
<script src="fontawesome/all.min.js"></script>
<!-- My Script -->
<script src="js/main.js"></script>

  </body>

  
</html>

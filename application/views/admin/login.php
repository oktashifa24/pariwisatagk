
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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

  <body class="login">
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
			  
		    </ul>
		  </div>
	  </div>
	</nav>
  <br><br><br>
    <div class="container mt-5">
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="<?php echo site_url('admin/aksi_login');?>" method="post">
              <h1>Login Form Admin</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" name="username" required="required" data-validation-required-message="Please enter your username" />
              </div>
              <br>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="password" required="required" data-validation-required-message="Please enter your password" />
              </div>
              <br>
              <div>
                <button class="btn btn-default" type="submit">Log in</button>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>
              

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="<?php echo site_url('admin/register');?>" class="to_register"> Create Account </a>
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
    <br><br><br><br><br><br><br>
    <footer class="text-center text-light bg-dark p-2">
    <p class="mt-3">Copyright &copy; 2023 by <a href="https://www.instagram.com/robertus988">Pariwisataku !</a></p>
</footer>
  </body>
</html>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Pariwisataku ! |</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">

    <!-- Fontawesome CSS Online -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <!-- Fontawesome CSS Offline -->
    <link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/all.min.css');?>">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.ico');?>">

    <!-- Manual Styling -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>">
  </head>
  <body id="top">
    
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
              <li class="nav-item">
		        <a class="nav-link" href="<?php echo site_url('user/register');?>">Registrasi</a>
		      </li>
             
		    </ul>
		  </div>
	  </div>
	</nav>

    <!-- Wisata -->
    <section id="wisata" class="pb-4">
        <div class="container">
            <div class="row mb-4 pt-4">
                <div class="col text-center">
                    <h2></h2>
                </div>
            </div>

            <nav>
			  <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
			    <a class="nav-link active" id="wisata1" data-toggle="tab" href="#nav-wisata1" role="tab" aria-controls="nav-wisata1" aria-selected="true">Wisata</a>
			  </div>
			</nav>
			<div class="tab-content" id="nav-tabContent">
			<!-- Wisata -> Wisata Alam -->
			  <div class="tab-pane fade show active" id="nav-wisata1" role="tabpanel" aria-labelledby="wisata1">
			  	<!-- baris 1 -->
			  	<div class="row mt-3">
                  <table id="datatable" class="table table-striped table-bordered" style="width:100%"> 
                <thead>
                        <tr>
                          
                        </tr>
                      </thead> 
                      <tbody>
                      <?php $no=1; foreach($destinasi as $val){ ?>
                       <tr>
                        <td>
                          <h3><?php echo $no; ?>. <?php echo $val->namawisata; ?></h4>
                          <h3><img src="<?php echo base_url('assets/fotodestinasi/' . $val->fotodestinasi); ?>" width="550" height="310"></h3>
                          <h5>Deskripsi</h5>
                          <p><?php echo $val->deskripsi; ?></p>
                          <h5>Akomodasi</h5>
                          <p><?php echo $val->akomodasi; ?></p>
                          <h5>Lokasi</h5>
                          <p><?php echo $val->lokasi; ?></p>
                          <h5>HTM</h5>
                          <p><?php echo $val->htm; ?></p>
                      </td>
                      </tr>
                        <?php $no++; }?>
                        </tbody>
                    </table>

			    <!-- Pagination -->
			    <nav aria-label="Page navigation example" class="mt-3">
				  <ul class="pagination justify-content-center">
				    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
				    <li class="page-item active"><a class="page-link" href="#">1</a></li>
				    <li class="page-item"><a class="page-link" href="#">2</a></li>
				    <li class="page-item"><a class="page-link" href="#">3</a></li>
				    <li class="page-item"><a class="page-link" href="#">Next</a></li>
				  </ul>
				</nav>

			  </div>
			</div> 
        </div>
    </section>
    <!-- Wisata Akhir -->


    <!-- Galeri Awal -->
	<section id="galeri" class="pb-4">

	    <div class="container mb-2">
	        <div class="row pt-4 mb-4">
	            <div class="col text-center">
	                <h2>Galeri</h2>
	            </div>
	        </div>

	        <!-- <div class="popup-gallery"> -->
	        	<!-- baris 1 galeri -->
	        	<div class="row ">
	        		<div class="col-md-4 col-sm-12">
					<?php $no=1; foreach($galeri as $val){ ?>
		                <figure>
		            		<img src="<?php echo base_url('assets/fotogaleri/' . $val->fotogaleri); ?>">
						    <figcaption>
						    	<h3><?php echo $val->namawisata; ?></h3>
						    	<a href="galeri.html" class="btn btn-sm btn-info">Lihat</a>
							</figcaption>
		            	</figure>
						<?php }?>
		            </div>
	    </div>
	</section>
    <!-- Galeri Akhir -->


    <!-- Copyright -->
    <footer class="text-center text-light bg-dark p-2">
        <p class="mt-3">Copyright &copy; 2023 by <a href="https://www.instagram.com/robertus988">TadikaMesra</a></p>
    </footer>

    <!-- <a href="#" class="backToTop"></a> -->
    <a id="backtotop" href="#top"><img src="images/angle-up.svg" alt=""></a>

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
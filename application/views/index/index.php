<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Pariwisataku ! |</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">

	<!-- Fontawesome CSS Online -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

	<!-- Fontawesome CSS Offline -->
	<link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/all.min.css'); ?>">

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo base_url('assets/images/logo.ico'); ?>">

	<!-- Manual Styling -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
</head>

<body id="top"> 

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#top">
            <img src="<?php echo base_url('assets/images/logo.png'); ?>" width="50" height="50" alt="" loading="lazy">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('katalog/'); ?>">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('katalog/wisata/'); ?>">Wisata</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#galeri">Galeri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#lokasi">Lokasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#kontak">Kontak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('user/'); ?>">Login User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('user/register'); ?>">Registrasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('admin'); ?>">LogAd</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

	<div class="jumbotron">
		<div class="container text-center">
			<h1>SELAMAT DATANG DI WEBSITE<br>PARIWISATA GUNUNGKIDUL</h1>
			
		</div>
	</div>
	
	<div class="row mb-4 pt-4">
				<div class="col text-center">
					<h2>About</h2>
					<div class="container">

<div style="position: relative; overflow: hidden; width: 100%;">
	<p align="justify">Jelajahi keindahan alam yang memukau, pesona budaya yang khas, serta beragam destinasi menarik yang menanti untuk Anda kunjungi di Gunung Kidul, Yogyakarta. Sebagai sumber informasi utama bagi wisatawan lokal maupun mancanegara, kami menyajikan berbagai fasilitas dan kegiatan yang akan membuat perjalanan Anda menjadi tak terlupakan dan informasi yang mengagumkan bagi para pencari petualangan dan keindahan alam. Dari pantai eksotis hingga gua-gua alami, air terjun menakjubkan. website ini adalah panduan lengkap untuk menjelajahi keajaiban alam di kawasan Gunung Kidul,Yogyakarta.</p>
</div>

</div>

</div>
</div>
			</div>
	

	<!-- Wisata -->
	<section id="wisata" class="pb-4">
	    	
			
		<div class="container">
		    
		    <div class="row mb-4 pt-4">
				<div class="col text-center">
					
<div style="position: relative; overflow: hidden; width: 100%; padding-top: 56.25%;">
    <iframe 
        src="https://www.youtube.com/embed/NtoqKcQ09kk?autoplay=1&loop=1&mute=1" 
        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"
        frameborder="0" 
        allowfullscreen
    ></iframe>
</div>

				</div>
			</div>
		   
		    
	<!-- Wisata -->
	<section id="wisata" class="pb-4">
		<div class="container">
			<div class="row mb-4 pt-4">
				<div class="col text-center">
					<h2>Rekomendasi Wisata</h2>
				</div>
			</div>

			<nav>
				<div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
					<a class="nav-link active" id="wisata1" data-toggle="tab" href="#nav-wisata1" role="tab" aria-controls="nav-wisata1" aria-selected="true">Wisata</a>
				</div>
			</nav>
			<div class="tab-content" id="nav-tabContent">
				<!-- Wisata -> Wisata Alam -->
				<!-- Displaying Destinasi -->
				<div class="d-none">
					<?php echo $this->pagination->create_links(); ?>
				</div>

				<div class="row pr-5">
					<?php foreach ($destinasi as $val) { ?>
						<div class="col-md-4 col-sm-12">
							<figure>
								<img src="<?php echo base_url('assets/fotodestinasi/' . $val->fotodestinasi); ?>">
								<figcaption>
									<h3><?php echo $val->namawisata; ?></h3>
									<a href="<?php echo site_url('DetailDestinasi/main/' . $val->id_wisata); ?>" class="btn btn-sm btn-info">Lihat</a>
								</figcaption>
							</figure>
						</div>
					<?php } ?>
				</div>

				<!-- Pagination -->
				<nav aria-label="Page navigation example" class="mt-3 justify-content-center">
					<?php echo $this->pagination->create_links(); ?>

				</nav>


			</div>
		</div>
		</div>
	</section>
	<!-- Wisata Akhir -->


	<!-- Galeri Awal -->
	<section id="galeri" class="pb-4">

		<?php $this->load->view('index/galeri'); ?>
	</section>
	<!-- Galeri Akhir -->

	<!-- Lokasi Awal -->
	<section id="lokasi" class="pb-4">
		<div class="container">
			<div class="row pt-4 mb-4">
				<div class="col text-center">
					<h2>Lokasi</h2>
				</div>
			</div>
			<div class="row text-center">
					<div class="col-md-6">
					<h5>Gunung Kidul</h5>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d252867.56486805156!2d110.5819344!3d-7.99318505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7bb3a693c3d897%3A0x3027a76e352bc10!2sKabupaten%20Gunung%20Kidul%2C%20Daerah%20Istimewa%20Yogyakarta!5e0!3m2!1sid!2sid!4v1702303900993!5m2!1sid!2sid" width="540" height="405" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
				
			</div>
		</div>
	</section>
	<!-- Lokasi Akhir -->

	<!-- Kontak Awal -->
	<section id="kontak" class="text-white pb-4">
		<div class="container">
			<div class="row pt-4 mb-4">
				<div class="col text-center">
					<h2>Kontak</h2>
				</div>
			</div>
			<div class="row">
				<div id="sosmed" class="col-md-3 mb-4">
					<h3>Media Sosial</h3>
					<div class="row mb-2">
						<div class="col">
							<a href=""><i class="fab fa-fw fa-facebook fa-2x mr-2"></i></a>
							<a href=""><i class="fab fa-fw fa-instagram fa-2x mr-2"></i></a>
							<a href=""><i class="fab fa-fw fa-twitter fa-2x mr-2"></i></a>
							<a href=""><i class="fab fa-fw fa-youtube fa-2x mr-2"></i></a>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<a href=""><i class="fab fa-fw fa-whatsapp fa-2x mr-2"></i></a>
							<a href=""><i class="fab fa-fw fa-line fa-2x mr-2"></i></a>
							<a href=""><i class="fab fa-fw fa-telegram fa-2x mr-2"></i></a>
							<a href=""><i class="fas fa-fw fa-envelope fa-2x mr-2"></i></a>
						</div>
					</div>
				</div>
				<div id="tentang" class="col-md-3 mb-3">
					<h3>Tentang</h3>
					<p><a href="#wisata"><i class="fas fa-fw fa-map-marked-alt"></i> Wisata</a></p>
					<p><a href="#galeri"><i class="fas fa-fw fa-images"></i> Galeri</a></p>
					<p><a href="#lokasi"><i class="fas fa-fw fa-map-marker-alt"></i> Lokasi</a></p>
				</div>
				
			</div>
		</div>
	</section>
	<!-- Kontak Akhir -->

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
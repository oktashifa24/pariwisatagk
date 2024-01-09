<!-- views/index/detail.php -->

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Destination Details</title>
	<!-- Add any additional CSS styles if needed -->
	<!-- Bootstrap -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">

	<!-- Fontawesome CSS Online -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

	<!-- Fontawesome CSS Offline -->
	<link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/all.min.css'); ?>">

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.ico'); ?>">

	<!-- Manual Styling -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
</head>

<body>
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
						<a class="nav-link" href="<?php echo site_url('katalog/'); ?>">Beranda</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo site_url('katalog/wisata/'); ?>">Wisata</a>
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

	<br><br><br>
	<div class="container mt-5">


		<!-- Display destination details -->
		<h2 class="my-2"><?php echo $detail->namawisata; ?></h2>
		<img class="my-2" src="<?php echo base_url('assets/fotodestinasi/' . $detail->fotodestinasi); ?>">
		<p class="my-2"><strong>Lokasi: <?php echo $detail->lokasi; ?></strong></p>
		<p class="my-2"><?php echo $detail->deskripsi; ?></p> 

		<!-- <p>Category: <?php echo $detail->kategori; ?></p> -->
		<!-- views/index/detail.php

		... (code yang sudah ada sebelumnya) ... -->
		           
		<!-- <div class="row">
                <div class="col-md-10">
                    <img src="<?php echo base_url('/assets/fotodestinasi/' . $destinasi[0]->fotodestinasi); ?>" alt="..."> 
                </div>
                <div class="col-md-10">
                    <h2><span class="label label-primary"><?php echo $destinasi[0]->namawisata?></span></h2>
                    <p><strong>Lokasi:</strong> <?php echo $destinasi[0]->lokasi?></p>
                    <p><strong>Deskripsi:</strong> <?php echo $destinasi[0]->deskripsi?></p>
                    <p><strong>htm:</strong> <?php echo $destinasi[0]->htm?></p>
                </div>
            </div> -->
<?php
function get_destinasi_detail($id) {
    $rs = $this->db->query('SELECT * FROM destinasi Where id_wisata = '.$id)->result();
    return $rs;
}
?>
            <div class="row">
                <div class="col-md-12">
                    <h3>Rekomendasi Wisata yang sesuai</h3>
                    <?php

foreach($r as $i=>$k){
   $d =  $this->db->query('SELECT * FROM destinasi Where id_wisata = '.$i . ' LIMIT 5')->result();

   
    echo $d[0]->namawisata;
    echo  $k."<br>";
}
?>

<!-- 
		<div class="container mt-3" >
			<form action="<?php echo site_url('wishlist/add_to_wishlist'); ?>" method="post">
				<input type="hidden" name="id_wisata" value="<?php echo $detail->id_wisata; ?>">
				<button type="submit" class="btn btn-primary">Add to Wishlist</button>
			</form>
		</div> -->

		
		

	<!-- <div class="col-md-6">
					<h3>Beri Ulasan</h3>
					Form ulasan
					<h3>Tambah Ulasan</h3>
					<?php echo form_open_multipart('detailDestinasi/add_review'); ?>

					<div class="form-group">
						<label for="pesan">Pesan:</label>
						<textarea class="form-control" id="pesan" name="pesan" rows="4" required></textarea>
					</div>

					<div class="form-group">
						<label for="fotoulasan">Foto Ulasan (optional):</label>
						<input type="file" class="form-control-file" id="fotoulasan" name="fotoulasan" required>
					</div>

					<input type="hidden" name="id_wisata" value="<?php echo $detail->id_wisata; ?>">

					<button type="submit" class="btn btn-primary">Tambah Ulasan</button>

					<?php echo form_close(); ?>
				</div> -->

		</div>

</div>
					  </div>
					  </div>
	<!-- Kontak Awal -->
	<br><br><br>
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
				<!-- <div class="col-md-6">
					<h3>Beri Ulasan</h3>
					Form ulasan 
					<h3>Tambah Ulasan</h3>
					<?php echo form_open_multipart('detailDestinasi/add_review'); ?>

					<div class="form-group">
						<label for="pesan">Pesan:</label>
						<textarea class="form-control" id="pesan" name="pesan" rows="4" required></textarea>
					</div>

					<div class="form-group">
						<label for="fotoulasan">Foto Ulasan (optional):</label>
						<input type="file" class="form-control-file" id="fotoulasan" name="fotoulasan" required>
					</div>

					<input type="hidden" name="id_wisata" value="<?php echo $detail->id_wisata; ?>">

					<button type="submit" class="btn btn-primary">Tambah Ulasan</button>

					<?php echo form_close(); ?>
				</div> -->
			</div>
		</div>
	</section>
	<!-- Kontak Akhir -->

	<!-- <br><br><br>
	<section>
		<div class="container">
			
			<h3>Ulasan Pengunjung</h3>
			

		</div>
	</section> -->

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
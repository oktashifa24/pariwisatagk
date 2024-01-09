<!-- Galeri Awal -->
<section id="galeri" class="pb-4">
    <div class="container mb-2">
        <div class="row pt-4 mb-4">
            <div class="col text-center">
                <h2>Galeri</h2>
            </div>
        </div>

        <!-- baris 1 galeri -->
        <div class="row">
            <?php $no=1; foreach($galeri as $val){ ?>
                <div class="col-md-4 col-sm-12">
                    <figure>
                        <img src="<?php echo base_url('assets/fotogaleri/' . $val->fotogaleri); ?>">
                        <figcaption>
                            <h3><?php echo $val->namawisata; ?></h3>
                        </figcaption>
                    </figure>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- Galeri Akhir -->

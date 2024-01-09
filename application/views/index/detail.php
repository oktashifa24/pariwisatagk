
<!doctype html>
<html lang="en">
    <head>
        <title>Content-based Filtering</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    </head>

    <body>
        <div class="container theme-showcase">
            <div class="jumbotron">
                <h1>Daftar Wisata di GunungKidul Yogyakarta</h1>
                <p>Contoh implementasi Sistem rekomendasi berbasis kontent menggunakan metode TF-IDF dan Cosine Similarity</p>
            </div>
            
            <div class="row">
                <div class="col-md-10">
                    <img src="<?php echo base_url('/assets/fotodestinasi/' . $destinasi[0]->fotodestinasi); ?>" alt="..."> 
                </div>
                <div class="col-md-10">
                    <h2><span class="label label-primary"><?php echo $destinasi[0]->namawisata?></span></h2>
                    <p><strong>Lokasi:</strong> <?php echo $destinasi[0]->lokasi?></p>
                    <p><strong>Deskripsi:</strong> <?php echo $destinasi[0]->deskripsi?></p>
                    <p><strong>htm:</strong> <?php echo $destinasi[0]->htm?></p>
                </div>
            </div>
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
                    <!-- <ol>
                        <?php $i=0;?>
                        <?php foreach($r as $k => $row):?>
                            <?php if($i==$n) break;?>
                            <?php if($row==1) continue;?>
                            <?php $h = get_destinasi_detail($i);?>
                            <li><a href="<?php echo site_url('cbrs/detail'); ?>" value="<?php echo $h->id_wisata ?>">
                                <?php echo $h->namawisata ?></a> (<?php echo $row?>)
                            </li>
                            <?php $i++ ?>
                        <?php endforeach ?>    
                    </ol> -->
                </div>
            </div>
        </div>
    </body>
</html>
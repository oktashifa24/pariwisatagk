  <!-- page content -->
  <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Edit Data Wislish</h3>
                            
                        </div> 

                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 form-group pull-right top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">Go!</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Form Edit Data Wislist</h2>
                                    
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                <form class="" method="post" action="<?php echo site_url('wishlist/editwishlist');?>" novalidate>
                                    
                                        <!-- <p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>
                                        </p>
                                        <span class="section">Personal Info</span> -->
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align"> Status Kunjungan <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                            <select class="form-control" name="statuskunjungan">
                                            <?php if($wishlist->statuskunjungan=="Sudah") {;?>
                                                <option selected>Sudah</option>
                                                <option>Belum</option>
                                            <?php } else{?>
                                                <option>Sudah</option>
                                                <option selected>Belum</option>
                                                <?php } ?>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align"> Estimasi <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-validate-length-range="6" data-validate-words="2" type="date" value="<?php echo $wishlist->estimasi;?>" name="estimasi" placeholder="Estimasi kunjungan" required="required" />
                                            </div>
                                        </div>
                                        <input type="hidden" name="id_wishlist" value="<?php echo $id_wishlist; ?>"> 
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align"> Wisata <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                            <select class="form-control" name="id_wisata" value="<?php echo $wishlist->id_wisata;?>">
                        <?php foreach($destinasi as $val){ ?>
                            <?php if($val->id_wisata==$wishlist->id_wisata){ ?>
                        <option selected><?php echo $val->id_wisata;?> - <?php echo $val->namawisata;?></option>
                        <?php } ?>
                        <option><?php echo $val->id_wisata;?> - <?php echo $val->namawisata;?></option>
                    <?php }?>
                        </select>
                        </div>
                        </div>   
                                        <div class="ln_solid">
                                            <div class="form-group">
                                                <div class="col-md-6 offset-md-3">
                                                    <button type='submit' class="btn btn-primary">Submit</button>
                                                
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page content -->
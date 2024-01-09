  <!-- page content -->
  <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>MANAGEMENT FOTO DESTINASI WISATA</h3>
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
                                    <h2>Form Edit Data Foto Destinasi </h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                <form name="sentMessage" method="post" action="<?php echo site_url('fodes/edit');?>" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?php echo $fotodestinasi->id_fodes;?>">
                                        <!-- <p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>
                                        </p>
                                        <span class="section">Personal Info</span> -->
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align"> Foto Destinasi <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                    <input type="file" class="form-control-file" name="fotodestinasi">
                    <?php if(!empty($fotodestinasi->fotodestinasi)): ?>
                        <img src="<?php echo base_url('assets/fotodestinasi/' . $fotodestinasi->fotodestinasi); ?>" width="150" height="110">
                    <?php endif; ?>
                </div>
                    </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align"> id wisata <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                            <select class="form-control" name="id_wisata" value = "<?php echo $fotodestinasi->id_wisata;?>" >
                        <?php foreach($destinasi as $val){ ?>
                        <option ><?php echo $val->id_wisata;?>  - <?php echo $val->namawisata;?></option>
                    <?php }?>
                        </select>
                        </div>
                                        </div>
                                        <div class="ln_solid">
                                            <div class="form-group">
                                                <div class="col-md-6 offset-md-3">
                                                    <button type='submit' class="btn btn-primary">Simpan</button>
                                                    <button type='reset' class="btn btn-success">Reset</button>
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
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
                                    <h2>Form Edit Data Ulasan</h2>
                                    
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                <?php echo form_open_multipart("ulasan/editulasan") ?>
                                    <input type="hidden" name="id_user" value="<?php echo $id_user; ?>"> 
                                    <input type="hidden" name="id_ulasan" value="<?php echo $ulasan->id_ulasan; ?>"> 
                                        <!-- <p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>
                                        </p>
                                        <span class="section">Personal Info</span> -->
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align"> Upload File <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input type="file" name="foto" class="form-control"> 
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align"> Pesan <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <textarea class="input wide-textarea" name="pesan" style="width: 100%"><?php echo $ulasan->pesan ?></textarea>
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align"> Wisata <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                            <select class="form-control" name="id_wisata">
                                            <?php foreach($destinasi as $val){ ?>
                            <?php if($val->id_wisata==$ulasan->id_wisata){ ?>
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
                                    <?php echo form_close() ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page content -->
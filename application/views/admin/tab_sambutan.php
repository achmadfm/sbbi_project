<div class="col-lg-6 col-sm-6 col-xs-12">
    <div class="white-box">
        <h3 class="box-title">Welcome Speechs</h3>
        <!-- Nav tabs -->
        <ul class="nav customtab nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#home1" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true"><span class="visible-xs"><i class="ti-home"></i></span><span class="hidden-xs">TK / KB</span></a></li>
            <li role="presentation" class=""><a href="#profile1" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="ti-user"></i></span> <span class="hidden-xs">SD</span></a></li>
            <li role="presentation" class=""><a href="#messages1" aria-controls="messages" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="ti-email"></i></span> <span class="hidden-xs">SMP</span></a></li>
            <li role="presentation" class=""><a href="#settings1" aria-controls="settings" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="ti-settings"></i></span> <span class="hidden-xs">SMA</span></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade active in" id="home1">
                <h3 class="box-title m-b-0">Bosowa Bina Insani Bogor TK-KB Welcome Speech</h3>
                    <p class="text-muted m-b-30 font-13"> (Form ini untuk mengedit kata sambutan kepala sekolah) </p>
                    <?php $s = $speech->row_array();?>
                    <div class="form-group">
                        <label class="col-md-12">Foto (saat ini)</label>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="hidden" name="xkode1" value="<?php echo $s['id_sambutan'];?>">
                                    <img height="370px" width="260px" src="<?php echo base_url().'template/speech/'.$s['foto_sambutan'];?>" class="img img-rounded" disabled>
                                    <center><h3 class="box-title"><?php echo $s['nama_kepsek']?></h3> <small>Principal TK-KB Bosowa Bina Insani Bogor</small></center>
                                    <br/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                <label class="col-md-12">Isi Welcome Speech (Saat ini)</label>
                                    <div class="col-md-12">
                                        <textarea class="form-control" rows="5" disabled><?php echo $s['isi_sambutan'];?></textarea>
                                    </div>
                                </div>
                            </div>
                            <?php echo form_open_multipart('admin/web_admin/update_sambutansatu');?>
                                <div class="form-horizontal">
                                    <div class="form-group">
                                    <label class="col-md-12">Isi Welcome Speech</label>
                                        <div class="col-md-12">
                                            <input type="hidden" name="xkode1" value="<?php echo $s['id_sambutan'];?>">
                                            <input type="hidden" name="gambar1" value="<?php echo $s['foto_sambutan'];?>">
                                            <textarea id="mymce" rows="5" name="sambutan1"><?php echo $s['isi_sambutan'];?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label class="col-md-12">Nama Kepala Sekolah</label>
                                        <div class="col-md-12">
                                            <input type="text" name="kepsek1" class="form-control" value="<?php echo $s['nama_kepsek']?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label class="col-sm-12">File upload</label>
                                        <div class="col-sm-12">
                                            <input type="file" name="filefoto1" >
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Update</button>
                                </div>
                            <?php echo form_close();?>
                        </div>
                    </div>
                <div class="clearfix"></div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="profile1">
            <h3 class="box-title m-b-0">Bosowa Bina Insani Bogor SD Welcome Speech</h3>
                    <p class="text-muted m-b-30 font-13"> (Form ini untuk mengedit kata sambutan kepala sekolah) </p>
                    <?php $s = $speechsd->row_array();?>
                    <div class="form-group">
                        <label class="col-md-12">Foto (saat ini)</label>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="hidden" name="xkode2" value="<?php echo $s['id_sambutan'];?>">
                                    <img height="370px" width="260px" src="<?php echo base_url().'template/speech/'.$s['foto_sambutan'];?>" class="img img-rounded" disabled>
                                    <center><h3 class="box-title"><?php echo $s['nama_kepsek']?></h3> <small>Principal SD Bosowa Bina Insani Bogor</small></center>
                                    <br/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                <label class="col-md-12">Isi Welcome Speech (Saat ini)</label>
                                    <div class="col-md-12">
                                        <textarea class="form-control" rows="5" disabled><?php echo $s['isi_sambutan'];?></textarea>
                                    </div>
                                </div>
                            </div>
                            <?php echo form_open_multipart('admin/web_admin/update_sambutandua');?>
                                <div class="form-horizontal">
                                    <div class="form-group">
                                    <label class="col-md-12">Isi Welcome Speech</label>
                                        <div class="col-md-12">
                                            <input type="hidden" name="xkode2" value="<?php echo $s['id_sambutan'];?>">
                                            <input type="hidden" name="gambar2" value="<?php echo $s['foto_sambutan'];?>">
                                            <textarea id="mymce" rows="5" name="sambutan2"><?php echo $s['isi_sambutan'];?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label class="col-md-12">Nama Kepala Sekolah</label>
                                        <div class="col-md-12">
                                            <input type="text" name="kepsek2" class="form-control" value="<?php echo $s['nama_kepsek']?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label class="col-sm-12">File upload</label>
                                        <div class="col-sm-12">
                                            <input type="file" name="filefoto2" >
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Update</button>
                                </div>
                            <?php echo form_close();?>
                        </div>
                    </div>
                <div class="clearfix"></div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="messages1">
            <h3 class="box-title m-b-0">Bosowa Bina Insani Bogor SMP Welcome Speech</h3>
                    <p class="text-muted m-b-30 font-13"> (Form ini untuk mengedit kata sambutan kepala sekolah) </p>
                    <?php $s = $speechsmp->row_array();?>
                    <div class="form-group">
                        <label class="col-md-12">Foto (saat ini)</label>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="hidden" name="xkode3" value="<?php echo $s['id_sambutan'];?>">
                                    <img height="370px" width="260px" src="<?php echo base_url().'template/speech/'.$s['foto_sambutan'];?>" class="img img-rounded" disabled>
                                    <center><h3 class="box-title"><?php echo $s['nama_kepsek']?></h3> <small>Principal SMP Bosowa Bina Insani Bogor</small></center>
                                    <br/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                <label class="col-md-12">Isi Welcome Speech (Saat ini)</label>
                                    <div class="col-md-12">
                                        <textarea class="form-control" rows="5" disabled><?php echo $s['isi_sambutan'];?></textarea>
                                    </div>
                                </div>
                            </div>
                            <?php echo form_open_multipart('admin/web_admin/update_sambutantiga');?>
                                <div class="form-horizontal">
                                    <div class="form-group">
                                    <label class="col-md-12">Isi Welcome Speech</label>
                                        <div class="col-md-12">
                                            <input type="hidden" name="xkode3" value="<?php echo $s['id_sambutan'];?>">
                                            <input type="hidden" name="gambar3" value="<?php echo $s['foto_sambutan'];?>">
                                            <textarea id="mymce" rows="5" name="sambutan3"><?php echo $s['isi_sambutan'];?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label class="col-md-12">Nama Kepala Sekolah</label>
                                        <div class="col-md-12">
                                            <input type="text" name="kepsek3" class="form-control" value="<?php echo $s['nama_kepsek']?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label class="col-sm-12">File upload</label>
                                        <div class="col-sm-12">
                                            <input type="file" name="filefoto3" >
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Update</button>
                                </div>
                            <?php echo form_close();?>
                        </div>
                    </div>
                <div class="clearfix"></div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="settings1">
            <h3 class="box-title m-b-0">Bosowa Bina Insani Bogor SMA Welcome Speech</h3>
                    <p class="text-muted m-b-30 font-13"> (Form ini untuk mengedit kata sambutan kepala sekolah) </p>
                    <?php $s = $speechsma->row_array();?>
                    <div class="form-group">
                        <label class="col-md-12">Foto (saat ini)</label>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="hidden" name="xkode4" value="<?php echo $s['id_sambutan'];?>">
                                    <img height="370px" width="260px" src="<?php echo base_url().'template/speech/'.$s['foto_sambutan'];?>" class="img img-rounded" disabled>
                                    <center><h3 class="box-title"><?php echo $s['nama_kepsek']?></h3> <small>Principal SMA Bosowa Bina Insani Bogor</small></center>
                                    <br/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                <label class="col-md-12">Isi Welcome Speech (Saat ini)</label>
                                    <div class="col-md-12">
                                        <textarea class="form-control" rows="5" disabled><?php echo $s['isi_sambutan'];?></textarea>
                                    </div>
                                </div>
                            </div>
                            <?php echo form_open_multipart('admin/web_admin/update_sambutanempat');?>
                                <div class="form-horizontal">
                                    <div class="form-group">
                                    <label class="col-md-12">Isi Welcome Speech</label>
                                        <div class="col-md-12">
                                            <input type="hidden" name="xkode4" value="<?php echo $s['id_sambutan'];?>">
                                            <input type="hidden" name="gambar4" value="<?php echo $s['foto_sambutan'];?>">
                                            <textarea id="mymce" rows="5" name="sambutan4"><?php echo $s['isi_sambutan'];?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label class="col-md-12">Nama Kepala Sekolah</label>
                                        <div class="col-md-12">
                                            <input type="text" name="kepsek4" class="form-control" value="<?php echo $s['nama_kepsek']?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label class="col-sm-12">File upload</label>
                                        <div class="col-sm-12">
                                            <input type="file" name="filefoto4" >
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Update</button>
                                </div>
                            <?php echo form_close();?>
                        </div>
                    </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
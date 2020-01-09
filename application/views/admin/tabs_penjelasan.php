<div class="row">
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Edit Info Detail SMA</h3>
                            <!-- Nav tabs -->
                            <ul class="nav customtab nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#visi1" aria-controls="visi" role="tab" data-toggle="tab" aria-expanded="true"><span class="visible-xs"><i class="fa fa-institution"></i></span><span class="hidden-xs"> Visi, Misi, Tujuan</span></a></li>
                                <li role="presentation" class=""><a href="#kurikulum1" aria-controls="kurikulum" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="fa fa-certificate"></i></span> <span class="hidden-xs">Kurikulum</span></a></li>
                                <li role="presentation" class=""><a href="#keunggulan1" aria-controls="keunggulan" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="fa fa-star"></i></span> <span class="hidden-xs">Keunggulan</span></a></li>
                                <li role="presentation" class=""><a href="#ekskul1" aria-controls="ekskul" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="fa fa-cubes"></i></span> <span class="hidden-xs">Ekskul</span></a></li>
                                <li role="presentation" class=""><a href="#profile1" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="fa fa-address-book"></i></span> <span class="hidden-xs">Profil Pembelajar</span></a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade active in" id="visi1">
                                <?php $p1 = $penjelasansma->row_array();?>
                                    <div class="col-md-12">
                                        <h3 class="box-title m-b-0">Visi, Misi dan Tujuan Bosowa Bina Insani Bogor</h3>
                                        <p class="text-muted m-b-30 font-13"> (Form ini untuk mengedit visi, misi dan tujuan sekolah) </p>
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <label class="col-md-12">Isi Visi, Misi dan Tujuan Sekolah (Saat ini)</label>
                                                <div class="col-md-12">
                                                    <input type="hidden" name="xkode1" value="<?php echo $p1['id_unit'];?>">
                                                    <textarea class="form-control" rows="5" disabled><?php echo $p1['visi_misi'];?></textarea>
                                                </div>
                                            </div>
                                        </form>

                                        <form class="form-horizontal" action="<?php echo base_url().'admin/slider_unit_pendidikan/up_visisatu'?>" method="post">
                                            <div class="form-group">
                                                <label class="col-md-12">Isi Visi, Misi dan Tujuan Sekolah (Baru)</label>
                                                <div class="col-md-12">
                                                    <input type="hidden" name="xkode1" value="<?php echo $p1['id_unit'];?>">
                                                    <textarea id="mymce" name="isi1" rows="5"><?php echo $p1['visi_misi'];?></textarea>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Update</button>
                                        </form>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="kurikulum1">
                                    <div class="col-md-12">
                                        <h3 class="box-title m-b-0">Kurikulum Bosowa Bina Insani Bogor</h3>
                                        <p class="text-muted m-b-30 font-13"> (Form ini untuk mengedit Kurikulum sekolah) </p>
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <label class="col-md-12">Isi Kurikulum Sekolah (Saat ini)</label>
                                                <div class="col-md-12">
                                                    <input type="hidden" name="xkode1" value="<?php echo $p1['id_unit'];?>">
                                                    <textarea class="form-control" rows="5" disabled><?php echo $p1['kurikulum'];?></textarea>
                                                </div>
                                            </div>
                                        </form>

                                        <form class="form-horizontal" action="<?php echo base_url().'admin/slider_unit_pendidikan/up_kursatu'?>" method="post">
                                            <div class="form-group">
                                                <label class="col-md-12">Isi Kurikulum Sekolah (Baru)</label>
                                                <div class="col-md-12">
                                                    <input type="hidden" name="xkode1" value="<?php echo $p1['id_unit'];?>">
                                                    <textarea id="mymce" name="isi1" rows="5"><?php echo $p1['kurikulum'];?></textarea>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Update</button>
                                        </form>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="keunggulan1">
                                    <div class="col-md-12">
                                        <h3 class="box-title m-b-0">Keunggulan Bosowa Bina Insani Bogor</h3>
                                        <p class="text-muted m-b-30 font-13"> (Form ini untuk mengedit Keunggulan sekolah) </p>
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <label class="col-md-12">Isi Keunggulan Sekolah (Saat ini)</label>
                                                <div class="col-md-12">
                                                    <input type="hidden" name="xkode1" value="<?php echo $p1['id_unit'];?>">
                                                    <textarea class="form-control" rows="5" disabled><?php echo $p1['keunggulan'];?></textarea>
                                                </div>
                                            </div>
                                        </form>

                                        <form class="form-horizontal" action="<?php echo base_url().'admin/slider_unit_pendidikan/up_unggulsatu'?>" method="post">
                                            <div class="form-group">
                                                <label class="col-md-12">Isi Keunggulan Sekolah (Baru)</label>
                                                <div class="col-md-12">
                                                    <input type="hidden" name="xkode1" value="<?php echo $p1['id_unit'];?>">
                                                    <textarea id="mymce" name="isi1" rows="5"><?php echo $p1['keunggulan'];?></textarea>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Update</button>
                                        </form>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="ekskul1">
                                    <div class="col-md-12">
                                        <h3 class="box-title m-b-0">Ekstrakurikuler Bosowa Bina Insani Bogor</h3>
                                        <p class="text-muted m-b-30 font-13"> (Form ini untuk mengedit Ekstrakurikuler sekolah) </p>
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <label class="col-md-12">Isi Ekstrakurikuler Sekolah (Saat ini)</label>
                                                <div class="col-md-12">
                                                    <input type="hidden" name="xkode1" value="<?php echo $p1['id_unit'];?>">
                                                    <textarea class="form-control" rows="5" disabled><?php echo $p1['ekskul'];?></textarea>
                                                </div>
                                            </div>
                                        </form>

                                        <form class="form-horizontal" action="<?php echo base_url().'admin/slider_unit_pendidikan/up_ekskulsatu'?>" method="post">
                                            <div class="form-group">
                                                <label class="col-md-12">Isi Ekstrakurikuler Sekolah (Baru)</label>
                                                <div class="col-md-12">
                                                <input type="hidden" name="xkode1" value="<?php echo $p1['id_unit'];?>">
                                                    <textarea id="mymce" name="isi1" rows="5"><?php echo $p1['ekskul'];?></textarea>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Update</button>
                                        </form>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="profile1">
                                    <div class="col-md-12">
                                        <h3 class="box-title m-b-0">Profile Pembelajar Bosowa Bina Insani Bogor</h3>
                                        <p class="text-muted m-b-30 font-13"> (Form ini untuk mengedit Profile Pembelajar sekolah) </p>
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <label class="col-md-12">Isi Profile Pembelajar Sekolah (Saat ini)</label>
                                                <div class="col-md-12">
                                                    <input type="hidden" name="xkode1" value="<?php echo $p1['id_unit'];?>">
                                                    <textarea class="form-control" rows="5" disabled><?php echo $p1['profil'];?></textarea>
                                                </div>
                                            </div>
                                        </form>

                                        <form class="form-horizontal" action="<?php echo base_url().'admin/slider_unit_pendidikan/up_profilsatu'?>" method="post">
                                            <div class="form-group">
                                                <label class="col-md-12">Isi Profile Pembelajar Sekolah (Baru)</label>
                                                <div class="col-md-12">
                                                <input type="hidden" name="xkode1" value="<?php echo $p1['id_unit'];?>">
                                                    <textarea id="mymce" name="isi1" rows="5"><?php echo $p1['profil'];?></textarea>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Update</button>
                                        </form>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Edit Info Detail SMP</h3>
                            <!-- Nav tabs -->
                            <ul class="nav customtab nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#visi2" aria-controls="visi" role="tab" data-toggle="tab" aria-expanded="true"><span class="visible-xs"><i class="fa fa-institution"></i></span><span class="hidden-xs"> Visi, Misi, Tujuan</span></a></li>
                                <li role="presentation" class=""><a href="#kurikulum2" aria-controls="kurikulum" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="fa fa-certificate"></i></span> <span class="hidden-xs">Kurikulum</span></a></li>
                                <li role="presentation" class=""><a href="#keunggulan2" aria-controls="keunggulan" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="fa fa-star"></i></span> <span class="hidden-xs">Keunggulan</span></a></li>
                                <li role="presentation" class=""><a href="#ekskul2" aria-controls="ekskul" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="fa fa-cubes"></i></span> <span class="hidden-xs">Ekskul</span></a></li>
                                <li role="presentation" class=""><a href="#profile2" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="fa fa-address-book"></i></span> <span class="hidden-xs">Profil Pembelajar</span></a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade active in" id="visi2">
                                <?php $p2 = $penjelasansmp->row_array();?>
                                    <div class="col-md-12">
                                        <h3 class="box-title m-b-0">Visi, Misi dan Tujuan Bosowa Bina Insani Bogor</h3>
                                        <p class="text-muted m-b-30 font-13"> (Form ini untuk mengedit visi,misi dan tujuan sekolah) </p>
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <label class="col-md-12">Isi Visi, Misi dan Tujuan Sekolah (Saat ini)</label>
                                                <div class="col-md-12">
                                                    <input type="hidden" name="xkode2" value="<?php echo $p2['id_unit'];?>">
                                                    <textarea class="form-control" rows="5" disabled><?php echo $p2['visi_misi'];?></textarea>
                                                </div>
                                            </div>
                                        </form>

                                        <form class="form-horizontal" action="<?php echo base_url().'admin/slider_unit_pendidikan/up_visidua'?>" method="post">
                                            <div class="form-group">
                                                <label class="col-md-12">Isi Visi, Misi dan Tujuan Sekolah (Baru)</label>
                                                <div class="col-md-12">
                                                <input type="hidden" name="xkode2" value="<?php echo $p2['id_unit'];?>">
                                                    <textarea id="mymce" name="isi2" rows="5"><?php echo $p2['visi_misi'];?></textarea>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Update</button>
                                        </form>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="kurikulum2">
                                    <div class="col-md-12">
                                        <h3 class="box-title m-b-0">Kurikulum Bosowa Bina Insani Bogor</h3>
                                        <p class="text-muted m-b-30 font-13"> (Form ini untuk mengedit kurikulum sekolah) </p>
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <label class="col-md-12">Isi Kurikulum Sekolah (Saat ini)</label>
                                                <div class="col-md-12">
                                                <input type="hidden" name="xkode2" value="<?php echo $p2['id_unit'];?>">
                                                    <textarea class="form-control" rows="5" disabled><?php echo $p2['kurikulum'];?></textarea>
                                                </div>
                                            </div>
                                        </form>

                                        <form class="form-horizontal" action="<?php echo base_url().'admin/slider_unit_pendidikan/up_kurdua'?>" method="post">
                                            <div class="form-group">
                                                <label class="col-md-12">Isi Kurikulum Sekolah (Baru)</label>
                                                <div class="col-md-12">
                                                <input type="hidden" name="xkode2" value="<?php echo $p2['id_unit'];?>">
                                                    <textarea id="mymce" name="isi2" rows="5"><?php echo $p2['kurikulum'];?></textarea>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Update</button>
                                        </form>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="keunggulan2">
                                    <div class="col-md-12">
                                        <h3 class="box-title m-b-0">Keunggulan Bosowa Bina Insani Bogor</h3>
                                        <p class="text-muted m-b-30 font-13"> (Form ini untuk mengedit keunggulan sekolah) </p>
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <label class="col-md-12">Isi Keunggulan Sekolah (Saat ini)</label>
                                                <div class="col-md-12">
                                                    <input type="hidden" name="xkode2" value="<?php echo $p2['id_unit'];?>">
                                                    <textarea class="form-control" rows="5" disabled><?php echo $p2['keunggulan'];?></textarea>
                                                </div>
                                            </div>
                                        </form>

                                        <form class="form-horizontal" action="<?php echo base_url().'admin/slider_unit_pendidikan/up_ungguldua'?>" method="post">
                                            <div class="form-group">
                                                <label class="col-md-12">Isi Keunggulan Sekolah (Baru)</label>
                                                <div class="col-md-12">
                                                <input type="hidden" name="xkode2" value="<?php echo $p2['id_unit'];?>">
                                                    <textarea id="mymce" name="isi2" rows="5"><?php echo $p2['keunggulan'];?></textarea>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Update</button>
                                        </form>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="ekskul2">
                                    <div class="col-md-12">
                                        <h3 class="box-title m-b-0">Ekstrakurikuler Bosowa Bina Insani Bogor</h3>
                                        <p class="text-muted m-b-30 font-13"> (Form ini untuk mengedit Ekskul sekolah) </p>
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <label class="col-md-12">Isi Ekstrakurikuler Sekolah (Saat ini)</label>
                                                <div class="col-md-12">
                                                    <input type="hidden" name="xkode2" value="<?php echo $p2['id_unit'];?>">
                                                    <textarea class="form-control" rows="5" disabled><?php echo $p2['ekskul'];?></textarea>
                                                </div>
                                            </div>
                                        </form>

                                        <form class="form-horizontal" action="<?php echo base_url().'admin/slider_unit_pendidikan/up_ekskuldua'?>" method="post">
                                            <div class="form-group">
                                                <label class="col-md-12">Isi Ekstrakurikuler Sekolah (Baru)</label>
                                                <div class="col-md-12">
                                                <input type="hidden" name="xkode2" value="<?php echo $p2['id_unit'];?>">
                                                    <textarea id="mymce" name="isi2" rows="5"><?php echo $p2['ekskul'];?></textarea>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Update</button>
                                        </form>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="profile2">
                                    <div class="col-md-12">
                                        <h3 class="box-title m-b-0">Profile Pembelajar Bosowa Bina Insani Bogor</h3>
                                        <p class="text-muted m-b-30 font-13"> (Form ini untuk mengedit Profile Pembelajar sekolah) </p>
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <label class="col-md-12">Isi Profile Pembelajar Sekolah (Saat ini)</label>
                                                <div class="col-md-12">
                                                    <input type="hidden" name="xkode2" value="<?php echo $p2['id_unit'];?>">
                                                    <textarea class="form-control" rows="5" disabled><?php echo $p2['profil'];?></textarea>
                                                </div>
                                            </div>
                                        </form>

                                        <form class="form-horizontal" action="<?php echo base_url().'admin/slider_unit_pendidikan/up_profildua'?>" method="post">
                                            <div class="form-group">
                                                <label class="col-md-12">Isi Profile Pembelajar Sekolah (Baru)</label>
                                                <div class="col-md-12">
                                                <input type="hidden" name="xkode2" value="<?php echo $p2['id_unit'];?>">
                                                    <textarea id="mymce" name="isi2" rows="5"><?php echo $p2['profil'];?></textarea>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Update</button>
                                        </form>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Edit Info Detail SD</h3>
                            <!-- Nav tabs -->
                            <ul class="nav customtab nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#visi3" aria-controls="visi" role="tab" data-toggle="tab" aria-expanded="true"><span class="visible-xs"><i class="fa fa-institution"></i></span><span class="hidden-xs"> Visi, Misi, Tujuan</span></a></li>
                                <li role="presentation" class=""><a href="#kurikulum3" aria-controls="kurikulum" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="fa fa-certificate"></i></span> <span class="hidden-xs">Kurikulum</span></a></li>
                                <li role="presentation" class=""><a href="#keunggulan3" aria-controls="keunggulan" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="fa fa-star"></i></span> <span class="hidden-xs">Keunggulan</span></a></li>
                                <li role="presentation" class=""><a href="#ekskul3" aria-controls="ekskul" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="fa fa-cubes"></i></span> <span class="hidden-xs">Ekskul</span></a></li>
                                <li role="presentation" class=""><a href="#profile3" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="fa fa-address-book"></i></span> <span class="hidden-xs">Profil Pembelajar</span></a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade active in" id="visi3">
                                    <div class="col-md-12">
                                    <?php $p3 = $penjelasansd->row_array();?>
                                        <h3 class="box-title m-b-0">Visi, Misi dan Tujuan Bosowa Bina Insani Bogor</h3>
                                        <p class="text-muted m-b-30 font-13"> (Form ini untuk mengedit Visi, Misi dan Tujuan sekolah) </p>
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <label class="col-md-12">Isi Visi, Misi dan Tujuan Sekolah (Saat ini)</label>
                                                <div class="col-md-12">
                                                    <input type="hidden" name="xkode3" value="<?php echo $p3['id_unit'];?>">
                                                    <textarea class="form-control" rows="5" disabled><?php echo $p3['visi_misi'];?></textarea>
                                                </div>
                                            </div>
                                        </form>

                                        <form class="form-horizontal" action="<?php echo base_url().'admin/slider_unit_pendidikan/up_visitiga'?>" method="post">
                                            <div class="form-group">
                                                <label class="col-md-12">Isi Visi, Misi dan Tujuan Sekolah (Baru)</label>
                                                <div class="col-md-12">
                                                <input type="hidden" name="xkode3" value="<?php echo $p3['id_unit'];?>">
                                                    <textarea id="mymce" name="isi3" rows="5"><?php echo $p3['visi_misi'];?></textarea>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Update</button>
                                        </form>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="kurikulum3">
                                    <div class="col-md-12">
                                        <h3 class="box-title m-b-0">Kurikulum Bosowa Bina Insani Bogor</h3>
                                        <p class="text-muted m-b-30 font-13"> (Form ini untuk mengedit Kurikulum sekolah) </p>
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <label class="col-md-12">Isi Kurikulum Sekolah (Saat ini)</label>
                                                <div class="col-md-12">
                                                <input type="hidden" name="xkode3" value="<?php echo $p3['id_unit'];?>">
                                                    <textarea class="form-control" rows="5" disabled><?php echo $p3['kurikulum'];?></textarea>
                                                </div>
                                            </div>
                                        </form>

                                        <form class="form-horizontal" action="<?php echo base_url().'admin/slider_unit_pendidikan/up_kurtiga'?>" method="post">
                                            <div class="form-group">
                                                <label class="col-md-12">Isi Kurikulum Sekolah (Baru)</label>
                                                <div class="col-md-12">
                                                <input type="hidden" name="xkode3" value="<?php echo $p3['id_unit'];?>">
                                                    <textarea id="mymce" name="isi3" rows="5"><?php echo $p3['kurikulum'];?></textarea>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Update</button>
                                        </form>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="keunggulan3">
                                    <div class="col-md-12">
                                        <h3 class="box-title m-b-0">Keunggulan Bosowa Bina Insani Bogor</h3>
                                        <p class="text-muted m-b-30 font-13"> (Form ini untuk mengedit Keunggulan sekolah) </p>
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <label class="col-md-12">Isi Keunggulan Sekolah (Saat ini)</label>
                                                <div class="col-md-12">
                                                <input type="hidden" name="xkode3" value="<?php echo $p3['id_unit'];?>">
                                                    <textarea class="form-control" rows="5" disabled><?php echo $p3['keunggulan'];?></textarea>
                                                </div>
                                            </div>
                                        </form>

                                        <form class="form-horizontal" action="<?php echo base_url().'admin/slider_unit_pendidikan/up_unggultiga'?>" method="post">
                                            <div class="form-group">
                                                <label class="col-md-12">Isi Keunggulan Sekolah (Baru)</label>
                                                <div class="col-md-12">
                                                <input type="hidden" name="xkode3" value="<?php echo $p3['id_unit'];?>">
                                                    <textarea id="mymce" name="isi3" rows="5"><?php echo $p3['keunggulan'];?></textarea>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Update</button>
                                        </form>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="ekskul3">
                                    <div class="col-md-12">
                                        <h3 class="box-title m-b-0">Ekstrakurikuler Bosowa Bina Insani Bogor</h3>
                                        <p class="text-muted m-b-30 font-13"> (Form ini untuk mengedit Ekskul sekolah) </p>
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <label class="col-md-12">Isi Ekstrakurikuler Sekolah (Saat ini)</label>
                                                <div class="col-md-12">
                                                <input type="hidden" name="xkode3" value="<?php echo $p3['id_unit'];?>">
                                                    <textarea class="form-control" rows="5" disabled><?php echo $p3['ekskul'];?></textarea>
                                                </div>
                                            </div>
                                        </form>

                                        <form class="form-horizontal" action="<?php echo base_url().'admin/slider_unit_pendidikan/up_ekskultiga'?>" method="post">
                                            <div class="form-group">
                                                <label class="col-md-12">Isi Ekstrakurikuler Sekolah (Baru)</label>
                                                <div class="col-md-12">
                                                <input type="hidden" name="xkode3" value="<?php echo $p3['id_unit'];?>">
                                                    <textarea id="mymce" name="isi3" rows="5"><?php echo $p3['ekskul'];?></textarea>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Update</button>
                                        </form>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="profile3">
                                    <div class="col-md-12">
                                        <h3 class="box-title m-b-0">Profile Pembelajar Bosowa Bina Insani Bogor</h3>
                                        <p class="text-muted m-b-30 font-13"> (Form ini untuk mengedit Profile Pembelajar sekolah) </p>
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <label class="col-md-12">Isi Profile Pembelajar Sekolah (Saat ini)</label>
                                                <div class="col-md-12">
                                                <input type="hidden" name="xkode3" value="<?php echo $p3['id_unit'];?>">
                                                    <textarea class="form-control" rows="5" disabled><?php echo $p3['profil'];?></textarea>
                                                </div>
                                            </div>
                                        </form>

                                        <form class="form-horizontal" action="<?php echo base_url().'admin/slider_unit_pendidikan/up_profiltiga'?>" method="post">
                                            <div class="form-group">
                                                <label class="col-md-12">Isi Profile Pembelajar Sekolah (Baru)</label>
                                                <div class="col-md-12">
                                                <input type="hidden" name="xkode3" value="<?php echo $p3['id_unit'];?>">
                                                    <textarea id="mymce" name="isi3" rows="5"><?php echo $p3['profil'];?></textarea>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Update</button>
                                        </form>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="white-box">
                            <h3 class="box-title">Edit Info Detail TK dan PG</h3>
                            <!-- Nav tabs -->
                            <ul class="nav customtab nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#visi4" aria-controls="visi" role="tab" data-toggle="tab" aria-expanded="true"><span class="visible-xs"><i class="fa fa-institution"></i></span><span class="hidden-xs"> Visi, Misi, Tujuan</span></a></li>
                                <li role="presentation" class=""><a href="#kurikulum4" aria-controls="kurikulum" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="fa fa-certificate"></i></span> <span class="hidden-xs">Kurikulum</span></a></li>
                                <li role="presentation" class=""><a href="#keunggulan4" aria-controls="keunggulan" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="fa fa-star"></i></span> <span class="hidden-xs">Keunggulan</span></a></li>
                                <li role="presentation" class=""><a href="#ekskul4" aria-controls="ekskul" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="fa fa-cubes"></i></span> <span class="hidden-xs">Ekskul</span></a></li>
                                <li role="presentation" class=""><a href="#profile4" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="fa fa-address-book"></i></span> <span class="hidden-xs">Profil Pembelajar</span></a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade active in" id="visi4">
                                    <div class="col-md-12">
                                    <?php $p4 = $penjelasantk->row_array();?>
                                        <h3 class="box-title m-b-0">Visi, Misi dan Tujuan Bosowa Bina Insani Bogor</h3>
                                        <p class="text-muted m-b-30 font-13"> (Form ini untuk mengedit Visi, Misi dan Tujuan sekolah) </p>
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <label class="col-md-12">Isi Visi, Misi dan Tujuan Sekolah (Saat ini)</label>
                                                <div class="col-md-12">
                                                    <input type="hidden" name="xkode4" value="<?php echo $p4['id_unit'];?>">
                                                    <textarea class="form-control" rows="5" disabled><?php echo $p4['visi_misi'];?></textarea>
                                                </div>
                                            </div>
                                        </form>

                                        <form class="form-horizontal" action="<?php echo base_url().'admin/slider_unit_pendidikan/up_visiempat'?>" method="post">
                                            <div class="form-group">
                                                <label class="col-md-12">Isi Visi, Misi dan Tujuan Sekolah (Baru)</label>
                                                <div class="col-md-12">
                                                <input type="hidden" name="xkode4" value="<?php echo $p4['id_unit'];?>">
                                                    <textarea id="mymce" name="isi4" rows="5"><?php echo $p4['visi_misi'];?></textarea>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Update</button>
                                        </form>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="kurikulum4">
                                    <div class="col-md-12">
                                        <h3 class="box-title m-b-0">Kurikulum Bosowa Bina Insani Bogor</h3>
                                        <p class="text-muted m-b-30 font-13"> (Form ini untuk mengedit Kurikulum sekolah) </p>
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <label class="col-md-12">Isi Kurikulum Sekolah (Saat ini)</label>
                                                <div class="col-md-12">
                                                <input type="hidden" name="xkode4" value="<?php echo $p4['id_unit'];?>">
                                                    <textarea class="form-control" rows="5" disabled><?php echo $p4['kurikulum'];?></textarea>
                                                </div>
                                            </div>
                                        </form>

                                        <form class="form-horizontal" action="<?php echo base_url().'admin/slider_unit_pendidikan/up_kurempat'?>" method="post">
                                            <div class="form-group">
                                                <label class="col-md-12">Isi Kurikulum Sekolah (Baru)</label>
                                                <div class="col-md-12">
                                                <input type="hidden" name="xkode4" value="<?php echo $p4['id_unit'];?>">
                                                    <textarea id="mymce" name="isi4" rows="5"><?php echo $p4['kurikulum'];?></textarea>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Update</button>
                                        </form>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="keunggulan4">
                                    <div class="col-md-12">
                                        <h3 class="box-title m-b-0">Keunggulan Bosowa Bina Insani Bogor</h3>
                                        <p class="text-muted m-b-30 font-13"> (Form ini untuk mengedit Keunggulan sekolah) </p>
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <label class="col-md-12">Isi Keunggulan Sekolah (Saat ini)</label>
                                                <div class="col-md-12">
                                                <input type="hidden" name="xkode4" value="<?php echo $p4['id_unit'];?>">
                                                    <textarea class="form-control" rows="5" disabled><?php echo $p4['keunggulan'];?></textarea>
                                                </div>
                                            </div>
                                        </form>

                                        <form class="form-horizontal" action="<?php echo base_url().'admin/slider_unit_pendidikan/up_unggulempat'?>" method="post">
                                            <div class="form-group">
                                                <label class="col-md-12">Isi Keunggulan Sekolah (Baru)</label>
                                                <div class="col-md-12">
                                                <input type="hidden" name="xkode4" value="<?php echo $p4['id_unit'];?>">
                                                    <textarea id="mymce" name="isi4" rows="5"><?php echo $p4['keunggulan'];?></textarea>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Update</button>
                                        </form>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="ekskul4">
                                    <div class="col-md-12">
                                        <h3 class="box-title m-b-0">Ekstrakurikuler Bosowa Bina Insani Bogor</h3>
                                        <p class="text-muted m-b-30 font-13"> (Form ini untuk mengedit Ekskul sekolah) </p>
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <label class="col-md-12">Isi Ekstrakurikuler Sekolah (Saat ini)</label>
                                                <div class="col-md-12">
                                                <input type="hidden" name="xkode4" value="<?php echo $p4['id_unit'];?>">
                                                    <textarea class="form-control" rows="5" disabled><?php echo $p4['ekskul'];?></textarea>
                                                </div>
                                            </div>
                                        </form>

                                        <form class="form-horizontal" action="<?php echo base_url().'admin/slider_unit_pendidikan/up_ekskulempat'?>" method="post">
                                            <div class="form-group">
                                                <label class="col-md-12">Isi Ekstrakurikuler Sekolah (Baru)</label>
                                                <div class="col-md-12">
                                                <input type="hidden" name="xkode4" value="<?php echo $p4['id_unit'];?>">
                                                    <textarea id="mymce" name="isi4" rows="5"><?php echo $p4['ekskul'];?></textarea>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Update</button>
                                        </form>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="profile4">
                                    <div class="col-md-12">
                                        <h3 class="box-title m-b-0">Profile Pembelajar Bosowa Bina Insani Bogor</h3>
                                        <p class="text-muted m-b-30 font-13"> (Form ini untuk mengedit Profile Pembelajar sekolah) </p>
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <label class="col-md-12">Isi Profile Pembelajar Sekolah (Saat ini)</label>
                                                <div class="col-md-12">
                                                <input type="hidden" name="xkode4" value="<?php echo $p4['id_unit'];?>">
                                                    <textarea class="form-control" rows="5" disabled><?php echo $p4['profil'];?></textarea>
                                                </div>
                                            </div>
                                        </form>

                                        <form class="form-horizontal" action="<?php echo base_url().'admin/slider_unit_pendidikan/up_profilempat'?>" method="post">
                                            <div class="form-group">
                                                <label class="col-md-12">Isi Profile Pembelajar Sekolah (Baru)</label>
                                                <div class="col-md-12">
                                                <input type="hidden" name="xkode4" value="<?php echo $p4['id_unit'];?>">
                                                    <textarea id="mymce" name="isi4" rows="5"><?php echo $p4['profil'];?></textarea>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Update</button>
                                        </form>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
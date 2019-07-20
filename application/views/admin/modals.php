
                <!-- Modal Tambah Fasilitas -->
                <div class="modal fade" id="addfasilitas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="exampleModalLabel1">Fasilitas</h4> </div>
                            <div class="modal-body">
                            <?php echo form_open_multipart('admin/web_admin/simpan_fasilitas');?>
                                    <div class="form-group">
                                        <label for="recipient-name" class="control-label">Nama Fasilitas</label>
                                        <input type="text" class="form-control" name="nama_fasilitas" id="recipient-name1">
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="control-label">Deskripsi</label>
                                        <textarea class="form-control" name="desk" id="message-text1"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Unit Sekolah</label>
                                        <select class="form-control" name="xunit" data-placeholder="Choose a Category" tabindex="1">
                                            <option value="Status 1">-Pilih-</option>
                                            <?php
                                              $no=0;
                                              foreach($unit->result_array() as $i) :
                                                $no++;
                                                $id = $i['id_unit'];
                                                $nama = $i['nama_unit'];
                                            ?>
                                            <option value="<?php echo $id;?>"><?php echo $nama;?></option>
                                          <?php endforeach;?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                      <label for="message-text" class="control-label">Foto Fasilitas</label>
                                      <input type="file" name="fasilitasfoto">
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                            <?php echo form_close();?>
                        </div>
                    </div>
                </div>

                <!-- Modal Update Fasilitas -->
                <?php
                  foreach ($fasilitas->result_array() as $u) :
                    $idf=$u['id_fasilitas'];
                    $namafasilitas=$u['nama_fasilitas'];
                    $deskripsi=$u['deskripsi'];
                    $idunit=$u['id_unit'];
                    $ida=$u['id_author'];
                    $user=$u['nama_author'];
                    $foto=$u['foto_fasilitas'];
                ?>
                <div class="modal fade" id="FEdit<?php echo $idf;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="exampleModalLabel1">Fasilitas</h4> </div>
                            <div class="modal-body">
                            <?php echo form_open_multipart('admin/web_admin/up_fasilitas');?>
                                    <div class="form-group">
                                        <input type="hidden" name="idf" value="<?php echo $idf;?>">
                                        <label for="recipient-name" class="control-label">Nama Fasilitas</label>
                                        <input type="text" class="form-control" name="nama_fasilitas" id="recipient-name1" value="<?php echo $namafasilitas;?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="control-label">Deskripsi</label>
                                        <textarea class="form-control" name="desk" id="message-text1"><?php echo $deskripsi;?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Unit Sekolah</label>
                                        <select class="form-control" name="xunit" required>
                                            <option value="">-Pilih-</option>
                                            <?php
                                            foreach ($unit->result_array() as $i) {
                                               $id_unit=$i['id_unit'];
                                               $nama_unit=$i['nama_unit'];
                                               if($idunit==$id_unit)
                                                  echo "<option value='$id_unit' selected>$nama_unit</option>";
                                               else
                                                  echo "<option value='$id_unit'>$nama_unit</option>";
                                            }?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                      <label for="message-text" class="control-label">Foto Fasilitas</label>
                                      <input type="file" name="fasilitasfoto">
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>
                            <?php echo form_close();?>
                        </div>
                    </div>
                </div>
              <?php endforeach;?>

              <!-- Modal Hapus Fasilitas -->
              <?php
                foreach ($fasilitas->result_array() as $u) :
                  $idf=$u['id_fasilitas'];
                  $namafasilitas=$u['nama_fasilitas'];
                  $deskripsi=$u['deskripsi'];
                  $ida=$u['id_author'];
                  $user=$u['nama_author'];
                  $foto=$u['foto_fasilitas'];
              ?>
              <div class="modal fade" id="FHapus<?php echo $idf;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                              <h4 class="modal-title" id="myModalLabel">Hapus Fasilitas</h4>
                          </div>
                          <?php echo form_open_multipart('admin/web_admin/hapus_fasilitas')?>
                          <div class="modal-body">
      							       <input type="hidden" name="idf" value="<?php echo $idf;?>"/>
                           <input type="hidden" value="<?php echo $foto;?>" name="foto">
                                  <p>Apakah Anda yakin mau menghapus Fasilitas <b><?php echo $namafasilitas;?></b> ini ?</p>

                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary btn-flat" id="simpan">Hapus</button>
                          </div>
                          <?php echo form_close();?>
                      </div>
                  </div>
              </div>
            <?php endforeach;?>

            <!-- Modal Tambah Program -->
                <div class="modal fade" id="addprogram" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="exampleModalLabel1">Program</h4> </div>
                            <div class="modal-body">
                                <?php echo form_open_multipart('admin/web_admin/simpan_program');?>
                                    <div class="form-group">
                                        <label for="recipient-name" class="control-label">Nama Program</label>
                                        <input type="text" class="form-control" name="nama_program" id="recipient-name1">
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="control-label">Deskripsi</label>
                                        <textarea class="form-control" name="desk1" id="message-text1"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Unit Sekolah</label>
                                        <select class="form-control" name="xunit2" data-placeholder="Choose a Category" tabindex="1">
                                            <option value="Status 1">-Pilih-</option>
                                            <?php
                                              $no=0;
                                              foreach($unit->result_array() as $i) :
                                                $no++;
                                                $id = $i['id_unit'];
                                                $nama = $i['nama_unit'];
                                            ?>
                                            <option value="<?php echo $id;?>"><?php echo $nama;?></option>
                                          <?php endforeach;?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                      <label for="message-text" class="control-label">Foto Program</label>
                                      <input type="file" name="programfoto">
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                            <?php echo form_close();?>
                        </div>
                    </div>
                </div>

                <!-- Modal Update Program -->
                <?php foreach($program->result_array() as $prog) :
                  $idp = $prog['id_program'];
                  $namaprogram = $prog['nama_program'];
                  $deskripsip = $prog['deskripsi'];
                  $idus=$prog['id_unit_sekolah'];
                  $ida=$prog['id_author'];
                  $namau = $prog['nama_author'];
                  $fotop = $prog['foto_program'];
                ?>
                <div class="modal fade" id="PEdit<?php echo $idp;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="exampleModalLabel1">Program</h4> </div>
                            <div class="modal-body">
                            <?php echo form_open_multipart('admin/web_admin/up_program');?>
                                    <div class="form-group">
                                        <input type="hidden" name="idp" value="<?php echo $idp;?>">
                                        <label for="recipient-name" class="control-label">Nama Program</label>
                                        <input type="text" class="form-control" name="nama_program" id="recipient-name1" value="<?php echo $namaprogram;?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="control-label">Deskripsi</label>
                                        <textarea class="form-control" name="desk1" id="message-text1"><?php echo $deskripsip;?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Unit Sekolah</label>
                                        <select class="form-control" name="xunit2" required>
                                            <option value="">-Pilih-</option>
                                            <?php
                                            foreach ($unit->result_array() as $i) {
                                               $id_unit=$i['id_unit'];
                                               $nama_unit=$i['nama_unit'];
                                               if($idus==$id_unit)
                                                  echo "<option value='$id_unit' selected>$nama_unit</option>";
                                               else
                                                  echo "<option value='$id_unit'>$nama_unit</option>";
                                            }?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                      <label for="message-text" class="control-label">Foto Program</label>
                                      <input type="file" name="programfoto">
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>
                            <?php echo form_close();?>
                        </div>
                    </div>
                </div>
              <?php endforeach;?>

              <!-- Modal Hapus Program -->

              <?php foreach($program->result_array() as $prog) :
                $idp = $prog['id_program'];
                $namaprogram = $prog['nama_program'];
                $deskripsip = $prog['deskripsi'];
                $idu = $prog['id_author'];
                $namau = $prog['nama_author'];
                $fotop = $prog['foto_program'];
              ?>
              <div class="modal fade" id="PHapus<?php echo $idp;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                              <h4 class="modal-title" id="myModalLabel">Hapus Program</h4>
                          </div>
                          <?php echo form_open_multipart('admin/web_admin/hapus_program')?>
                          <div class="modal-body">
      							       <input type="hidden" name="idp" value="<?php echo $idp;?>"/>
                           <input type="hidden" value="<?php echo $fotop;?>" name="fotop">
                                  <p>Apakah Anda yakin mau menghapus Program <b><?php echo $namaprogram;?></b> ini ?</p>

                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary btn-flat" id="simpan">Hapus</button>
                          </div>
                          <?php echo form_close();?>
                      </div>
                  </div>
              </div>
            <?php endforeach;?>

            <!-- Modal Tambah Testimoni -->
            <div class="modal fade" id="addtesti" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="exampleModalLabel1">Testimoni</h4> </div>
                        <div class="modal-body">
                        <?php echo form_open_multipart('admin/web_admin/tambah_testimoni');?>
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">Nama Testimoni</label>
                                    <input type="text" class="form-control" name="nama_testi" id="recipient-name1">
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="control-label">Deskripsi</label>
                                    <textarea class="form-control" name="isi_testi" id="message-text1"></textarea>
                                </div>
                                <div class="form-group">
                                  <label for="email-text" class="control-label">Email</label>
                                  <input class="form-control" type="email" name="email_testi">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Status</label>
                                    <select class="form-control" name="status_testi" data-placeholder="Choose a Category" tabindex="1">
                                        <option value="Status 1">-Pilih-</option>
                                        <?php
                                          $no=0;
                                          foreach($status->result_array() as $i) :
                                            $no++;
                                            $id = $i['id_status'];
                                            $nama = $i['nama_status'];
                                        ?>
                                        <option value="<?php echo $id;?>"><?php echo $nama;?></option>
                                      <?php endforeach;?>
                                    </select>
                                </div>
                                <div class="form-group">
                                  <label for="message-text" class="control-label">Foto Testimoni</label>
                                  <input type="file" name="testifoto">
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                        <?php echo form_close();?>
                    </div>
                </div>
            </div>

            <!-- Modal Update Testimoni -->

            <?php
              foreach($testi->result_array() as $test) :
                $idt = $test['testimoni_id'];
                $nama = $test['testimoni_nama'];
                $isi = $test['testimoni_isi'];
                $email = $test['testimoni_email'];
                $ids = $test['id_status'];
                $stas = $test['nama_status'];
                $foto = $test['testimoni_foto'];
            ?>
            <div class="modal fade" id="TEdit<?php echo $idt;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="exampleModalLabel1">Testimoni</h4> </div>
                        <div class="modal-body">
                        <?php echo form_open_multipart('admin/web_admin/up_testimoni');?>
                                <div class="form-group">
                                    <input type="hidden" name="idt" value="<?php echo $idt;?>">
                                    <label for="recipient-name" class="control-label">Nama Testimoni</label>
                                    <input type="text" class="form-control" name="nama_testi" id="recipient-name1" value="<?php echo $nama;?>">
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="control-label">Deskripsi</label>
                                    <textarea class="form-control" name="isi_testi" id="message-text1"><?php echo $isi;?></textarea>
                                </div>
                                <div class="form-group">
                                  <label for="email-text" class="control-label">Email</label>
                                  <input class="form-control" type="email" name="email_testi" value="<?php echo $email;?>">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Status</label>
                                    <select class="form-control" name="status_testi" required>
                                        <option value="">-Pilih-</option>
                                        <?php
                                        foreach ($status->result_array() as $i) {
                                           $id_status=$i['id_status'];
                                           $nama_status=$i['nama_status'];
                                           if($ids==$id_status)
                                              echo "<option value='$id_status' selected>$nama_status</option>";
                                           else
                                              echo "<option value='$id_status'>$nama_status</option>";
                                        }?>
                                    </select>
                                </div>
                                <div class="form-group">
                                  <label for="message-text" class="control-label">Foto Testimoni</label>
                                  <input type="file" name="testifoto">
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                        <?php echo form_close();?>
                    </div>
                </div>
            </div>
          <?php endforeach;?>


          <!-- Modal Hapus Testimoni -->
          <?php
            foreach($testi->result_array() as $test) :
              $idt = $test['testimoni_id'];
              $nama = $test['testimoni_nama'];
              $isi = $test['testimoni_isi'];
              $email = $test['testimoni_email'];
              $sts = $test['nama_status'];
              $foto = $test['testimoni_foto'];
          ?>
          <div class="modal fade" id="THapus<?php echo $idt;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                          <h4 class="modal-title" id="myModalLabel">Hapus Testimoni</h4>
                      </div>
                      <?php echo form_open_multipart('admin/web_admin/del_testimoni')?>
                      <div class="modal-body">
                       <input type="hidden" name="idt" value="<?php echo $idt;?>"/>
                       <input type="hidden" value="<?php echo $foto;?>" name="testifoto">
                              <p>Apakah Anda yakin mau menghapus Testimoni dari <b><?php echo $nama;?></b> ini ?</p>

                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary btn-flat" id="simpan">Hapus</button>
                      </div>
                      <?php echo form_close();?>
                  </div>
              </div>
          </div>
        <?php endforeach;?>

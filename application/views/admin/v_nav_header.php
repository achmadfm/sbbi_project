<?php
    $query=$this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
    $query2=$this->db->query("SELECT * FROM tbl_komentar WHERE komentar_status='0'");
    $query3=$this->db->query("SELECT * FROM tbl_artikel");
    $artikel = $query3->row_array();
    $jum_pesan=$query->num_rows();
    $jum_comment=$query2->num_rows();
    $pesan=$jum_pesan;
    $comment=$jum_comment;
?>
<nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header">
        <div class="top-left-part">
            <!-- Logo -->
            <a class="logo" href="<?php echo base_url('admin/dashboard')?>">
              <img src="<?php echo base_url()?>template/logo.png" width="200px" alt="home" class="light-logo" />
            </a>
        </div>
        <!-- /Logo -->
        <!-- Search input and Toggle icon -->
        <ul class="nav navbar-top-links navbar-left">
            <li><a href="#" class="open-close waves-effect waves-light visible-xs"><i class="ti-close ti-menu"></i></a></li>
            <li class="dropdown">
                <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"> <i class="mdi mdi-gmail"></i>
                  <?php
                    if ($pesan>=1)
                      echo '<div class="notify"> <span class="heartbit"></span> <span class="point"></span></div>';
                    else
                      echo '<div class="notify"></div>'
                  ?>
                </a>
                <ul class="dropdown-menu mailbox animated bounceInDown">
                    <li>
                        <div class="drop-title">You have <?php echo $jum_pesan;?> Messages</div>
                    </li>
                    <?php
                      $inbox=$this->db->query("SELECT tbl_inbox.*,DATE_FORMAT(inbox_tanggal,'%d %M %Y') AS tanggal FROM tbl_inbox WHERE inbox_status='1' ORDER BY inbox_id DESC LIMIT 5");
                      foreach ($inbox->result_array() as $in) :
                          $inbox_id=$in['inbox_id'];
                          $inbox_nama=$in['inbox_nama'];
                          $inbox_tgl=$in['tanggal'];
                          $inbox_pesan=$in['inbox_pesan'];
                    ?>
                    <li>
                      <div class="message-center">
                          <a href="<?php echo base_url().'admin/inbox'?>">
                              <div class="user-img"> <img src="<?php echo base_url().'template/images/userblank.png'?>" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                              <div class="mail-contnet">
                                  <h5><?php echo $inbox_nama;?></h5> <span class="mail-desc"><?php echo $inbox_pesan;?></span> <span class="time"><?php echo $inbox_tgl;?></span> </div>
                          </a>
                      </div>
                    </li>
                  <?php endforeach;?>
                    <li>
                        <a class="text-center" href="<?php echo base_url().'admin/inbox'?>"> <strong>See all messages</strong> <i class="fa fa-angle-right"></i> </a>
                    </li>
                </ul>
                <!-- /.dropdown-messages -->
            </li>

            <li class="dropdown">
                <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="mdi mdi-comment-multiple-outline"></i>
                  <?php
                    if ($comment>=1)
                      echo '<div class="notify"> <span class="heartbit"></span> <span class="point"></span></div>';
                    else
                      echo '<div class="notify"></div>'
                  ?>
                </a>
                <?php if($comment>=1 && $pesan>=1) :?>
                  <div id="alerttopright" class="myadmin-alert myadmin-alert-img alert-info myadmin-alert-top-right"> <img src="<?php echo base_url().'template/images/userblank.png'?>" class="img" alt="img"><a href="javascript:void(0)" class="closed">&times;</a>
                  <h4>You have a Comment!</h4> <b>Someone</b> Comment your post</div>
                  <div id="alerttopleft" class="myadmin-alert myadmin-alert-img alert-info myadmin-alert-top-left"> <img src="<?php echo base_url().'template/images/userblank.png'?>" class="img" alt="img"><a href="javascript:void(0)" class="closed">&times;</a>
                  <h4>You have a Message!</h4> <b>Someone</b> sent you a message.</div>
                <?php else:?>
                <?php endif;?>
                <ul class="dropdown-menu mailbox animated bounceInDown">
                    <li>
                        <div class="drop-title">You have <?php echo $jum_comment;?> Comments</div>
                    </li>
                    <?php
                      $komentar=$this->db->query("SELECT tbl_komentar.*,DATE_FORMAT(komentar_tanggal,'%d %M %Y') AS tanggal FROM tbl_komentar WHERE komentar_status='0' ORDER BY komentar_id DESC LIMIT 5");
                      foreach ($komentar->result_array() as $k) :
                          $komentar_id=$k['komentar_id'];
                          $komentar_nama=$k['komentar_nama'];
                          $komentar_tgl=$k['komentar_tanggal'];
                          $komentar_pesan=$k['komentar_isi'];

                          $tb = $komentar_tgl;
                          date_default_timezone_set('Asia/Makassar');
                          $tanggal = date('d F Y');
                    ?>
                    <li>
                      <div class="message-center">
                          <a href="<?php echo base_url().'admin/komentar'?>">
                              <div class="user-img"> <img src="<?php echo base_url().'template/images/userblank.png'?>" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                              <div class="mail-contnet">
                                  <h5><?php echo $komentar_nama;?></h5> <span class="mail-desc"><?php echo $komentar_pesan;?></span> <span class="time"><?php echo $tanggal;?></span> </div>
                          </a>
                      </div>
                    </li>
                  <?php endforeach;?>
                    <li>
                        <a class="text-center" href="<?php echo base_url().'admin/komentar'?>"> <strong>See all Comments</strong> <i class="fa fa-angle-right"></i></a>
                    </li>
                </ul>
            </li>
            <li> 
              <a class="waves-effect waves-light" href="<?php echo base_url().'admin/insight'?>"><i class="mdi mdi-telegram"></i>
                <?php
                  if ($artikel['publish_status']=='0')
                    echo '<div class="notify"> <span class="heartbit"></span> <span class="point"></span></div>';
                  else
                    echo '<div class="notify"></div>'
                ?>
              </a>
            </li>
        </ul>
        <ul class="nav navbar-top-links navbar-right pull-right">
            <li>
                <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                    <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
            </li>
            <?php
              $id_admin=$this->session->userdata('idadmin');
              $q=$this->db->query("SELECT * FROM tbl_pengguna WHERE pengguna_id='$id_admin'");
              $c=$q->row_array();
          ?>
            <li class="dropdown">
                <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#">
                  <?php if(empty($c['pengguna_photo'])): ?>
                  <img src="<?php echo base_url().'template/images/userblank.png'?>" alt="user-img" width="36" class="img-circle"><b class="hidden-xs"><?php echo $c['pengguna_nama'];?></b><span class="caret"></span>
                <?php else: ?>
                  <img src="<?php echo base_url().'template/users/'.$c['pengguna_photo']?>" alt="user-img" width="36" class="img-circle"><b class="hidden-xs"><?php echo $c['pengguna_nama'];?></b><span class="caret"></span>
                <?php endif;?>
                </a>
                <ul class="dropdown-menu dropdown-user animated flipInY">
                    <li>
                        <div class="dw-user-box">
                            <div class="u-img">
                              <?php if(empty($c['pengguna_photo'])) : ?>
                              <img src="<?php echo base_url().'template/images/userblank.png'?>" alt="user" />
                            <?php else :?>
                              <img src="<?php echo base_url().'template/users/'.$c['pengguna_photo']?>" alt="user" />
                            <?php endif;?>
                            </div>
                            <div class="u-text"><h4><?php echo $c['pengguna_nama'];?></h4>
                              <p class="text-muted">
                                <?php if($c['pengguna_level']=='1'):?>
                                  Administrator
                                <?php else:?>
                                  Author
                                <?php endif;?>
                              </p>
                            </div>
                        </div>
                    </li>
                    <li role="separator" class="divider"></li>
                    <li><a href="<?php echo base_url('administrator/logout')?>"><i class="fa fa-power-off"></i> Logout</a></li>
                </ul>
                <!-- /.dropdown-user -->
            </li>

            <!-- /.dropdown -->
        </ul>
    </div>
</nav>

<?php
use yii\helpers\Html;
$this->title = 'Beranda';
$this->params['breadcrumbs'][] = $this->title;
?>
 <div class="box box-default color-palette-box">
        <div class="box-header with-border">
          <h3 class="box-title"> Detail Profil </h3>
        </div>
        <div class="">
          <div class="row">
            <div class="box-body">
              <section class="content hidden-xs">
                <div class="row">
                  <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="box box-primary">
                      <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-rounded" src="https://ecs7.tokopedia.net/img/cache/300/user-1/2017/4/11/4510496/4510496_902f887b-1341-4741-bcab-cc1c6cc9eca6.jpg" alt="User profile picture">
                        <h3 class="profile-username text-center">Wismo Abdul Aziz</h3>
                        <p class="text-muted text-center">Marketing Meneger</p>
                      </div>
                      <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-9">
                    <div class="box box-default color-palette-box">
                      <div class="box-body">
                          <ul class="products-list product-list-in-box">
                          <li class="item">
                            <span><p><i class="fa fa-envelope-o" aria-hidden="true"></i> thostampol@gmail.com</p></span>
                          </li>
                          <li class="item">
                            <span><p><i class="fa fa-phone-square" aria-hidden="true"></i> 082114041122</p></span>
                          </li>
                          <li class="item">
                            <span><p><i class="fa fa-building-o" aria-hidden="true"></i> PT Hanil Steel</p></span>
                          </li>
                          <li class="item">
                            <span><p><i class="fa fa-map-marker" aria-hidden="true"></i> Harapan Jaya, Bekasi Utara</p></span>
                          </li>
                          <!-- /.item -->
                          <a href="?r=site/ubahprofil" class="btn btn-warning"><i class="fa fa-cog" aria-hidden="true"></i> ubah profil</a>
                          <a href="?r=site/changepassword" class="btn btn-warning"><i class="fa fa-cog" aria-hidden="true"></i> ubah password</a>
                          <a href="?r=company/edit" class="btn btn-warning"><i class="fa fa-building" aria-hidden="true"></i> ubah profil company</a>
                        </ul>

                      </div>
                      <!-- /.box-body -->
                    </div>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </section>
              <!--VMobile-->
              <div class="col-md-4 hidden-md hidden-lg">
                <!-- Widget: user widget style 1 -->
                <div class="box box-widget widget-user">
                  <!-- Add the bg color to the header using any of the bg-* classes -->
                  <div class="widget-user-header bg-aqua-active">
                    <h3 class="widget-user-username">Wismo Abdul Aziz</h3>
                  </div>
                  <div class="widget-user-image">
                    <img class="img-circle" src="https://ecs7.tokopedia.net/img/cache/300/user-1/2017/4/11/4510496/4510496_902f887b-1341-4741-bcab-cc1c6cc9eca6.jpg" alt="User Avatar">
                  </div>
                  <div class="box-footer">
                    <div class="row">
                    </div>
                    <!-- /.row -->
                  </div>
                </div>
                <!-- /.widget-user -->
              </div>
              <!--VMobile-->
            </div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>
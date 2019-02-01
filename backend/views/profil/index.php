<?php
use yii\helpers\Html;
$this->title = 'Beranda';
$this->params['breadcrumbs'][] = $this->title;
?>
 <div class="box box-default color-palette-box">
        <div class="box-header with-border">
          <h3 class="box-title"> Detail Profil </h3>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="box-body">
              <section class="content">
                <div class="row">
                  <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="box box-primary">
                      <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-rounded" src="https://ecs7.tokopedia.net/img/cache/300/user-1/2017/4/11/4510496/4510496_902f887b-1341-4741-bcab-cc1c6cc9eca6.jpg" alt="User profile picture">

                        <h3 class="profile-username text-center"><?= $model -> firstname; ?></h3>

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
                            <span><p><i class="fa fa-envelope-o" aria-hidden="true"></i> <?= $model -> email; ?></p></span>
                          </li>
                          <li class="item">
                            <span><p><i class="fa fa-phone-square" aria-hidden="true"></i> <?= $model -> nohp; ?></p></span>
                          </li>
                          <li class="item">
                            <span><p><i class="fa fa-building-o" aria-hidden="true"></i> <a href="?r=company/"><?= $model2 -> namacmp; ?></a></p></span>
                          </li>
                          <li class="item">
                            <span><p><i class="fa fa-map-marker" aria-hidden="true"></i> <?= $model -> alamat; ?>, <?= $model -> kecamatan; ?>, <?= $model -> kotamadya; ?>, <?= $model -> provinsi; ?></p></span>
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
            </div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>
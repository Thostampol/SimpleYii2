<?php
use yii\helpers\Html;
$this->title = 'Rubah Password';
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
                  <div class="col-md-12">
                      <div class="box-body box-profile">
                        <form>
                        <div class="form-group">
                          <label>Masukan Password Lama Anda</label>
                          <input class="form-control" type="password" name="passlama" required>
                        </div>
                        <div class="form-group">
                          <label>Masukan Password Baru</label>
                          <input class="form-control" type="password" name="passbaru" required>
                        </div>
                        <div class="form-group">
                          <label>Ketik Ulang Password</label>
                          <input class="form-control" type="password" name="retypepass" required>
                        </div>
                        <div class="form-group">
                          <button class="btn btn-success" name="submit">Submit</button>
                        </div>
                      </form>
                      </div>
                    <!-- /.box -->
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
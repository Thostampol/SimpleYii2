<?php
use yii\helpers\Html;
$this->title = 'Ubah Profil';
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
                          <label>Nama</label>
                          <input class="form-control" type="text" name="nama" value="Thostampol" disabled>
                        </div>
                        <div class="form-group">
                          <label>Email</label>
                          <input class="form-control" type="text" name="email" value="thostampol@gmail.com" disabled>
                        </div>
                        <div class="form-group">
                          <label>No HP</label>
                          <input class="form-control" type="text" name="nohp">
                        </div>
                        <div class="form-group">
                          <label>Alamat</label>
                          <textarea name="alamat" class="form-control" style="resize: none">
                          </textarea>
                        </div>
                        <div class="form-group">
                          <label>Provinsi</label>
                          <select name="provinsi" class="form-control">
                            <option>DKI Jakarta</option>
                            <option>Jawa Barat</option>
                            <option>Jawa Tengah</option>
                            <option>Jawa Timur</option>
                            <option>Yogyakarta</option>
                          </select>
                        </div>
                        <div class="form-group">
                        <label>Kotamadya</label>
                        <select name="kotamadya" class="form-control">
                          <option>Jakarta Timur</option>
                          <option>Jakarta Utara</option>
                          <option>Bekasi</option>
                          <option>Semarang</option>
                          <option>Klaten</option>
                        </select>
                        </div>
                        <div class="form-group">
                        <label>Kecamatan</label>
                         <select name="kecamatan" class="form-control">
                          <option>Bekasi Utara</option>
                          <option>Bekasi Timur</option>
                          <option>Cikarang</option>
                          <option>Bekasi Barat</option>
                          <option>Klaten</option>
                        </select>
                        </div>
                        <div class="form-group">
                        <button type="submit" class="btn btn-success">Submit</button>    
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
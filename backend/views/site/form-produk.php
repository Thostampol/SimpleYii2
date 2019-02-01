<?php
use yii\helpers\Html;
$this->title = 'Input Produk';
$this->params['breadcrumbs'][] = $this->title;
?>
 <div class="box box-default color-palette-box">
        <div class="box-header with-border">
          <h3 class="box-title"> Tambah Produk </h3>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="box-body">
              <section class="content">
                <div class="row">
                  <div class="col-md-12">
                    <div class="">
                      <form role="form">
                        <div class="box-body">
                          <div class="form-group">
                            <label>Nama Produk</label>
                            <input class="form-control" placeholder="" type="text">
                          </div>
                          <div class="form-group">
                            <label>Kategori</label>
                            <select class="form-control">
                              <option>Matrial Bangunan</option>
                              <option>Komponen Bangunan</option>
                              <option>Perkakas Bangunan</option>
                              <option>Interior dan Decoration</option>
                              <option>Bahan Elektrik, Lampu dan Penerangan</option>
                              <option>Pemanas , ventilasi dan AC</option>
                              <option>Perlindungan Bangunan</option>
                              <option>Struktur dan Konstruksi</option>
                              <option>Pertamanan</option>
                              <option>Perlindungan Keamaman dan Keselamatan </option>
                              <option>Perkakas dan Peralatan</option>
                              <option>Mesin Konstruksi</option>
                              <option>Bahan Elektrik, Lampu dan Penerangan</option>
                              <option>Inspeksi dan testing</option>
                              <option>Transportasi</option>
                              <option>Pemindah, Pengangkat, Alat Berat</option>
                              <option>Software</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Sub Kategori</label>
                            <select class="form-control">
                              <option>Sub Kategori 1</option>
                              <option>Sub Kategori 2</option>
                              <option>Sub Kategori 3</option>
                              <option>Sub Kategori 4</option>
                              <option>Sub Kategori 5</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Sub Kategori</label>
                            <select class="form-control">
                              <option>Sub Sub Kategori 1</option>
                              <option>Sub Sub Kategori 2</option>
                              <option>Sub Sub Kategori 3</option>
                              <option>Sub Sub Kategori 4</option>
                              <option>Sub Sub Kategori 5</option>
                            </select>
                          </div>
                          <!-- <div class="form-group">
                            <label>Dimensi</label>
                            <input class="form-control"  placeholder="" type="text">
                          </div> -->
                          <div class="form-group">
                            <label>Variasi</label>
                            <input class="form-control"  placeholder="pisahkan dengan koma contoh merah,biru,kuning" type="text">
                          </div>
                          <div class="form-group">
                            <label>Gambar Produk</label>
                            <input type="file">
                          </div>
                          <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                          </div>
                          <div class="form-group">
                            <label>Jenis Produk</label>
                            <select class="form-control">
                              <option>Jual</option>
                              <option>Sewa</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Spesifikasi Produk</label>
                            <input type="file">
                          </div>
                          <div class="form-group">
                            <label>Harga Produk</label>
                            <input class="form-control"  placeholder="" type="text">
                          </div>
                          <div class="form-group">
                            <label>Tags</label>
                            <input class="form-control"  placeholder="" type="text">
                          </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        <!-- /.box-body -->
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
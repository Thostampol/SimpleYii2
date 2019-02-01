<?php
use yii\helpers\Html;
$this->title = 'Daftar Pemesanan Produk';
$this->params['breadcrumbs'][] = $this->title;
?>
 <div class="box box-default color-palette-box">
        <div class="box-header with-border">
          <h3 class="box-title"> Daftar Pemesanan Masuk </h3>
        </div>
        <div class="table-responsive box-body">
          <div class="row">
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Pemesann</th>
                  <th>Daftar Barang</th>
                  <th>Tanggal Pesan</th>
                  <th>Satus</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>Chasana Global</td>
                  <td>Besi Ulir, Besi Siku, Paku Bumi</td>
                  <th>8 November 2017</th>
                  <th><span class="label label-default">Belum di Proses</span></th>
                  <td><div class="btn-group">
                     <a href="?r=site/detailpesan" class="btn btn-warning">detail</a>
                    <a href="#" class="btn btn-danger">batalkan</a>
                    </div>
                  </td>
                </tr>
                  <tr>
                  <td>2</td>
                  <td>Bekasi Steel</td>
                  <td>Keramik, Semen, Kayu</td>
                  <th>9 November 2017</th>
                  <th><span class="label label-warning">Menunggu Konfirmasi Pembayaran</span></th>
                  <td><div class="btn-group">
                     <a href="?r=site/detailpesan" class="btn btn-warning">detail</a>
                      <a href="#" class="btn btn-danger">batalkan</a>
                    </div>
                  </td>
                </tr>
                  <tr>
                  <td>3</td>
                  <td>Bekasi Steel</td>
                  <td>Keramik, Semen, Kayu</td>
                  <th>10 November 2017</th>
                  <th><span class="label label-info">Mengirim</span></th>
                  <td>
                    <div class="btn-group">
                     <a href="?r=site/detailpesan" class="btn btn-warning">detail</a>
                     <a href="#" class="btn btn-danger">batalkan</a>
                    </div>
                  </td>
                </tr>
                  <tr>
                  <td>4</td>
                  <td>Bekasi Steel</td>
                  <td>Keramik, Semen, Kayu</td>
                  <th>11 November 2017</th>
                  <th><span class="label label-success">Telah Diterima</span></th>
                  <td>
                    <div class="btn-group">
                     <a href="?r=site/detailpesan" class="btn btn-warning">detail</a>
                     <a href="#" class="btn btn-danger">batalkan</a>
                    </div>
                  </td>
                </tr>
                </tfoot>
              </table>
            </div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>
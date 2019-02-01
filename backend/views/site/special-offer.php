<?php
use yii\helpers\Html;
$this->title = 'Daftar Special Offer';
$this->params['breadcrumbs'][] = $this->title;
?>
 <div class="box box-default color-palette-box">
        <div class="box-header with-border">
          <h3 class="box-title"> Daftar Special Offer </h3>
        </div>
        <div class="table-responsive box-body">
          <div class="row">
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Produk yang di Tawarkan</th>
                  <th>Tanggal Post Penawaran </th>
                  <th>Tanggal Expired</th>
                  <th>Satus</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>Besi Ulir, Besi Siku, Paku Bumi</td>
                  <th>8 November 2017</th>
                  <th>8 Januari 2017</th>
                  <th><span class="label label-success">Aktif</span></th>
                  <td><div class="btn-group">
                     <a title="detail" href="?r=site/specialofferdetail"><i class="fa fa-eye" aria-hidden="true"></i></a>
                     <a title="hapus" href="#"><i class="fa fa-ban" aria-hidden="true"></i></a>
                    </div>
                  </td>
                </tr>
                  <tr>
                  <td>2</td>
                  <td>Keramik, Semen, Kayu</td>
                  <th>9 November 2017</th>
                  <th>9 Desember 2017</th>
                  <th><span class="label label-success">Aktif</span></th>
                  <td><div class="btn-group">
                     <a title="detail" href="?r=site/specialofferdetail"><i class="fa fa-eye" aria-hidden="true"></i></a>
                     <a title="hapus" href="#"><i class="fa fa-ban" aria-hidden="true"></i></a>
                    </div>
                  </td>
                </tr>
                  <tr>
                  <td>3</td>
                  <td>Keramik, Semen, Kayu</td>
                  <th>10 November 2017</th>
                  <th>10 Desember 2017</th>
                  <th><span class="label label-success">Aktif</span></th>
                  <td>
                    <div class="btn-group">
                     <a title="detail" href="?r=site/specialofferdetail"><i class="fa fa-eye" aria-hidden="true"></i></a>
                     <a title="hapus" href="#"><i class="fa fa-ban" aria-hidden="true"></i></a>
                    </div>
                  </td>
                </tr>
                  <tr>
                  <td>4</td>
                  <td>Keramik, Semen, Kayu</td>
                  <th>11 November 2017</th>
                  <th>11 Desember 2017</th>
                  <th><span class="label label-warning">Kadaluarsa</span></th>
                  <td>
                    <div class="btn-group">
                     <a title="detail" href="?r=site/specialofferdetail"><i class="fa fa-eye" aria-hidden="true"></i></a>
                     <a title="hapus" href="#"><i class="fa fa-ban" aria-hidden="true"></i></a>
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
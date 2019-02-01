<?php
use yii\helpers\Html;
$this->title = 'Recyle Bin';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-default color-palette-box">
  <div class="box-header with-border">
    <h3 class="box-title"> Daftar Terhapus </h3>
  </div>
  <div class="table-responsive box-body">
    <div class="row">
      <div class="box-body">
        <table id="example2" class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>No</th>
              <th>Gambar</th>
              <th>Nama Produk</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td><img class="img-responsive" src="../web/img/baut.png" style="max-height: 100px;">
              </td>
              <td>Produk Satu</td>

              <td><div class="btn-group">
                <button type="button" class="btn btn-success btn-flat"><i class="fa fa-recycle" aria-hidden="true"></i></button>
                <button type="button" class="btn btn-warning btn-flat"><i class="fa fa-fw fa-trash"></i></button>
              </div>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td><img class="img-responsive" src="../web/img/baut.png" style="max-height: 100px;">
            </td>
            <td>Produk Dua</td>
            <td><div class="btn-group">
              <button type="button" class="btn btn-success btn-flat"><i class="fa fa-recycle" aria-hidden="true"></i></button>
              <button type="button" class="btn btn-warning btn-flat"><i class="fa fa-fw fa-trash"></i></button>
            </div></td>
          </tr>
          <tr>
            <td>3</td>
            <td><img class="img-responsive" src="../web/img/baut.png" style="max-height: 100px;">
            </td>
            <td>Produk Tiga</td>
            <td><div class="btn-group">
              <button type="button" class="btn btn-success btn-flat"><i class="fa fa-recycle" aria-hidden="true"></i></button>
              <button type="button" class="btn btn-warning btn-flat"><i class="fa fa-fw fa-trash"></i></button>
            </div></td>
          </tr>
          <tr>
            <td>4</td>
            <td>
              <img class="img-responsive" src="../web/img/baut.png" style="max-height: 100px;">
            </td>
            <td>Produk Empat</td>
            <td><div class="btn-group">

              <button type="button" class="btn btn-success btn-flat"><i class="fa fa-recycle" aria-hidden="true"></i></button>
              <button type="button" class="btn btn-warning btn-flat"><i class="fa fa-fw fa-trash"></i></button>
            </div></td>
          </tr>
          <tr>
            <td>5</td>
            <td><img class="img-responsive" src="../web/img/baut.png" style="max-height: 100px;"></td>
            <td>Produk Lima</td>
            <td><div class="btn-group">

              <button type="button" class="btn btn-success btn-flat"><i class="fa fa-recycle" aria-hidden="true"></i></button>
              <button type="button" class="btn btn-warning btn-flat"><i class="fa fa-fw fa-trash"></i></button>
            </div></td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
  <!-- /.row -->
</div>
<!-- /.box-body -->
</div>
    <script>
      $(function () {
        $('#example2').DataTable({
          'paging'      : true,
          'lengthChange': false,
          'searching'   : true,
          'ordering'    : true,
          'info'        : true,
          'autoWidth'   : false
        })
      });
    </script>
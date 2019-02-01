<?php

/* @var $this yii\web\View */

$this->title = 'Imatkon';
?>
 <div class="box box-default color-palette-box">
        <div class="box-header with-border">
          <h3 class="box-title"> Daftar Produk </h3>
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
                  <th>Engine version</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td><img class="img-responsive" src="../web/img/baut.png" style="max-height: 100px;">
                  </td>
                  <td>Produk Satu</td>
                  <td> 4</td>
                  <td><div class="btn-group">
                      <button type="button" class="btn btn-warning btn-flat"><i class="fa fa-fw fa-eye"></i></button>
                      <button type="button" class="btn btn-warning"><i class="fa fa-fw fa-edit"></i></button>
                      <button type="button" class="btn btn-warning btn-flat"><i class="fa fa-fw fa-trash"></i></button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td><img class="img-responsive" src="../web/img/baut.png" style="max-height: 100px;">
                  </td>
                  <td>Produk Dua</td>
                  <td>5</td>
                  <td><div class="btn-group">
                      <button type="button" class="btn btn-warning btn-flat"><i class="fa fa-fw fa-eye"></i></button>
                      <button type="button" class="btn btn-warning"><i class="fa fa-fw fa-edit"></i></button>
                      <button type="button" class="btn btn-warning btn-flat"><i class="fa fa-fw fa-trash"></i></button>
                    </div></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td><img class="img-responsive" src="../web/img/baut.png" style="max-height: 100px;">
                  </td>
                  <td>Produk Tiga</td>
                  <td>5.5</td>
                  <td><div class="btn-group">
                      <button type="button" class="btn btn-warning btn-flat"><i class="fa fa-fw fa-eye"></i></button>
                      <button type="button" class="btn btn-warning"><i class="fa fa-fw fa-edit"></i></button>
                      <button type="button" class="btn btn-warning btn-flat"><i class="fa fa-fw fa-trash"></i></button>
                    </div></td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>
                    <img class="img-responsive" src="../web/img/baut.png" style="max-height: 100px;">
                  </td>
                  <td>Produk Empat</td>
                  <td>6</td>
                  <td><div class="btn-group">
                      <button type="button" class="btn btn-warning btn-flat"><i class="fa fa-fw fa-eye"></i></button>
                      <button type="button" class="btn btn-warning"><i class="fa fa-fw fa-edit"></i></button>
                      <button type="button" class="btn btn-warning btn-flat"><i class="fa fa-fw fa-trash"></i></button>
                    </div></td>
                </tr>
                <tr>
                  <td>5</td>
                  <td><img class="img-responsive" src="../web/img/baut.png" style="max-height: 100px;"></td>
                  <td>Produk Lima</td>
                  <td>7</td>
                  <td><div class="btn-group">
                      <button type="button" class="btn btn-warning btn-flat"><i class="fa fa-fw fa-eye"></i></button>
                      <button type="button" class="btn btn-warning"><i class="fa fa-fw fa-edit"></i></button>
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
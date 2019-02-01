<?php
use yii\helpers\Html;
$this->title = 'Detail Permintaan Barang';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-default color-palette-box">
  <div class="box-header with-border">
    <h3 class="box-title"> Detail Special Offer </h3>
  </div>
  <div class="box-body">
    <ul class="products-list product-list-in-box">
      <!-- /.item -->
      <li class="item">
        <div class="col-md-3 col-lg-3">
          <img src="../web/img/baut.png" alt="Product Image">
         
        </div>
        <div class="col-lg-8 col-md-8">               
          <table class="table">                   
            <tbody>
            <tr>
              <td >Kategori Produk</td>
              <td >:</td>
              <td>Produk Besi Baja, </td>
            </tr>                 

            <tr>
              <td >Nama Produk</td>
              <td>:</td>
              <td>Steel pipe</td>
            </tr>                 

            <tr>
              <td>Status Penawaran</td>
              <td>:</td>
              <td>JUAL</td>
            </tr>                   
            <tr>
              <td>Kondisi Material</td>
              <td>:</td>
              <td>BARU</td>
            </tr>                   
            <tr>
              <td>Lokasi Material</td>
              <td>:</td>
              <td>Bekasi </td>
            </tr>                   
            <tr>
              <td>Jumlah</td>
              <td>:</td>
              <td>100 Ton</td>
            </tr>
            <tr>
              <td>Doc file</td>
              <td>:</td>
              <td><a target="_blank" href="images/offer/doc/LcGiUDsRB0pZOgvPNFgGcY8XiO0qRr9suFBf9TWASbpxiLdWhk.jpg">Doc file</a></td>
            </tr>
            <tr>
              <td>Harga</td>
              <td>:</td>
              <td>IDR 5,000,000 / Ton</td>
            </tr> 

            <tr>
              <td>Berlaku hingga</td>
              <td>:</td>
              <td>22-Dec-2017</td>
            </tr>

            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>
                <div class="row">
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <img src="images/offer/pic/tk9q8g67wNov7I1xOZgApZCFnKgqxoAQyy7wE2t2FHnBgeYU45.jpg" class="max-img-default">

                    </div>

                    <div class="col-md-6">
                      <img src="images/offer/pic/liUNN8oUnL9NsxcoTHgcyLKMcRQ1CJVNSGrvDFgQhfuzCxOm5V.jpg" class="max-img-default">

                    </div>
                  </div>
                </div>
              </td>
            </tr>       
          </tbody>
        </table>
          </div>
      </li>
    </ul>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <!-- USERS LIST -->
    <div class="box box-danger">
      <div class="box-header with-border">
        <h3 class="box-title">Detail Permintaan</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <p> Subjek : Test Test Test</p>
        <p> Jumlah Permintaan : Test Test Test</p>
        <p> Keterangan : Test Test Test</p>
        <p> Dokumen terlampir : <a class="label label-primary" href="#"  data-toggle="modal" data-target="#myModal"><i class="fa fa-download" aria-hidden="true"></i> Download</a></p>
      </div>
      <div class="box-body">
        <button class="btn btn-success">Terima Permintaan</button>
      </div>
      <!-- /.box-body -->
    </div>
    <!--/.box -->
  </div>
 </div>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4> 
      </div>
      <div class="modal-body">
        <div style="text-align: center;">
      <iframe src="http://docs.google.com/gview?url=http://ptgis.com/supportletter/sambutanDeprind.pdf&embedded=true" 
      style="width:500px; height:500px;" frameborder="0"></iframe>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

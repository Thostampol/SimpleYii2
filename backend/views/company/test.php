<?php 
use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;
$this->title = 'Detail Perusahaan';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php foreach ($model as $model) { ?>
<div class="box box-default color-palette-box">
  <div class="box-body">
    <div class="row">
      <div class="box-body">
        <section class="content">
          <div class="row">
            <div class="col-md-2">
            
              <!-- Profile Image -->
              <div class="box box-primary">
                <div class="box-body">
                  <img class="img-responsive" src="../web/img/uploads/300x300/<?php echo $model->comprofpic -> image ?>"/>
                </div>
                <!-- /.box-body -->
                <a href="?r=comprofpic/logo" class="btn btn-warning btn-block">Pilih Gambar</a>
              </div>
              <!-- /.box -->
            </div>
            <!-- /.col -->
            <div class="col-md-10">
              <div class="box box-primary color-palette-box">
                <div class="box-body">
                  <img class="img-responsive" src="../web/img/uploads/1200x280/<?php echo $model->comprofpic -> image2 ?>"/>
                </div>
                <!-- /.box-body -->
                <div class="box-body">
                   <a href="?r=comprofpic/banner" class="btn btn-warning btn-xs">Pilih Gambar</a>  
                </div>
                
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
 <div class="box box-default color-palette-box">
        <div class="box-header with-border">
          <h3 class="box-title">Detail Perusahaan</h3>
        </div>
        <div class="box-body">
          <div class="">
            <div class="box-body">
              <ul class="products-list product-list-in-box">
              	
                <li class="item">
                 Nama Perusahaan : <?php echo $model->company-> namacmp ?>
                </li>
                <li class="item">
                 Kategori Perusahaan : <?php echo $model ->nama_kat ?>
                </li>
                <li class="item">
                 Nomor Telepon : <?php echo $model -> company->notlp ?>
                </li>
                <li class="item">
                 Nomor Fax : <?php echo $model ->company-> nofax ?>
                </li>
                <li class="item">
                Alamat : <?php echo $model ->company-> alamat ?>
                </li>
                <li class="item">
                Kalurahan : <?php echo $model ->company-> kelurahan ?>
                </li>
                <li class="item">
                Kecamatan : <?php echo $model ->kecamatan-> nama ?>
                </li>
                <li class="item">
                Kota : <?php echo $model ->kecamatan-> nama ?>    
                </li>
                <li class="item">
                Provinsi : <?php echo $model->provinsi -> nama ?>
                </li>
                <li class="item">
                Website : <?php echo $model->company-> website ?>
                </li>
                <!-- /.item -->
              </ul>
            </div>
          </div>
          <!-- /.row -->
        </div>
        <div class="box-body">
          <a class="btn btn-warning" href="?r=company/edit">ubah profil perusahaan</a>
        </div>
        <!-- /.box-body -->
  </div>
<?php	} ?>



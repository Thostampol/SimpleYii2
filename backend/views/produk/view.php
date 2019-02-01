<?php 
use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = "Produk Detail";
$this->params['breadcrumbs'][] = ['label' => 'Produk Detail', 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->id;
?>
<div class="row">
		<?php if($model->imageproduk !=''){ ?>
			<?php foreach ($arr as $pathimg) { ?>
				<div class="col-md-3">
				    <div class="box box-primary">
					    <div class="box-body box-profile">
							<img class='img-responsive' src='../web/img/uploads/<?=$pathimg?>' alt='no-image-produk'>
						</div>
		    		</div>
	 			</div>
			<?php } ?>
		<?php }else{ ?>
				<div class="col-md-3">
				    <div class="box box-primary">
					    <div class="box-body box-profile">
							<img class='img-responsive' src='../web/img/uploads/no-image.jpg' alt='no-image-produk'>
						</div>
		    		</div>
	 			</div>
		<?php } ?>

	 	<div class="col-md-12">
	    <div class="box box-primary">
	    	<div class="box-body">
	    		<ul class="products-list product-list-in-box">
	    			<li class="item">
	    				Nama Produk : <?=$model->nmproduk?>
	    			</li>
	    			<li class="item">
	    				Kategori Produk : <?=$model->kategori->nama_kat?>
	    			</li>
	    			<li class="item">
	    				Variasi Produk : <?=$model->variasi?>
	    			</li>
	    			<li class="item">
	    				Deskripsi Produk : <br> <?=$model->deskripsi?>
	    			</li>
	    			<li class="item">
	    				Jenis Jual : <?=$model->jnsjual?>
	    			</li>
	    			<li class="item">
	    				Harga : <?=number_format($model->harga)?>
	    			</li>
	    			<li class="item">
	    				Tagline Produk : <?=$model->tag?>
	    			</li>
	    			<li class="item">
	    				Spesifikasi Produk : 
	    				<?php
	    				if($model->spesifikasi !=''): ?>
	    					<a href="../web/img/uploads/doc/<?=$model->spesifikasi?>"><i class="fa fa-download" aria-hidden="true"></i> <?=$model->spesifikasi?></a>
	    				<?php else: ?>
	    					<span class="label label-info">tidak tersedia</span>
	    				<?php endif; ?>
	    			</li>
	    		</ul>
	    		<a class="btn btn-xs btn-warning" href="#">ubah detail produk</a>
	    	</div>
	    </div>
	 </div>
</div>

    <!-- /.row -->

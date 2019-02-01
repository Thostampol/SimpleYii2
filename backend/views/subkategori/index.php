<?php 
use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use yii\widgets\Pjax;
$this->title = 'Sub Kategori';
$this->params['breadcrumbs'][] = $this->title;
?>
 <div class="box box-default color-palette-box">
        <div class="box-header with-border">
          <h3 class="box-title"><?= Html::a('Tambah Sub Kategori', ['subkategori/create'], ['class' => 'btn btn-success']) ?></h3>
        </div>
        <div class="table-responsive box-body">
          <div class="row">
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
              	<thead>
				<tr>
					<th>ID Sub Kat</th>
					<th>Nama</th>
					<th>ID Kategori</th>
				</tr>		
				</thead>
				<tbody>
				<tr>
					<?php foreach ($model as $field) { ?>
					<td><?= $field-> id_subkat; ?></td>
					<td><?= $field-> nama; ?></td>
					<td><?= $field-> id_kat; ?></td>
					<td><?= Html::a('Edit', ['subkategori/edit', 'id' => $field -> id_subkat ],['class' => 'btn btn-success']); ?>
					    <?= Html::a('Delete', ['delete', 'id' => $field -> id_subkat ], ['class' => 'btn btn-danger', 'data' => [ 'confirm' => 'Are you sure you want to delete this item?', 'method' => 'post', ], ]) ?>
					</td>
				</tr>
				<?php } ?>
				</tbody>
              </table>
            </div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>
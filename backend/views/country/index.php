<?php 
use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use yii\widgets\Pjax;
?>
 <div class="box box-default color-palette-box">
        <div class="box-header with-border">
          <h3 class="box-title"><?= Html::a('Tambah Country', ['country/create'], ['class' => 'btn btn-success']) ?></h3>
        </div>
        <div class="table-responsive box-body">
          <div class="row">
            <div class="box-body">
            	<?php Pjax::begin(['enablePushState' => false]) ?>
		        <?= GridView::widget([
		        'dataProvider' => $dataProvider,
		        'filterModel' => $searchModel,
		        'columns' => [
		        	['class' => 'yii\grid\SerialColumn'],

		        	'id',
		        	'nama',

		        	['class' => 'yii\grid\ActionColumn',
		        	'template' => '{view} {edit} {delete}',
		        	'buttons' => [
		        		'edit' => function ($url,$model) {
		        			return Html::a(
		        				'<i class="fa fa-pencil-square-o" aria-hidden="true"></i>', 
		        				$url);
		        		},
		        		'delete' => function ($url,$model) {
		        			return Html::a(
		        				'<i class="fa fa-pencil-square-o" aria-hidden="true"></i>', 
		        				$url);
		        		},
		        	],

		        ],
		    ],
		    ]); ?>
		    <?php Pjax::end() ?>
              <table id="example2" class="table table-bordered table-hover">
              	<thead>
				<tr>
					<th>ID</th>
					<th>Nama</th>
				</tr>		
				</thead>
				<tbody>
				<tr>
					<?php foreach ($model as $field) { ?>
					<td><?= $field-> id; ?></td>
					<td><?= $field-> nama; ?></td>
					<td><?= Html::a('Edit', ['country/edit', 'id' => $field -> id ],['class' => 'btn btn-success']); ?>
					    <?= Html::a('Delete', ['delete', 'id' => $field -> id ], ['class' => 'btn btn-danger', 'data' => [ 'confirm' => 'Are you sure you want to delete this item?', 'method' => 'post', ], ]) ?>
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
<?php 
use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\Pjax;
use kartik\grid\GridView;
use kartik\export\ExportMenu;

$this->title = 'Produk';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php 
$gridColumns = [
	[
		'class' => '\kartik\grid\SerialColumn'
	],
	[
		'class'       => '\kartik\grid\CheckboxColumn',
		'pageSummary' => true,
		'rowSelectedClass' => GridView::TYPE_INFO,
	], 'nmproduk','subkat',
	[
		'class'         => '\kartik\grid\ActionColumn',
		'deleteOptions' => ['label' => '<i class="glyphicon glyphicon-remove"></i>'],
		'dropdown'      => false,
	],

];
?>
     <div class="box box-default color-palette-box">
        <div class="box-header with-border">
          <h3 class="box-title"><?= Html::a('Tambah Produk', ['produk/create'], ['class' => 'btn btn-success']) ?></h3>
        </div>
        <div class="box-body">
        	<?php
        	echo ExportMenu::widget([
        		'dataProvider' => $dataProvider,
        		'columns' => $gridColumns
        	]);
        	?>
        </div>
        <div class="box-body">
		        <?php Pjax::begin(['enablePushState' => false]) ?>
		        <?=GridView::widget([
		    		'dataProvider'=> $dataProvider,
		    		'filterModel' => $searchModel,
		    		'summary' => '',
		    		'columns' => $gridColumns,
		    		'responsive'=>true,
		    		'hover'=>true
				]); 
				?>
				<?php Pjax::end() ?>
        </div>
    </div>

<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Kategori;
use kartik\select2\Select2;
use app\models\Provinsi;
use app\models\Kabupaten;
use kartik\depdrop\DepDrop;
use yii\helpers\Url;
?>


 <div class="box box-default color-palette-box">
<!--         <div class="box-header with-border">
          <h3 class="box-title">Detail Perusahaan</h3>
        </div> -->
        <div class="box-body">
            	<?php $form = ActiveForm::begin(); ?>
            	<div class="row">
    				<div class="col-md-6">
	            		<?= $form->field($model, 'namacmp')->textInput(['maxlength' => true]); ?>
	            		<?= $form->field($model, 'notlp')->textInput(['maxlength' => true]); ?>
	            		<?= $form->field($model, 'nofax')->textInput(['maxlength' => true]); ?>
	            		<?php 
	            		$data = ArrayHelper::map(Kategori::find()->all(),'id_kat','nama_kat');
	            		echo $form->field($model, 'kat_cmp')->widget(Select2::classname(), [
	            			'data' => $data,
	            			'options' => ['placeholder' => 'Pilih Kategori Perusahaan'],
	            			'pluginOptions' => [
	            				'allowClear' => true
	            			],
	            		]);
	            		?>
	            		<?= $form->field($model, 'alamat')->textarea(['rows' => '6']) ?>
	            		  <?= $form->field($model, 'provinsi')->dropDownList(Provinsi::getOptions(), ['id' => 'cat-id', 'class'=>'input-large form-control']); ?>
                          
                          <?= $form->field($model, 'kota')->widget(DepDrop::classname(), [
                          'options'=>['id'=>'subcat-id', 'class'=>'input-large form-control'],
                          'pluginOptions'=>[
                              'depends'=>['cat-id'],
                              'placeholder'=>'Select...',
                              'url'=>Url::to(['/company/subcat']),
                            ]
                          ]);
                          ?>      
                          <?= $form->field($model, 'kecamatan')->widget(DepDrop::classname(), [
                              'pluginOptions'=>[
                                  'depends'=>['subcat-id',],
                                  'placeholder'=>'Select...',
                                  'url'=>Url::to(['/company/kec']),
                                  'loadingText' => 'Loading Kecamatan',
                              ]
                          ]);
                          ?>   
	            		<?= $form->field($model, 'kelurahan')->textInput(['maxlength' => true]); ?>
	            		<?= $form->field($model, 'website'); ?>
	            		<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']); ?>
	            		<?php ActiveForm::end(); ?>
	            	</div>
	            </div>
		</div>
  </div>
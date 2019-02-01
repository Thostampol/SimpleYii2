<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = 'Banner Perusahaan';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="box box-default color-palette-box">
  <div class="box-body">
    <div class="row">
      <div class="box-body">
        <section class="content">
          <div class="row">
            <div class="col-md-12">
				<div class="contact-form">
				    <?php
				    $form = ActiveForm::begin([
				        'options' => ['enctype' => 'multipart/form-data']
				    ]);
				    ?>
				    <?= $form->field($model, 'image2')->fileInput(['accept' => 'image/*','extension' => 'jpg , png', 'skipOnEmpty' => false]) ?>
						<?= Html::submitButton($model->isNewRecord ? 'Upload' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
				    <?php ActiveForm::end(); ?>
				</div>
            </div>
          </div>
          <!-- /.row -->
        </section>
      </div>
    </div>
    <!-- /.row -->
  </div>
  <!-- /.box-body -->
  </div>
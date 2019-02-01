<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = 'Upload Gambar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contact-form">

    <?php
    $form = ActiveForm::begin([
        'options' => ['enctype' => 'multipart/form-data']
    ]);
    ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'pathfile')->fileInput() ?>
		<?= Html::submitButton($model->isNewRecord ? 'Upload' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    <?php ActiveForm::end(); ?>

</div>
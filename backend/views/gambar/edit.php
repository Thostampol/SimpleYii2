<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div class="contact-form">

    <?php
    $form = ActiveForm::begin([
        'options' => ['enctype' => 'multipart/form-data']
    ]);
    ?>
    <?= $form->field($model, 'textnya')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'path')->fileInput() ?>
		<?= Html::submitButton($model->isNewRecord ? 'Upload' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    <?php ActiveForm::end(); ?>

</div>
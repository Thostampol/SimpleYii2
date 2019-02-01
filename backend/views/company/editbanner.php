<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php
$form = ActiveForm::begin([
'options' => ['enctype' => 'multipart/form-data']
]);
?>
<div class="modal-body">
<?= $form->field($model, 'banpic')->fileInput() ?>
</div>
<div class="modal-footer">
<?= Html::submitButton($model->isNewRecord ? 'Upload' : 'Update', ['class' => $model->isNewRecord ? 'btn n-success' : 'btn btn-primary']) ?>
</div>
<?php ActiveForm::end(); ?>
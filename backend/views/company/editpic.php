<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php
$form = ActiveForm::begin([
'options' => ['enctype' => 'multipart/form-data']
]);
?>

<?= $form->field($modelpic, 'profpic')->fileInput() ?>


<?= Html::submitButton($modelpic->isNewRecord ? 'Upload' : 'Update', ['class' => $modelpic->isNewRecord ? 'btn n-success' : 'btn btn-primary']) ?>

<?php ActiveForm::end(); ?>


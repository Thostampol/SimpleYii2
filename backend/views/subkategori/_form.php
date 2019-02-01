<?php
//namespace app\models;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Kategori;
use kartik\select2\Select2;
?>
 
<?php $form = ActiveForm::begin(); ?>
 
    <?= $form->field($model, 'nama'); ?>
    <?php
    $data = ArrayHelper::map(Kategori::find()->all(),'id_kat','nama_kat');
    echo $form->field($model, 'id_subkat')->widget(Select2::classname(), [
      'data' => $data,
      'options' => ['placeholder' => 'Pilih Kategori'],
      'pluginOptions' => [
        'allowClear' => true
      ],
    ]);
    ?>
    <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']); ?>
 
<?php ActiveForm::end(); ?>
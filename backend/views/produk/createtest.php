<?php
//namespace app\models;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use app\models\Kategori;
$this->title = 'Input Produk';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
        <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-body">
            <?php $form = ActiveForm::begin([
                    'options' => ['enctype' => 'multipart/form-data',]
                ]); ?>
            <div class="row">
                <div class="col-md-6">
                    <?= $form->field($model, 'nmproduk')->textInput(['placeholder' => 'Ketikan nama produk']); ?>
                    <?php 
                    $data = ArrayHelper::map(Kategori::find()->all(),'id_kat','nama_kat');
                        echo $form->field($model, 'subkat')->widget(Select2::classname(), [
                        'data' => $data,
                        'options' => ['placeholder' => 'Pilih Kategori Perusahaan'],
                        'pluginOptions' => [
                        'allowClear' => true
                            ],
                           ]);
                        ?>
                    <?= $form->field($model, 'variasi')->textInput(['placeholder' => 'Masukan variasi produk, contoh : merah,biru,50x50,40x40']); ?>
                    <?= $form->field($model, 'deskripsi')->textarea(['rows' => '6', 'placeholder' => 'Masukan Deskripsi Produk']) ?>
                    <?= $form->field($model, 'imageproduk[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>
                    <?= $form->field($model, 'jnsjual')->dropDownList($listData,['prompt'=>'Pilih salah satu']) ?>
                    <?= $form->field($model, 'spesifikasi')->fileInput() ?>
                    <?= $form->field($model, 'harga')->textInput(['placeholder' => 'masukan harga produk']); ?>
                    <?= $form->field($model, 'tag')->textInput(['placeholder' => 'masukan tagline produk']); ?>
                    <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']); ?>
                </div>
            </div>
            <?php ActiveForm::end(); ?>
            </div>
        </div>
     </div>
</div>

<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Kategori;
use app\models\Provinsi;
use app\models\Kabupaten;
use kartik\select2\Select2;
use kartik\depdrop\DepDrop;
use yii\helpers\Url;
?>
 <div class="box box-default color-palette-box">
        <div class="box-header with-border">
          <h3 class="box-title"> Detail Profil </h3>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="box-body">
              <section class="content">
                <div class="row">
                  <div class="col-md-6">
                      <div class="box-body box-profile">
                        <?php $form = ActiveForm::begin(); ?>
                        <div class="form-group">
                          <label>Nama</label>
                          <input class="form-control" type="text" value="<?= $model -> firstname ?>" disabled>
                        </div>
                        <div class="form-group">
                          <label>Email</label>
                          <input class="form-control" type="text" value="<?= $model -> email ?>" disabled>
                        </div>
                        <div class="form-group">
                           <?= $form->field($model, 'nohp')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="form-group">
                          <?= $form->field($model, 'alamat')->textarea(['rows' => '6']) ?>
                        </div>

                        <?= $form->field($model, 'provinsi')->dropDownList(Provinsi::getOptions(), ['id' => 'cat-id', 'class'=>'input-large form-control']); ?>
                          
                          <?= $form->field($model, 'kotamadya')->widget(DepDrop::classname(), [
                          'options'=>['id'=>'subcat-id', 'class'=>'input-large form-control'],
                          'pluginOptions'=>[
                              'depends'=>['cat-id'],
                              'placeholder'=>'Select...',
                              'url'=>Url::to(['/profil/subcat']),
                            ]
                          ]);
                          ?>      
                          <?= $form->field($model, 'kecamatan')->widget(DepDrop::classname(), [
                              'pluginOptions'=>[
                                  'depends'=>['subcat-id',],
                                  'placeholder'=>'Select...',
                                  'url'=>Url::to(['/profil/kec']),
                                  'loadingText' => 'Loading child level 2 ...',
                              ]
                          ]);
                          ?>      
                        <div class="form-group">
                            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']); ?>
                        </div>
                        <?php ActiveForm::end(); ?>
                      </div>
                    <!-- /.box -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </section>
            </div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>
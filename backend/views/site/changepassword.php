<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Ubah Password';
$this->params['breadcrumbs'][] = $this->title;
?>
     <div class="box box-default color-palette-box">
<!--         <div class="box-header with-border">
          <h3 class="box-title"> Detail Profil </h3>
        </div> -->
        <div class="box-body">
          <div class="row">
            <div class="box-body">
              <section class="content">
                <div class="">
                  <div class="col-md-6">
                      <div class="box-body box-profile">
                        <?php $form = ActiveForm::begin([
                            'id'=>'changepassword-form',
                        ]); ?>
                            <?= $form->field($model,'oldpass',['inputOptions'=>[
                                'placeholder'=>'Password lama'
                            ]])->passwordInput() ?>
                           
                            <?= $form->field($model,'newpass',['inputOptions'=>[
                                'placeholder'=>'Masukan Password Baru'
                            ]])->passwordInput() ?>
                           
                            <?= $form->field($model,'repeatnewpass',['inputOptions'=>[
                                'placeholder'=>'Ketik Ulang Password Baru Anda'
                            ]])->passwordInput() ?>
                            <?= Html::submitButton('Simpan',[
                                        'class'=>'btn btn-primary'
                                    ]) ?>
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
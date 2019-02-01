<?php $form = ActiveForm::begin(); ?>
  <?= $form->field($model, 'province')->dropDownList(Provinsi::getOptions(), ['id' => 'cat-id', 'class'=>'input-large form-control']); ?>
    
    <?= $form->field($model, 'kabupaten')->widget(DepDrop::classname(), [
    'options'=>['id'=>'subcat-id', 'class'=>'input-large form-control'],
    'pluginOptions'=>[
        'depends'=>['cat-id'],
        'placeholder'=>'Select...',
        'url'=>Url::to(['/provinsi/subcat'])
    ]
]);
    ?>	    
<?php ActiveForm::end(); ?>
<?php 
use yii\helpers\Html;
$this->title = 'Edit Profil Perusahaan';
$this->params['breadcrumbs'][] = $this->title;
?>
<?= $this->render('_form', [
    'model' => $model,
]) ?>
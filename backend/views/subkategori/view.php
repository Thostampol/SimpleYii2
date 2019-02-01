<?php 
use yii\helpers\Html;
use yii\widgets\DetailView;
$this->title = 'Sub Kategori Detail';
$this->params['breadcrumbs'][] = $this->title;
?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_kat',
            'nama',
        ],
    ]) ?>
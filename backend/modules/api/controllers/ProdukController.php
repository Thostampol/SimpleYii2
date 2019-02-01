<?php

namespace backend\modules\api\controllers;
use Yii;
use yii\web\Controller;
class ProdukController extends Controller
{
    public function actionIndex()
    {
    	echo 'this test';exit;
        return $this->render('index');
    }

}

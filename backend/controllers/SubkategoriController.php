<?php
namespace backend\controllers;

use Yii;
use app\models\Subkategori;
use app\models\SubkategoriSearch;
use yii\web\Controller;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;

/**
* manual Crud Subkategori
*/
class SubkategoriController extends Controller
{
	public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['index','view','create','update','delete'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }
    public function actionIndex(){
    	$subkategori = Subkategori::find()->all();
		$searchModel = new SubkategoriSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
		return $this->render('index', ['model' => $subkategori, 'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,]);
    }
	public function actionCreate()
	{
		$model = new Subkategori;
		if($model->load(Yii::$app->request->post()) && $model->save()){
			return $this->redirect(['index']);
		}
		return $this->render('create',['model' => $model]);
	}
}
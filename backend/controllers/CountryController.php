<?php 
namespace backend\controllers;

use Yii;
use app\models\Country;
use app\models\CountrySearch;
use yii\web\Controller;
use yii\filters\AccessControl;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class CountryController extends Controller {
	public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['index','view','create','edit','delete'],
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
	public function actionCreate(){
		$model = new Country();

		if($model->load(Yii::$app->request->post()) && $model->save()){
			return $this->redirect(['index']);

		}
		return $this->render('create',['model' => $model]);
	}
	public function actionIndex(){
		$country = Country::find()->all();
		$searchModel = new CountrySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
		return $this->render('index', ['model' => $country, 'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,]);
	}
	public function actionEdit($id){
		$model = Country::find()->where(['id' => $id])->one();
		if ($model === null){
			throw new NotFoundHttpException('The requested page does not exist.');
		}
		if($model->load(Yii::$app->request->post()) && $model->save()){
			return $this->redirect(['index']);
		}
		return $this->render('edit', ['model'=> $model]);
	}
		public function actionDelete($id){
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
	}
	    protected function findModel($id)
    {
        if (($model = Country::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
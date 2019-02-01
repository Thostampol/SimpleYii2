<?php
namespace backend\controllers;
 
use Yii;
use yii\web\Controller;
use app\models\Fileunggah;
use yii\web\UploadedFile;
use yii\filters\AccessControl;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
class FileunggahController extends Controller{
	public function behavior(){
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
    	$model = new Fileunggah();
         
        if($model->load(Yii::$app->request->post())){
            // ambil foto
            $model->pathfile = UploadedFile::getInstance($model, 'pathfile');
             
            if ($model->validate()) {
                // upload foto
                $pathurl = "../web/img/uploads/doc/";
                //$model->path->saveAs($pathurl . $model->path->baseName . '.' . $model->path->extension);
                if($model->save()):
                	if($model->pathfile):
                		$model->pathfile->saveAs($pathurl . $model->pathfile->baseName . '.' . $model->pathfile->extension);
                	endif;
                endif;

                return $this->render('index', ['model'=>$model]);
            }else {
                 return $this->render('index', ['model'=>$model]);
            }
                       
        }
        return $this->render('index', ['model'=>$model]);
    }
    public function actionIndex(){
    	$model = new Fileunggah();
        
        return $this->render('index', ['model'=>$model]);
    }
}
<?php
namespace backend\controllers;
 
use Yii;
use yii\web\Controller;
use app\models\Gambar;
use yii\web\UploadedFile;
use yii\filters\AccessControl;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
class GambarController extends Controller
{
	public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['index','view','create','edit','delete','upload'],
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
    public function actionIndex()
    {
        $model = new Gambar();
         
        if($model->load(Yii::$app->request->post())){
            // ambil foto
            $model->path = UploadedFile::getInstance($model, 'path');
             
            if ($model->validate()) {
                // upload foto
                $pathurl = $model->getUploadedFile();
                //$model->path->saveAs($pathurl . $model->path->baseName . '.' . $model->path->extension);
                if($model->save()):
                	if($model->path):
                		$model->path->saveAs($pathurl . $model->path->baseName . '.' . $model->path->extension);
                	endif;
                endif;

                return $this->render('index', ['model'=>$model]);
            }else {
                 return $this->render('index', ['model'=>$model]);
            }
                       
        }
        return $this->render('index', ['model'=>$model]);
    }
    public function actionEdit($id)
    {
        $model = $this->findModel($id);

            if($model->load(Yii::$app->request->post())){
            // ambil foto
            $model->path = UploadedFile::getInstance($model, 'path');
             
            if ($model->validate()) {
                // upload foto
                $pathurl = $model->getUploadedFile();
                //$model->path->saveAs($pathurl . $model->path->baseName . '.' . $model->path->extension);
                if($model->save()):
                    if($model->path):
                        $model->path->saveAs($pathurl . $model->path->baseName . '.' . $model->path->extension);
                    endif;
                endif;

                return $this->render('edit', ['model'=>$model]);
            }else {
                 return $this->render('edit', ['model'=>$model]);
            }
                       
        }
        return $this->render('edit', ['model'=>$model]);
    }
    protected function findModel($id)
    {
        if (($model = Gambar::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
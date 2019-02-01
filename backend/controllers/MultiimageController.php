<?php
namespace backend\controllers;
use Yii;
use yii\web\Controller;
use app\models\Multiimage;
use yii\web\UploadedFile;
use yii\filters\AccessControl;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class MultiimageController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['index','view','create','edit','delete','upload','show'],
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
        $model = new Multiimage(); // this variable is only used to check if everything is valid
        if ($model->load(Yii::$app->request->post())) {
            $model->imagepath = UploadedFile::getInstances($model,'imagepath');
            if($model->imagepath) :
                // var_dump($model->imagepath);exit;
                // if($model->save()):
                //         if($model->path):
                            $a=0;
                            $array=$model->imagepath;
                            $photoArr= [];
                            foreach ($array as $file) {
                                $a++;
                                $model1 = new Multiimage();
                                $imagename="".$a."".time()."".mt_rand(0, 30).".".$file->extension;
                                $path = "../web/img/uploads/".$imagename;
                                $file->saveAs($path);
                                $photoArr[]=$imagename;
                                }

                                //$model1->imagepath="../web/img/uploads/".$imagename;
                                $model1->username= Yii::$app->user->identity->username;
                                $model1->imagepath = json_encode($photoArr);
                                $model1->save(false);
                    //     endif;
                    // endif;
                endif;
            return $this->redirect(['index']);
        } else {
            return $this->render('index', [
                'model' => $model,
            ]);
        }

    }
    public function actionUpload(){
        $model = new Multiimage(); // this variable is only used to check if everything is valid
        if ($model->load(Yii::$app->request->post())) {
            $model->imagepath = UploadedFile::getInstances($model,'imagepath');
            if($model->imagepath) :
                // var_dump($model->imagepath);exit;
                // if($model->save()):
                //         if($model->path):
                            $a=0;
                            $array=$model->imagepath;
                            foreach ($array as $file) {
                                $a++;
                                $model1 = new Multiimage();
                                $imagename="".$a."".time()."".mt_rand(0, 30).".".$file->extension;
                                $file->saveAs("../web/img/uploads/".$imagename);
                                $model1->imagepath="../web/img/uploads/".$imagename;
                                $model1->imagepath =$imagename;
                                $model1->username= Yii::$app->user->identity->username;
                                $model1->save(false);
                            }
                    //     endif;
                    // endif;
                endif;
            return $this->redirect(['index']);
        } else {
            return $this->render('index', [
                'model' => $model,
            ]);
        }
    }

    public function actionShow($id)
    {
        return $this->render('show', [
            'model' => $this->findModel($id),
        ]);
    }
    protected function findModel($id)
    {
        if (($model = Multiimage::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('Haalaman yang Anda minta, tidak ada.');
        }
    }
}


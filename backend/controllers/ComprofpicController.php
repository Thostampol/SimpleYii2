<?php 
namespace backend\controllers;
use Yii;
use yii\web\Controller;
use app\models\Comprofpic;
use app\models\Company;
use common\models\User;
use yii\web\UploadedFile;
use yii\filters\AccessControl;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\imagine\Image;

class ComprofpicController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['index','view','create','edit','banner','logo'],
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
    	return $this->redirect('?r=company/');
    }

	public function actionLogo(){
		$isuser = User::findOne(['username' => Yii::$app->user->identity->username]);
        $iscmp  = Company::findOne(['username' => $isuser]);
        $model  = Comprofpic::find()->where(['idcmp' => $iscmp])->one();
        if($model->load(Yii::$app->request->post())){
        	$model->image = UploadedFile::getInstance($model, 'image');
        	if (!empty($model->image)) {
        		$pathurl = $model->getUploadedFile();
        		if($model->save()):
        			if($model->image):
        				$model->image->saveAs($pathurl . $model->image->baseName . '.' . $model->image->extension);
        				Image::thumbnail($pathurl."".$model->image, 300, 300) ->save(Yii::getAlias($pathurl."/300x300/".$model->image));
        			endif;
        		endif;
        		Yii::$app->getSession()->setFlash('success','Profil berhasil diubah');
        		return $this->redirect('?r=company/index');
        	}else {
        		Yii::$app->getSession()->setFlash('warning','Profil tidak berhasil diubah');
        		return $this->render('logo', ['model'=>$model]);
        	}
        }
        return $this->render('logo', ['model'=>$model]);
	}
	public function actionBanner(){
		$isuser = User::findOne(['username' => Yii::$app->user->identity->username]);
        $iscmp  = Company::findOne(['username' => $isuser]);
        $model  = Comprofpic::find()->where(['idcmp' => $iscmp])->one();
        if($model->load(Yii::$app->request->post())){
        	$model->image2 = UploadedFile::getInstance($model, 'image2');
        	if (!empty($model->image2)) {
        		$pathurl = $model->getUploadedFile();
        		if($model->save()):
        			if($model->image2):
        				$model->image2->saveAs($pathurl . $model->image2->baseName . '.' . $model->image2->extension);
        				Image::thumbnail($pathurl."".$model->image2, 1200 , 280) ->save(Yii::getAlias($pathurl."/1200x280/".$model->image2));
        			endif;
        		endif;
        		Yii::$app->getSession()->setFlash('success','Banner berhasil diubah');
        		return $this->redirect('?r=company/index');
        	}else {
        		 Yii::$app->getSession()->setFlash('warning','Gambar tidak terupdate');
        		return $this->render('banner', ['model'=>$model]);
        	}

        }
        return $this->render('banner', ['model'=>$model]);
	}

}

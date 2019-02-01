<?php
namespace backend\controllers;

use Yii;
use app\models\Profil;
use app\models\Company;
use app\models\Provinsi;
use app\models\Kabupaten;
use app\models\Kecamatan;
use yii\web\Controller;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\helpers\Json;
/**
* 
*/
class ProfilController extends Controller{
	public function behavior(){
		 return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['index','view','create','edit','delete','subcat','kec'],
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
        $model = Profil::find() ->where(['username' => Yii::$app->user->identity->username])->one();
        $model2 = Company::find() ->select('namacmp') ->where(['idcmp' => $model->idcmp])->one();

        return $this->render('index', [
            'model' => $this->findModel(), 'model2' => $model2,
        ]);
    }
    public function actionEdit(){
        $model = Profil::find() ->where(['username' => Yii::$app->user->identity->username])->one();
       
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('edit', [
                'model' => $model,
            ]);
        }
        return $this->render('edit', [
                'model' => $model,
            ]);
    }

    protected function findModel()
    {
        if (($model =Profil::find()->where(['username' => Yii::$app->user->identity->username])->one()) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('Halaman yang Anda minta, tidak ada.');
        }
    }

    public function actionSubcat() {
            $out = [];
            $kab = new Kabupaten();
            if (isset($_POST['depdrop_parents'])) {
                $parents = $_POST['depdrop_parents'];
                if ($parents != null) {
                    $cat_id = $parents[0];
                    $out = $kab->getOptionsbyProvinsi($cat_id);
                    echo Json::encode(['output' => $out, 'selected' => '']);
                    return;
                }
            }
            echo Json::encode(['output' => '', 'selected' => '']);
        }
        public function actionKec() {
            $out = [];
            $kab = new Kecamatan();
            if (isset($_POST['depdrop_parents'])) {
                $parents = $_POST['depdrop_parents'];
                if (!empty($parents)) {
                    $subcat_id = (!empty($parents[0])) ? $parents[0] : null;
                    if($subcat_id !== null){
                        $out = $kab->getOptionsbyKabupaten($subcat_id);
                        return json_encode(['output' => $out, 'selected' => '']);
                    }
                    
                }
            }
            return json_encode(['output' => $out, 'selected' => '']);
        }

}
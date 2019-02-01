<?php 
namespace backend\controllers;

use Yii;
use common\models\User;
use app\models\Company;
use app\models\Profil;
use app\models\Comprofpic;
use app\models\Kategori;
use app\models\Provinsi;
use app\models\Kabupaten;
use app\models\Kecamatan;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;
use yii\web\Controller;
use yii\helpers\Json;
class CompanyController extends Controller{
	public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['index','view','create','edit','delete','editpic','editbanner','test','subcat','kec'],
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
		$model = new Company();
		if($model->load(Yii::$app->request->post()) && $model->save()){
			return $this->redirect(['site/companydetail']);
		}
		return $this->render('create',['model' => $model]);
	}
    public function actionIndex(){
        $isuser = User::findOne(['username' => Yii::$app->user->identity->username]);
        $iscmp  = Company::findOne(['username' => $isuser]);
        $iskat  = Kategori::findOne(['id_kat' => $iscmp->kat_cmp]);
        $model  = Company::find()->where(['idcmp' => $iscmp, 'username' => $isuser])->one();
        $model2 = Kategori::find()->where(array('nama_kat' => $iskat))->one();
        $model3 = Comprofpic::find()->where(array('idcmp' => $iscmp->idcmp))->one();
        return $this->render('index',['model' => $model, 'model2' => $model2, 'model3'=> $model3]);
    }
    public function actionEdit(){
        $model = Company::find() ->where(['username' => Yii::$app->user->identity->username])->one();
       
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('edit', ['model' => $model,]);
        }
        return $this->render('edit', ['model' => $model,]);
    }
    public function actionTest(){
        $model = Company::findOne(['username' => Yii::$app->user->identity->username]);
        $query = Kategori::find()
                 ->leftJoin('company', '(company.kat_cmp=kategori.id_kat)')
                 ->leftJoin('comprofpic','(comprofpic.idcmp=company.idcmp)')
                 ->leftJoin('provinsi','(provinsi.id_prov=company.provinsi)')
                 ->leftJoin('kabupaten','(kabupaten.id_kab=company.kota)')
                 ->leftJoin('kecamatan','(kecamatan.id_kec=company.kecamatan)')
                 ->where(['company.idcmp' => $model->idcmp])->distinct()
                 ->all();
        // $query = Company::find()->joinWith('kategori')->joinWith('comprofpic')->joinWith('provinsi')
        //         ->where(['company.idcmp' => $model->idcmp])->distinct()->all();

        return $this->render('test', ['model' => $query]);
        // $query = new yii\db\Query();
        // $data = $query->select(['kategori','company'])
        //         ->leftJoin('kategori', '(kategori.id_kat=company.kat_cmp)')
        //         ->from('company')->where(['company.idcmp' => $model->idcmp])
        //         ->distinct()
        //         ->all(); 
               
        //         return $this->render('test', ['model' => $data]);
    }

    protected function findModel()
    {
        if (($model = Company::findOne(['username' => Yii::$app->user->identity->username])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
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

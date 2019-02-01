<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use app\models\PasswordForm;
use common\models\User;

//use app\models\Login;
/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index', 'daftarproduk','daftarpesan','detailpesan','sampahproduk','profil','ubahpassword','ubahprofil','formproduk','pemesanan','changepassword','companydetail','rfq','rfqdetail','specialoffer','specialofferdetail','permintaanbarang','penawaranbarang'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('profil');
    }
    public function actionDaftarproduk()
    {
        return $this->render('index');
    }
    public function actionDaftarpesan()
    {
        return $this->render('pemesanan');
    }
    public function actionDetailpesan()
    {
        return $this->render('pemesanan-detail');
    }
    public function actionSampahproduk()
    {
        return $this->render('sampah-produk');
    }
    public function actionProfil()
    {
        return $this->render('profil');
    }
    public function actionUbahpassword()
    {
        return $this->render('ubah-password');
    }
    public function actionUbahprofil()
    {
        return $this->render('ubah-profil');
    }
    public function actionFormproduk()
    {
        return $this->render('form-produk');
    }
    public function actionPemesanan()
    {
        return $this->render('pemesanan');
    }
    public function actionCompanydetail()
    {
        return $this->render('company-detail');
    }
    public function actionRfq()
    {
        return $this->render('permintaan-penawaran');
    }
    public function actionRfqdetail()
    {
        return $this->render('permintaan-penawaran-detail');
    }
    public function actionPenawaranbarang()
    {
        return $this->render('permintaan-penawaran-rfq-detail');
    }
    public function actionSpecialoffer()
    {
        return $this->render('special-offer');
    }
    public function actionSpecialofferdetail()
    {
        return $this->render('special-offer-detail');
    }
    public function actionPermintaanbarang()
    {
        return $this->render('special-offer-permintaan-detail');
    }
    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionChangepassword(){
        $model = new PasswordForm;
        $modeluser = User::find()->where(['username' => Yii::$app->user->identity->username])->one();

        if($model->load(Yii::$app->request->post())){
            if($model->validate()){
                try{
                    $password = $_POST['PasswordForm']['newpass'];
                    $modeluser->password = $password;
                    $modeluser->password_hash = Yii::$app->security->generatePasswordHash($password);
                        if($modeluser->save()){
                            Yii::$app->getSession()->setFlash('success','Password Changed');
                            return $this->redirect(['changepassword']);
                        }else{
                            Yii::$app->getSession()->setFlash('error','Password Not Change');
                             return $this->redirect(['index']);
                        }
                }catch(Exception $e){
                    Yii:$app->getSession->setFlash('error',"{$e->getMessage()}");
                    return $this->render('changepassword',['model'=>$model]);
                }
            }else{
                 return $this->render('changepassword',['model'=>$model]);
            }
        }else{
             return $this->render('changepassword',['model'=>$model]);
        }
    }
}

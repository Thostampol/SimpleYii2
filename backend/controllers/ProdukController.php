<?php
namespace backend\controllers;
use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use app\models\Produk;
use app\models\ProdukSearch;
use yii\web\UploadedFile;
use yii\helpers\Url;
use yii\web\NotFoundHttpException;
class ProdukController extends \yii\web\Controller
{
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
    public function actionIndex(){
		$model = Produk::find()->all();
        $searchModel = new ProdukSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'model' => $model,
        ]);
		//return $this->render('index',['model' => $model]);
	}
    // public function actionCreate(){
    //     $model = new Produk;
    //     $listData = ['Jual'=>"Jual",'Sewa'=>"Sewa"];
    //     if($model->load(Yii::$app->request->post())){
    //     $model->spesifikasi = UploadedFile::getInstance($model, 'spesifikasi');
    //     $model->imageproduk = UploadedFile::getInstance($model, 'imageproduk');
    //         if ($model->validate()) {
    //             // upload foto
    //             $pathurlimg = "../web/img/uploads/";
    //             $pathurl = "../web/img/uploads/doc/";
    //             //$model->path->saveAs($pathurl . $model->path->baseName . '.' . $model->path->extension);
    //             if($model->save()):
    //                 if($model->imageproduk):
    //                     if($model->spesifikasi):
    //                         $model->spesifikasi->saveAs($pathurl . $model->spesifikasi->baseName . '.' . $model->spesifikasi->extension);
    //                     endif;
    //                     $model->imageproduk->saveAs($pathurlimg . $model->imageproduk->baseName . '.' . $model->imageproduk->extension);
    //                 endif;
    //             endif;

    //             //return $this->render('index', ['model'=>$model]);
    //             Yii::$app->getSession()->setFlash('success','Produk berhasil ditambah');
    //             return $this->redirect(Url::to(['produk/index']));
    //         }else {
    //              return $this->render('createtest', ['model'=>$model,'listData'=>$listData]);
    //         }
    //     }
    //     return $this->render('createtest',['model' => $model,'listData'=>$listData]);
    // }
    public function actionCreate()
    {
        $model = new Produk(); // this variable is only used to check if everything is valid
        $listData = ['Jual'=>"Jual",'Sewa'=>"Sewa"];
        if ($model->load(Yii::$app->request->post())) {
            $model->imageproduk = UploadedFile::getInstances($model,'imageproduk');
            $model->spesifikasi = UploadedFile::getInstance($model, 'spesifikasi');
            $pathurldoc = "../web/img/uploads/doc/";
            $pathurlimg = "../web/img/uploads/";
            if($model->imageproduk) :
                // var_dump($model->imagepath);exit;
                // if($model->save()):
                //         if($model->path):
                            $a=0;
                            $array=$model->imageproduk;
                            $photoArr= [];
                            foreach ($array as $file) {
                                $a++;
                                $model1 = new Produk();
                                $imagename="".$a."".time()."".mt_rand(0, 30).".".$file->extension;
                                $path = $pathurlimg."".$imagename;
                                $file->saveAs($path);
                                $photoArr[]=$imagename;
                                }
                                if($model->spesifikasi):
                                     $model->spesifikasi->saveAs($pathurldoc . $model->spesifikasi->baseName . '.' . $model->spesifikasi->extension);
                                endif; 
                                $model1->nmproduk=$model->nmproduk;
                                $model1->subkat=$model->subkat;
                                $model1->variasi=$model->variasi;
                                $model1->deskripsi=$model->deskripsi;
                                $model1->jnsjual=$model->jnsjual;
                                $model1->harga=$model->harga;
                                $model1->spesifikasi=$model->spesifikasi;
                                $model1->tag=$model->tag;
                                $model1->imageproduk = json_encode($photoArr);
                                $model1->save(false);
                    //     endif;
                    // endif;
                endif;
            Yii::$app->getSession()->setFlash('success','Produk berhasil ditambah');
            return $this->redirect(['index']);
        } else {
            return $this->render('createtest', [
                'model' => $model, 'listData' => $listData
            ]);
        }
    }
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        return $this->redirect(['index']);
    }

    protected function findModel($id)
    {
        if (($model = Produk::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('Halaman yang Anda minta, tidak ada.');
        }
    }
    public function actionView($id){
        $model  = $this->findModel($id);
        $arr    = json_decode($model->imageproduk);
        $query  = Produk::find()->joinWith('kategori')->where(['produk.id' => $model->id])->distinct()->one();
        return $this->render('view', ['model' => $query, 'arr' => $arr]);
    }
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $listData = ['Jual'=>"Jual",'Sewa'=>"Sewa"];
        if ($model->load(Yii::$app->request->post())) {
            $model->imageproduk = UploadedFile::getInstances($model,'imageproduk');
            $model->spesifikasi = UploadedFile::getInstance($model, 'spesifikasi');
            $pathurldoc = "../web/img/uploads/doc/";
            $pathurlimg = "../web/img/uploads/";
            if($model->imageproduk) :
                // var_dump($model->imagepath);exit;
                // if($model->save()):
                //         if($model->path):
                            $a=0;
                            $array=$model->imageproduk;
                            $photoArr= [];
                            foreach ($array as $file) {
                                $a++;
                                $model1 = new Produk();
                                $imagename="".$a."".time()."".mt_rand(0, 30).".".$file->extension;
                                $path = $pathurlimg."".$imagename;
                                $file->saveAs($path);
                                $photoArr[]=$imagename;
                                }
                                if($model->spesifikasi):
                                     $model->spesifikasi->saveAs($pathurldoc . $model->spesifikasi->baseName . '.' . $model->spesifikasi->extension);
                                endif; 
                                $model1->nmproduk=$model->nmproduk;
                                $model1->subkat=$model->subkat;
                                $model1->variasi=$model->variasi;
                                $model1->deskripsi=$model->deskripsi;
                                $model1->jnsjual=$model->jnsjual;
                                $model1->harga=$model->harga;
                                $model1->spesifikasi=$model->spesifikasi;
                                $model1->tag=$model->tag;
                                $model1->imageproduk = json_encode($photoArr);
                                $model1->save(false);
                    //     endif;
                    // endif;
                endif;
            Yii::$app->getSession()->setFlash('success','Produk berhasil ditambah');
            return $this->redirect(['index']);
        } else {
            return $this->render('createtest', [
                'model' => $model, 'listData' => $listData
            ]);
        }
    }
}

 //    public function actionCreate(){
    //  $model = new Produk;
 //        $listData = ['Jual'=>"Jual",'Sewa'=>"Sewa"];
    //  if($model->load(Yii::$app->request->post())){
    //  $model->spesifikasi = UploadedFile::getInstance($model, 'spesifikasi');
    //  $model->imageproduk = UploadedFile::getInstance($model, 'imageproduk');
 //            if ($model->validate()) {
 //                $pathurl = "../web/img/uploads/doc/";
 //                $pathurlimg = "../web/img/uploads/";
 //                // upload foto
 //                //$model->path->saveAs($pathurl . $model->path->baseName . '.' . $model->path->extension);
 //                if($model->save()):
 //                 if($model->imageproduk):
 //                     if($model->spesifikasi):
 //                         $model->imageproduk->saveAs($pathurlimg . $model->imageproduk->baseName . '.' . $model->imageproduk->extension);
 //                            $model->spesifikasi->saveAs($pathurl . $model->spesifikasi->baseName . '.' . $model->spesifikasi->extension);
 //                     endif;
 //                 endif;
 //                endif;
 //                Yii::$app->getSession()->setFlash('success','Produk berhasil ditambah');
 //                return $this->redirect(Url::to(['produk/index']));
 //            }else {
 //                 return $this->render('create', ['model'=>$model,'listData'=>$listData]);
 //            }
    //  }
    //  return $this->render('create',['model' => $model,'listData'=>$listData]);
    // }

<?php
namespace app\models;
use Yii;
//use app\models\Kabupaten;
class Kecamatan extends \yii\db\ActiveRecord
{
    public static function tableName(){
        return 'kecamatan';
    }
    public static function getOptionsbyKabupaten($subcat_id) {
        $data 	= Kecamatan::find()
        		->where(['id_kab'=>$subcat_id])
        		->select(['id_kec as id','nama as name'])
        		->asArray()->all();
        return $data;
    }


}
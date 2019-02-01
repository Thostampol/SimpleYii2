<?php
namespace app\models;
use Yii;
use app\models\Provinsi;
class Kabupaten extends \yii\db\ActiveRecord
{
    public static function tableName(){
        return 'kabupaten';
    }
    public static function getOptionsbyProvinsi($cat_id) {
        $data 	= Kabupaten::find()->where(['id_prov'=>$cat_id])->select(['id_kab as id','nama as name'])->asArray()->all();
        $value 	= (count($data) == 0) ? ['' => ''] : $data;

        return $value;
    }

}
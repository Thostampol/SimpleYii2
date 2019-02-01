<?php
namespace app\models;
use Yii;

class Provinsi extends \yii\db\ActiveRecord
{
    public static function tableName(){
        return 'provinsi';
}
    public static function getOptions(){
        $data  =  static::find()->all();
        
        $value =  (count($data)==0)? [''=>'']: \yii\helpers\ArrayHelper::map($data, 'id_prov','nama');

        return $value;
    }
}
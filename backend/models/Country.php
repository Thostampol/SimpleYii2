<?php 
namespace app\models;

use Yii;
class Country extends \yii\db\ActiveRecord {
	public static function tableName(){
		return 'country';
	}
	public function rules(){
		return [
			[['nama'], 'required'],
			[['nama'], 'string','max' => 50]
		];
	}
	public function attributeLabels()
    {
        return [
            'id' => 'Id Kat',
            'nama' => 'Nama Kat',
        ];
    }
}
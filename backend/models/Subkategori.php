<?php 
namespace app\models;

use Yii;
class Subkategori extends \yii\db\ActiveRecord {
	public static function tableName(){
		return 'sub_kat';
	}
	public function rules(){
		return [
			[['nama','id_kat'], 'required'],
			[['nama'], 'string','max' => 50],
			[['id_kat'], 'integer','max' => 3]
		];
	}
	    public function attributeLabels()
    {
        return [
            'id_subkat' => 'Id Sub Kat',
            'nama' => 'Nama Subkat Kat',
            'id_kat' => 'ID Kat',
        ];
    }
}
<?php 
namespace app\models;

use Yii;
class Profil extends \yii\db\ActiveRecord {
	public static function tableName(){
		return 'profil';
	}
	public function rules(){
		return [
			[['nohp','alamat','provinsi','kotamadya','kecamatan'], 'required'],
			[['nohp'], 'string','max' => 13],
			[['provinsi','kotamadya','kecamatan'], 'string', 'max' => 200],
		];
	}
	public function attributeLabels()
    {
        return [
            'nohp' => 'Nomor Hp',
            'alamat' => 'Alamat',
            'provinsi' => 'Provinsi',
            'kotamadya' => 'Kotamadya',
            'kecamatan' => 'Kecamatan',
        ];
    }
}
<?php 
namespace app\models;

use Yii;
use common\models\User;
use app\models\Profil;
use app\models\Kategori;
use app\models\Comprofpic;
use app\models\Provinsi;
/**
* model for company
*/
class Company extends \yii\db\ActiveRecord
{
	public static function tableName(){
		return 'company';
	}

	public function rules()
    {
		return [
			[['namacmp','notlp','nofax','kat_cmp','alamat','kelurahan','kecamatan','kota','provinsi'], 'required'],
			[['namacmp'],'string','max' => 255],
            [['website'],'string'],
			[['kelurahan','kecamatan','kota','provinsi'],'string','max' => 50],
			[['notlp','nofax'], 'string','max' => 15],
		];
    }
    public function attributeLabels()
    {
        return [
            'id' => 'Id CMP',
            'namacmp' => 'Nama Perusahaan',
            'notlp' => 'Nomor telepon',
            'nofax' => 'Nomor Fax',
            'kat_cmp' => 'Kategori CMP',
            'alamat' => 'Alamat',
            'kelurahan' => 'Kelurahan',
            'kecamatan' => 'Kecamatan',
            'kota' => 'Kota',
            'provinsi' => 'Provinsi',
            'website' => 'Website',
        ];
    }
    public function getUploadedFile() {
        // return a default image placeholder if your source avatar is not found
        //$pic = isset($this->pic) ? $this->pic : 'default.png';
        return Yii::$app->params['fileUploadUrl'];
    }

    public function getKategori()
    {
        return $this->hasOne(Kategori::className(), ['id_kat' => 'kat_cmp'])->from(Kategori::tableName());
    }
    public function getComprofpic() 
    {
        return $this->hasOne(Comprofpic::className(), ['idcmp' => 'idcmp'])->from(Comprofpic::tableName());
    }
    public function getProvinsi() 
    {
        return $this->hasOne(Provinsi::className(), ['id_prov' => 'provinsi'])->from(Provinsi::tableName());
    }
}
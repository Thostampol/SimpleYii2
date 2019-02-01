<?php

namespace app\models;

use Yii;
use app\models\Company;
use app\models\Comprofpic;
use app\models\Kabupaten;
use app\models\Provinsi;
use app\models\Kecamatan;
/**
 * This is the model class for table "kategori".
 *
 * @property integer $id_kat
 * @property string $nama_kat
 */
class Kategori extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kategori';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_kat'], 'required'],
            [['nama_kat'], 'string', 'max' => 50],
            [['idcmp'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_kat' => 'Id Kat',
            'nama_kat' => 'Nama Kat',
        ];
    }
    public function getCompany()
    {
        return $this->hasOne(Company::className(), ['kat_cmp' => 'id_kat']);
    }
    public function getComprofpic() {
        return $this->hasOne(Comprofpic::className(), ['idcmp' => 'idcmp'])
        ->viaTable('company', ['kat_cmp' => 'id_kat']);
    }
    public function getProvinsi() {
        return $this->hasOne(Provinsi::className(), ['id_prov' => 'provinsi'])
        ->viaTable('company',['kat_cmp' => 'id_kat']);
    }
    public function getKabupaten() {
        return $this->hasOne(Kabupaten::className(), ['id_kab' => 'kabupaten'])
        ->viaTable('company',['kat_cmp' => 'id_kat']);
    }
    public function getKecamatan() {
        return $this->hasOne(Kecamatan::className(), ['id_kec' => 'kecamatan'])
        ->viaTable('company',['kat_cmp' => 'id_kat']);
    }
}

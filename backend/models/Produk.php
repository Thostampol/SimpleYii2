<?php
namespace app\models;
namespace backend\controllers;
use Yii;
use yii\data\ActiveDataProvider;
use app\models\Kategori;
/**
 * This is the model class for table "produk".
 *
 * @property integer $id
 * @property string $nmproduk
 * @property string $subkat
 * @property string $variasi
 * @property string $imageproduk
 * @property string $deskripsi
 * @property string $jnsjual
 * @property string $spesifkasi
 * @property integer $harga
 * @property string $tag
 */
class Produk extends \yii\db\ActiveRecord
{
    const SCENARIO_CREATE = 'create';
    const SCENARIO_UPDATE = 'update';
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'produk';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['harga','subkat','nmproduk', 'variasi', 'deskripsi','imageproduk','jnsjual'],'required'],
            [['nmproduk', 'variasi', 'deskripsi', 'tag'], 'string'],
            [['spesifikasi'], 'file', 'extensions' => 'pdf, doc, docx'],
            [['imageproduk'], 'safe'],
            [['imageproduk'], 'file', 'extensions' => 'png, jpg' , 'maxFiles' => 4],
            [['harga'], 'integer'],
            [['subkat'], 'string', 'max' => 100],
            [['jnsjual'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nmproduk' => 'Nmproduk',
            'subkat' => 'Subkat',
            'variasi' => 'Variasi',
            'imageproduk' => 'Imageproduk',
            'deskripsi' => 'Deskripsi',
            'jnsjual' => 'Jnsjual',
            'spesifkasi' => 'Spesifkasi',
            'harga' => 'Harga',
            'tag' => 'Tag',
        ];
    }
    public function scenarios()
    {
        $scenarios = parent::scenarios();
        $scenarios['update'] = ['harga','subkat','nmproduk', 'variasi', 'deskripsi','jnsjual'];
        return $scenarios;
    }
    public function getKategori()
    {
        return $this->hasOne(Kategori::className(), ['id_kat' => 'subkat']);
    }

}

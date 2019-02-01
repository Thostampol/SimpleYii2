<?php

namespace backend\modules\api\models;

use Yii;
use yii\base\Model;
/**
 * This is the model class for table "produk".
 *
 * @property integer $id
 * @property string $nmproduk
 * @property integer $subkat
 * @property string $variasi
 * @property string $imageproduk
 * @property string $deskripsi
 * @property string $jnsjual
 * @property string $spesifikasi
 * @property integer $harga
 * @property string $tag
 */
class Produk extends Model
{
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
            [['nmproduk', 'variasi', 'imageproduk', 'deskripsi', 'spesifikasi', 'tag'], 'string'],
            [['subkat', 'harga'], 'integer'],
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
            'spesifikasi' => 'Spesifikasi',
            'harga' => 'Harga',
            'tag' => 'Tag',
        ];
    }
}

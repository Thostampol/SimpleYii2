<?php
namespace app\models;

use Yii;
use yii\data\ActiveDataProvider;
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
class ProdukSearch extends \yii\db\ActiveRecord
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
            //[['harga','subkat','nmproduk', 'variasi', 'deskripsi', 'tag','spesifikasi','jnsjual'],'required'],
            [['nmproduk', 'variasi', 'deskripsi', 'tag', 'subkat'], 'string'],
            [['spesifikasi'], 'file', 'extensions' => 'pdf, doc'],
            [['imageproduk'], 'file', 'extensions' => 'png, jpg'],
            [['harga'], 'integer'],
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

    public function search($params)
    {
        $query = Produk::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [ 'pageSize' => 4 ],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'nmproduk', $this->nmproduk]);

        return $dataProvider;
    }
}

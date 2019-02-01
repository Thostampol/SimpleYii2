<?php
namespace app\models;
use Yii;
class Gambar extends \yii\db\ActiveRecord
{
    /**
     * @nama tabel
     */
    public static function tableName(){
        return 'gambar';
    }
    /**
     * settingan upload foto
     */
    public function rules()
    {
        return [
        	[['textnya'],'required'],
        	[['textnya'],'string','max' => 255],
            [['path'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }
    public function getUploadedFile() {
        // return a default image placeholder if your source avatar is not found
        //$pic = isset($this->pic) ? $this->pic : 'default.png';
        return Yii::$app->params['fileUploadUrl'];
    }
}
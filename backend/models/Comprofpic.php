<?php
namespace app\models;
use Yii;
class Comprofpic extends \yii\db\ActiveRecord
{
    /**
     * @nama tabel
     */
    public static function tableName(){
        return 'comprofpic';
    }
    /**
     * settingan upload foto
     */
    public function rules()
    {
        return [
        	[['image','image2'], 'required'],
            [['image','image2'], 'file', 'extensions' => 'png, jpg'],
        ];
    }
    public function attributeLabels()
    {
        return [
            'image' => 'Logo',
            'image2' => 'Banner',
        ];
    }
    public function getUploadedFile() {
        return Yii::$app->params['fileUploadUrl'];
    }

}
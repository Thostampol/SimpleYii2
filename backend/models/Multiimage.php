<?php 
namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;

/**
* 
*/
class Multiimage extends \yii\db\ActiveRecord
{
	//public $imagePath;

	public static function tableName(){
        return 'multiimage';
    }
    public function rules()
    {
        return [
            [['imagepath'], 'required'],
            [['imagepath'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg', 'maxFiles' => 4],
        ];
    }
	public function upload()
    {
        if ($this->validate()) { 
            foreach ($this->imagepath as $file) {
                $file->saveAs('../web/img/uploads/' . $file->baseName . '.' . $file->extension);
            }
            return true;
        } else {
            return false;
        }
    }
}

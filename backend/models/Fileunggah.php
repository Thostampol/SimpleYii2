<?php 
namespace app\models;

use Yii;
/**
* 
*/
class Fileunggah extends \yii\db\ActiveRecord
{
	public static function tableName(){
		return 'file';
	}
	public function rules()
    {
        return [
        	[['name','pathfile'],'required'],
        	[['name'],'string','max' => 255],
            [['pathfile'], 'file', 'extensions' => 'pdf, doc'],
        ];
    }
    public function attributeLabels()
    {
        return [
            'name' => 'Nama File',
            'pathfile' => 'Dokumen',
            ];
    }
}
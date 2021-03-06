<?php 
namespace backend\assets;

use yii\web\AssetBundle;
class AdminLtePluginAsset extends AssetBundle
{
    public $sourcePath = '@vendor/almasaeed2010/adminlte/plugins';
    public $js = [
         'datatables.net/js/jquery.dataTables.min.js',
         'datatables.net-bs/js/dataTables.bootstrap.min.js'
        // more plugin Js here
    ];
    public $css = [
         'datatables.net-bs/css/dataTables.bootstrap.min.css',
        // more plugin CSS here
    ];
    public $depends = [
        'dmstr\web\AdminLteAsset',
    ];
}
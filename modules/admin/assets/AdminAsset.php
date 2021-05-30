<?php


namespace app\modules\admin\assets;


use yii\web\JqueryAsset;

class AdminAsset extends BaseAssetBundle
{
    /**
     * @var string $sourcePath
     * Папка со стилями и скриптами
     */
    public $sourcePath = '@webroot/themes/backend';
    /**
     * @var array
     * Підключаємо стилі
     */
    public $css = [
        'css/app.min.css', 'css/icons.min.css', 'css/bootstrap.min.css',
   ];

    /**
     * @var array
     * Підключаємо скріпти
     */
    public $js = [
        'libs/node-waves/waves.min.js',
        'libs/simplebar/simplebar.min.js',
        'libs/metismenu/metisMenu.min.js',
        'libs/bootstrap/js/bootstrap.bundle.min.js',
        'js/app.js',

    ];

    /**
     * @var string[]
     * Залежності і jquery
     */
    public $depends = [
        JqueryAsset::class
    ];


}

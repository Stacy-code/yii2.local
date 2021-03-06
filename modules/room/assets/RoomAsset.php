<?php


namespace app\modules\room\assets;


use app\assets\BaseAssetBundle;
use yii\web\JqueryAsset;
use yii\web\YiiAsset;

class RoomAsset extends BaseAssetBundle
{
    /**
     * @var string $sourcePath
     * Папка со стилями и скриптами
     */
    public $sourcePath = '@webroot/themes/frontend';
    /**
     * @var array
     * Підключаємо стилі
     */
    public $css = [
        'https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900%7COpen+Sans:300,300i,400,400i,600,600i,700,700i,800,800i',
        'css/external.css',
        'css/bootstrap.min.css',
        'css/style.css'
    ];

    /**
     * @var array
     * Підключаємо скріпти
     */
    public $js = [
        'js/plugins/bootstrap.js',
        'js/plugins.js',
        'js/functions.js'

    ];

    /**
     * @var string[]
     * Залежності і jquery
     */
    public $depends = [
        YiiAsset::class,
        JqueryAsset::class,
    ];


}

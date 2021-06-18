<?php


namespace app\modules\admin\assets;


use yii\web\JqueryAsset;
use yii\web\YiiAsset;

class UserAsset extends BaseAssetBundle
{
    /**
     * @var string $sourcePath
     * Папка со стилями и скриптами
     */
    public $sourcePath = '@webroot/themes/backend';
    /**
     * @var array
     * Підключаємо скріпти
     */
    public $js = [
        'pages/user.js'
    ];

    /**
     * @var string[]
     * Залежності і jquery
     */
    public $depends = [
        YiiAsset::class,
        JqueryAsset::class,
        AdminAsset::class
    ];


}
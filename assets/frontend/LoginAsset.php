<?php


namespace app\assets\frontend;

use app\assets\BaseAssetBundle;
use yii\web\JqueryAsset;

/**
 * Class FrontendAsset
 *
 * @package app\assets\frontend
 */
class LoginAsset extends BaseAssetBundle
{
    /**
     * @var string $sourcePath
     */
    public $sourcePath = '@webroot/frontend';

    public $css = [
        'css/bootstrap.min.css',
        'css/icons.min.css',
        'css/app.min.css',
    ];

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
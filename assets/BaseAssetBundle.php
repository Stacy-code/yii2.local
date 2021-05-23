<?php

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Class BaseAssetBundle
 *
 * @package app\assets
 */
class BaseAssetBundle extends AssetBundle
{
    /**
     * @var string $sourcePath
     * Папка со стилями и скриптами
     */
    public $sourcePath = '@webroot';

    /**
     * @var array $publishOptions
     * Не кеширует стили и скрипты
     */
    public $publishOptions = ['forceCopy' => YII_ENV !== 'prod'];
}
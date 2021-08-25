<?php

namespace app\modules\room;

use Yii;
use yii\base\Module as BaseModule;
use yii\filters\AccessControl;

/**
 * Class Module
 *
 * @package app\modules\admin
 */
class Module extends BaseModule
{
    /**
     * @var string $controllerNamespace
     */
    public $controllerNamespace = 'app\modules\room\controllers';

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        parent::init();
        Yii::$app->user->loginUrl = '/identity/login';
        Yii::$app->errorHandler->errorAction = 'room/dashboard/error'; //dashboardController
    }

    /**
     * @return array
     */
    public function behaviors(): array
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ]
                ]
            ]
        ];
    }
}
<?php

namespace app\modules\admin;

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
    public $controllerNamespace = 'app\modules\admin\controllers';

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        parent::init();
        Yii::$app->user->loginUrl = '/identity/login';
        Yii::$app->errorHandler->errorAction = 'admin/dashboard/error'; //dashboardController
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
                        'roles' => ['admin', 'manager'],
                    ]
                ]
            ]
        ];
    }
}
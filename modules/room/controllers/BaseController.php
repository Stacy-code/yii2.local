<?php


namespace app\modules\room\controllers;


use app\controllers\AppController;
use Yii;
use yii\web\ErrorAction;

class BaseController extends AppController
{
    /**
     * @return array
     */
    public function actions(): array
    {
        return [
            'error' => [
                'class' => ErrorAction::class,
                'view' => '@app/modules/room/views/errors/error.php'
            ]
        ];
    }




}
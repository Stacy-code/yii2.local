<?php

namespace app\modules\room\controllers;

use app\models\User;
use app\modules\room\assets\RoomAsset;
use Yii;
use yii\base\Module as BaseModule;
use app\controllers\AppController;
use yii\web\ErrorAction;
use yii\web\NotFoundHttpException;
use yii\web\Response;
use app\services\user\UserService;

/**
 * Class DashboardController
 *
 * @package app\modules\room\controllers
 */
class ProfileController extends AppController
{


    /**
     * @var UserService
     */
    public $service;
    /**
     * DashboardController constructor.
     *
     * @param             $id
     * @param BaseModule  $module
     * @param array       $config
     */
    public function __construct($id, BaseModule $module, UserService $service, $config = [])
    {

        parent::__construct($id, $module, $config);
        $this->service = $service;
    }

    /**
     * Register controller asset
     */
    public function init() :void
    {
        parent::init();
        RoomAsset::register(Yii::$app->view);
    }

    /**
     * @return array
     */
    public function actions(): array
    {
        return [
            'error' => [
                'class' => ErrorAction::class,
                'view' => '@app/modules/room/views/profile/index.php'
            ]
        ];
    }

    /**
     * @return string
     * @throws NotFoundHttpException
     */
    public function actionIndex(): string
    {
        $user = $this->service->getProfileModel();
        if($user instanceof User){
            return $this->render('index', [
                    'user' =>  $user
                ]
            );
        }
        throw new NotFoundHttpException("404");

    }


    /**
     * @return string
     */
    public function actionError(): string
    {
        $exception = Yii::$app->errorHandler->exception;
        if ($exception !== null) {

            return $this->render('error', [
                'exception' => $exception
            ]);
        }
        return '';
    }
}

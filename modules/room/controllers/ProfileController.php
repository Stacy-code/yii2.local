<?php

namespace app\modules\room\controllers;

use app\models\User;
use app\modules\room\assets\RoomAsset;
use Yii;
use yii\base\Module as BaseModule;
use yii\helpers\Url;
use app\services\user\UserService;

/**
 * Class DashboardController
 *
 * @package app\modules\room\controllers
 */
class ProfileController extends BaseController
{


    /**
     * @var UserService
     */
    public $service;


    public $defaultAction = "update";
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
     * Обновление записи
     */
    public function actionUpdate()
    {

        $user = $this->service->getProfileModel();

        if (Yii::$app->request->isPost) {
            $user->setScenario(User::PROFILE_SCENARIO);
            $this->service->update($user,Yii::$app->request->post());
            Yii::$app->session->setFlash('success' , "Запис відновлено!");
            return Yii::$app->response->redirect(Url::toRoute(['/room/profile/update']), 301);
        }
        return $this->render('update',[
                'user' => $user
            ]
        );
    }






}

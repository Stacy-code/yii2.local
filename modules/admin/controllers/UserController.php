<?php


namespace app\modules\admin\controllers;


use app\models\User;
use app\controllers\AppController;
use app\modules\admin\assets\UserAsset;
use app\services\user\UserService;
use Yii;
use yii\data\ActiveDataProvider;
use yii\db\Exception;
use yii\db\StaleObjectException;
use yii\helpers\Url;

class UserController extends AppController
{
    /**
     * @var UserService
     */
    public $service;


    /**
     * UserController constructor.
     * @param $id
     * @param $module
     * @param UserService $service
     * @param array $config
     */
    public function __construct($id, $module, UserService $service, $config = [])
    {
        parent::__construct($id, $module, $config);
        $this->service = $service;
    }

    public function init()
    {
        parent::init();
        UserAsset::register($this->view);
    }

    /**
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index',
            ['dataProvider' => $this->service->dataProvider]);
    }


    /**
     * Добавление записи
     */
    public function actionCreate()
    {
        $user = new User();

        if($user->load(Yii::$app->request->post()) && $user->save()){
            Yii::$app->session->setFlash('success' , "Запис cтворено!");
            return Yii::$app->response->redirect(Url::toRoute(['/admin/user/index']), 301);
        }
        return $this->render('create',[
                'user' => $user
            ]
        );
    }

    /**
     * Обновление записи
     */
    public function actionUpdate(int $id)
    {
        $user = User::findOne($id);
        if($user->load(Yii::$app->request->post()) && $user->save()){
            Yii::$app->session->setFlash('success' , "Запис відновлено!");
                 return Yii::$app->response->redirect(Url::toRoute(['/admin/user/index']), 301);
        }
        return $this->render('update',[
            'user' => $user
            ]
        );
    }

    /**
     * Удаление записи
     * @throws \Throwable
     */
    public function actionDelete(int $id)
    {
        $result = $this->service->delete(['id' => $id]);
        Yii::$app->session->setFlash('success' , $result['msg']);
        return Yii::$app->response->redirect(Url::toRoute(['/admin/user/index']), 301);
    }




}
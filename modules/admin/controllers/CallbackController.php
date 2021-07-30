<?php


namespace app\modules\admin\controllers;


use app\models\Callback;
use app\controllers\AppController;
use app\modules\admin\assets\AdminAsset;
use app\services\callback\CallbackService;
use Yii;
use yii\helpers\Url;

class CallbackController extends AppController
{
    /**
     * @var CallbackService
     */
    public $service;


    /**
     * UserController constructor.
     * @param $id
     * @param $module
     * @param CallbackService $service
     * @param array $config
     */
    public function __construct($id, $module, CallbackService $service, $config = [])
    {
        parent::__construct($id, $module, $config);
        $this->service = $service;
    }

    public function init()
    {
        parent::init();
        AdminAsset::register($this->view);
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

        $callback = new Callback();

        if (Yii::$app->request->isPost) {

            $this->service->create(Yii::$app->request->post());
            Yii::$app->session->setFlash('success' , "Запис додано!");
            return Yii::$app->response->redirect(Url::toRoute(['/admin/callback/index']), 301);
        }
        return $this->render('create',[
                'callback' => $callback
            ]
        );
    }

    /**
     * Обновление записи
     */
    public function actionUpdate(int $id)
    {
        $callback = Callback::findOne($id);

        if (Yii::$app->request->isPost) {

            $this->service->update($callback , Yii::$app->request->post());
            Yii::$app->session->setFlash('success' , "Запис відновлено!");
            return Yii::$app->response->redirect(Url::toRoute(['/admin/callback/index']), 301);
        }
        return $this->render('update',[
                'callback' => $callback
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
        return Yii::$app->response->redirect(Url::toRoute(['/admin/callback/index']), 301);
    }




}
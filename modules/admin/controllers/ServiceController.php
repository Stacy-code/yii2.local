<?php

namespace app\modules\admin\controllers;


use app\models\Service;
use app\controllers\AppController;
use app\modules\admin\assets\UserAsset;
use app\services\service\ServiceService;
use Yii;
use yii\helpers\Url;

class ServiceController extends AppController
{

    /**
     * @var ServiceService
     */
    public $service;


    /**
     * UserController constructor.
     * @param $id
     * @param $module
     * @param ServiceService $service
     * @param array $config
     */
    public function __construct($id, $module, ServiceService $service, $config = [])
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
            ['dataProvider' => $this->service->dataProvider]
        );

    }


    /**
     * Добавление записи
     */
    public function actionCreate()
    {

        $model = new Service();

        if (Yii::$app->request->isPost) {

            $this->service->create(Yii::$app->request->post());
            Yii::$app->session->setFlash('success' , "Запис додано!");
            return Yii::$app->response->redirect(Url::toRoute(['/admin/service/index']), 301);
        }
        return $this->render('create',[
                'model' => $model
            ]
        );
    }

    /**
     * Обновление записи
     */
    public function actionUpdate(int $id)
    {

        $model = Service::findOne($id);

        if (Yii::$app->request->isPost) {

            $this->service->update($model,Yii::$app->request->post());
            Yii::$app->session->setFlash('success' , "Запис відновлено!");
            return Yii::$app->response->redirect(Url::toRoute(['/admin/service/index']), 301);
        }
        return $this->render('update',[
                'model' => $model
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
        return Yii::$app->response->redirect(Url::toRoute(['/admin/service/index']), 301);
    }

}
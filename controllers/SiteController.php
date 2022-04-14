<?php

namespace app\controllers;

use app\services\book\BookService;
use app\services\callback\CallbackService;
use app\services\service\ServiceService;
use Yii;
use yii\base\Module as BaseModule;
use yii\helpers\Url;
use yii\web\ErrorAction;
use app\models\Book;
use app\models\Callback;
use app\models\Service;



/**
 * Class SiteController
 * @package app\controllers
 */
class SiteController extends AppController
{

    /**
     * @var Book $book
     */
    public $book;

    /**
     * @var Callback $callback
     */
    public $callback;

    /**
     * @var Service $service
     */
    public $service;

    /**
     * @var string $layout
     */
    public $layout = 'default';

    /**
     * @var BookService
     */
    public $serviceBook;

    /**
     * @var CallbackService
     */
    public $serviceCallback;

    /**
     * @var ServiceService
     */
    public $serviceService;


    /**
     * UserController constructor.
     * @param $id
     * @param $module
     * @param BookService $serviceBook
     * @param CallbackService $serviceCallback
     * @param ServiceService $serviceService
     * @param array $config
     */
    public function __construct(
        $id,
        BaseModule $module,
        BookService $serviceBook,
        CallbackService $serviceCallback,
        ServiceService $serviceService,
        $config = []
    )
    {
        parent::__construct($id, $module, $config);
        $this->service = $serviceBook;
        $this->serviceCallback = $serviceCallback;
        $this->serviceService = $serviceService;
    }



    /**
     * {@inheritdoc}
     */
    public function actions(): array
    {
        return [
            'error' => [
                'class' => ErrorAction::class,
                'view' => '@app/views/site/error.php'
            ]
        ];
    }


    public function actionIndex()
    {
        if (Yii::$app->request->isPost) {

            $result = $this->serviceCallback->create(Yii::$app->request->post());
            $result['success']
                ? Yii::$app->session->setFlash('success' , "Запис відновлено!")
                :  Yii::$app->session->setFlash('error' , $result['msg']);
            return Yii::$app->response->redirect(Url::toRoute(['/']), 301);


        }
        return $this->render('home',[
                'callback' => new $this->serviceCallback::$modelClass,
                'service' => new $this->serviceService::$modelClass,
                'serviceService' =>$this->serviceService,
                'serviceCallback' => $this->serviceCallback

            ]
        );
    }

    /**
     * @return string
     */
    public function actionGallery(): string
    {
        return $this->render('gallery');
    }

    /**
     * @return mixed
     */
    public function actionBook()
    {

        if (Yii::$app->request->isPost) {

            $result = $this->service->create($this->service->getSaveData());
            $result['success']
                ? Yii::$app->session->setFlash('success' , "Запис відновлено!")
                :  Yii::$app->session->setFlash('error' , $result['msg']);
             return Yii::$app->response->redirect(Url::toRoute(['book']), 301);


        }
        return $this->render('book',[
                'book' => new $this->service::$modelClass,
                'service' => new $this->serviceService::$modelClass,
                'serviceService' =>$this->serviceService,
            ]
        );
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

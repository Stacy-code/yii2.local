<?php

namespace app\controllers;

use app\services\book\BookService;
use app\services\callback\CallbackService;
use Yii;
use yii\base\Module as BaseModule;
use yii\helpers\Url;
use yii\web\ErrorAction;
use app\models\Book;
use app\models\Callback;
use yii\web\NotFoundHttpException;
use yii\web\Response;


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
     * @var string $layout
     */
    public $layout = 'default';

    /**
     * @var BookService
     */
    public $service;

    /**
     * @var CallbackService
     */
    public $serviceCallback;


    /**
     * UserController constructor.
     * @param $id
     * @param $module
     * @param BookService $service
     * @param CallbackService $serviceCallback
     * @param array $config
     */
    public function __construct(
        $id,
        BaseModule $module,
        BookService $service,
        CallbackService $serviceCallback,
        $config = []
    )
    {
        parent::__construct($id, $module, $config);
        $this->service = $service;
        $this->serviceCallback = $serviceCallback;
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

            $result = $this->service->create(Yii::$app->request->post());
            $result['success']
                ? Yii::$app->session->setFlash('success' , "Запис відновлено!")
                :  Yii::$app->session->setFlash('error' , $result['msg']);
             return Yii::$app->response->redirect(Url::toRoute(['book']), 301);


        }
        return $this->render('book',[
                'book' => new $this->service::$modelClass,
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

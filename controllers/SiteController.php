<?php

namespace app\controllers;

use app\services\book\BookService;
use Yii;
use yii\base\Module as BaseModule;
use yii\helpers\Url;
use yii\web\ErrorAction;
use app\models\Book;
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
     * @var string $layout
     */
    public $layout = 'default';

    /**
     * @var BookService
     */
    public $service;


    /**
     * UserController constructor.
     * @param $id
     * @param $module
     * @param BookService $service
     * @param array $config
     */
    public function __construct(
        $id,
        BaseModule $module,
        BookService $service,
        $config = []
    )
    {
        parent::__construct($id, $module, $config);
        $this->service = $service;
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

    /**
     * @return string
     */
    public function actionIndex(): string
    {
        return $this->render('home');
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
        $book = new Book();

        if (Yii::$app->request->isPost) {

            $this->service->create(Yii::$app->request->post());
            Yii::$app->session->setFlash('success' , "Запис відновлено!");
            return Yii::$app->response->redirect(Url::toRoute(['/']), 301);
        }
        return $this->render('book',[
                'book' => $book
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

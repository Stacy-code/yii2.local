<?php

namespace app\controllers;

use Yii;
use yii\helpers\Url;
use yii\web\ErrorAction;
use app\models\Book;


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

        if($book->load(Yii::$app->request->post()) && $book->save()){
            Yii::$app->session->setFlash('success' , "Запис cтворено!");
            return Yii::$app->response->redirect(Url::toRoute(['book']));
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

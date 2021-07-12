<?php


namespace app\modules\admin\controllers;


use app\models\Book;
use app\controllers\AppController;
use app\modules\admin\assets\BookAsset;
use app\services\book\BookService;
use Yii;
use yii\helpers\Url;

class BookController extends AppController
{
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
    public function __construct($id, $module, BookService $service, $config = [])
    {
        parent::__construct($id, $module, $config);
        $this->service = $service;
    }

    public function init()
    {
        parent::init();
        BookAsset::register($this->view);
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

        $book = new Book();

        if (Yii::$app->request->isPost) {

            $this->service->create(Yii::$app->request->post());
            Yii::$app->session->setFlash('success' , "Запис додано!");
            return Yii::$app->response->redirect(Url::toRoute(['/admin/book/index']), 301);
        }
        return $this->render('create',[
                'book' => $book
            ]
        );
    }

    /**
     * Обновление записи
     */
    public function actionUpdate(int $id)
    {

        $book = Book::findOne($id);

        if (Yii::$app->request->isPost) {

            $this->service->update($book,Yii::$app->request->post());
            Yii::$app->session->setFlash('success' , "Запис відновлено!");
            return Yii::$app->response->redirect(Url::toRoute(['/admin/book/index']), 301);
        }
        return $this->render('update',[
                'book' => $book
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
        return Yii::$app->response->redirect(Url::toRoute(['/admin/book/index']), 301);
    }




}
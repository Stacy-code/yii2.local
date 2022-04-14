<?php


namespace app\modules\room\controllers;

use app\modules\room\assets\RoomAsset;
use app\services\book\BookService;
use app\models\Book;
use Yii;
use yii\base\Module as BaseModule;

class BookController extends BaseController
{

    /**
     * @var BookService
     */
    public $service;

    public $defaultAction = "index";

    /**
     * DashboardController constructor.
     *
     * @param             $id
     * @param BaseModule  $module
     * @param array       $config
     */
    public function __construct($id, BaseModule $module, BookService $service, $config = [])
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


    public function actionIndex(){
        return $this->render("index",
            ['dataProvider' => $this->service->roomDataProvider()]);
    }

}
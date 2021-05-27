<?php


namespace app\modules\admin\controllers;



use app\controllers\AppController;

class AdminController extends  AppController
{

    public $layout = 'admin';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
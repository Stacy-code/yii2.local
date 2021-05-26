<?php


namespace app\controllers;


use yii\web\Controller;

class HomeController extends Controller
{

    public $layout = 'default';

    public function actionIndex()
    {
        return $this->render('home');
    }

}
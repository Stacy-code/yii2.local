<?php


namespace app\modules\admin\controllers;


use app\models\User;
use app\controllers\AppController;

class AdminController extends AppController
{

    public $layout = 'admin';

    /**
     * @return string
     */
    public function actionIndex()
    {
        $users = User::find()->all();
        return $this->render('index',
            ['users' =>$users]);
    }




}
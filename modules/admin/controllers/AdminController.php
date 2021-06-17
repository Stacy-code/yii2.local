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

    /**
     * Обновление записи
     */
    public function actionUpdate(){

    }

    /**
     * Удаление записи
     */
    public function actionDelete(){
        $id = (int)$_POST['id'];
        $user= User::findOne($id);
        $user->delete();
        return $this->render('index');
    }



}
<?php


namespace app\commands;


use Yii;
use yii\console\Controller;
use app\models\User;

class UserController extends Controller
{
    /**
     * @throws \yii\base\Exception
     */
    public function actionInit()
    {
       $model = new User();
       $model->name='admin';
        $model->email = 'admin@gmail.com';
        $model->password = Yii::$app->security->generatePasswordHash('admin');
        $model->active =  User::ACTIVE_USER;
        $model->save();
    }
}
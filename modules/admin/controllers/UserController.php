<?php


namespace app\modules\admin\controllers;


use app\models\User;
use app\controllers\AppController;
use Yii;
use yii\db\Exception;
use yii\db\StaleObjectException;
use yii\helpers\Url;

class UserController extends AppController
{
    /**
     * @var User
     */
    public $users;

    public $layout = 'user';

    /**
     * @return string
     */
    public function actionIndex()
    {
        $users = User::find()->all();
        return $this->render('index',
            ['users' => $users]);
    }

    /**
     * Обновление записи
     */
    public function actionUpdate()
    {

    }

    /**
     * Удаление записи
     */
    public function actionDelete(int $id)
    {


        try {
            $user = User::findOne($id);
            $user->delete();
            Yii::$app->session->setFlash('success' , "Видалено один запис!");

        } catch (StaleObjectException $e) {
            Yii::$app->session->setFlash('success' , "Не вдалося видалити запис!");

        }

        return Yii::$app->response->redirect(Url::toRoute(['/admin/user/index']), 301);


    }


}
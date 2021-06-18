<?php


namespace app\modules\admin\controllers;


use app\models\User;
use app\controllers\AppController;
use app\modules\admin\assets\UserAsset;
use Yii;
use yii\data\ActiveDataProvider;
use yii\db\Exception;
use yii\db\StaleObjectException;
use yii\helpers\Url;

class UserController extends AppController
{
    /**
     * @var User
     */
    public $users;


    public function init()
    {
        parent::init();
        UserAsset::register($this->view);
    }

    /**
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => User::find(),
            'pagination' => [
                'pageSize' => 15,
            ],
        ]);

        return $this->render('index',
            ['dataProvider' => $dataProvider]);
    }


    /**
     * Обновление записи
     */
    public function actionUpdate(int $id)
    {
        $user = User::findOne($id);

        if($user->load(Yii::$app->request->post()) && $user->save()){
            Yii::$app->session->setFlash('success' , "Запис відновлено!");
            return Yii::$app->response->redirect(Url::toRoute(['/admin/user/index']), 301);
        }
        return $this->render('update',[
            'user' => $user
            ]
        );
    }

    /**
     * Удаление записи
     * @throws \Throwable
     */
    public function actionDelete(int $id)
    {


        try {
            $user = User::findOne($id);
            $user->delete();
            Yii::$app->session->setFlash('success' , "Видалено один запис!");

        } catch (\Exception $e) {
            Yii::$app->session->setFlash('success' , "Не вдалося видалити запис!");

        }

        return Yii::$app->response->redirect(Url::toRoute(['/admin/user/index']), 301);


    }


}
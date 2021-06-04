<?php

namespace app\controllers\identity;

use app\models\User;
use Yii;
use yii\base\Exception;
use yii\helpers\Url;
use yii\web\Controller;


class RegisterController extends Controller
{
    public $layout = 'auth';

    /**
     * @return mixed;
     * @throws Exception
     */
    public function actionIndex()
    {
        if (Yii::$app->user->isGuest) {
            return $this->actionRegister();
        }
        return Yii::$app->response->redirect(Url::toRoute(['/home']));
    }

    /**
     * @return mixed
     */
    public function actionRegister(){

        if (Yii::$app->user->isGuest){
            $model = new User();
            $model->scenario = 'register';
            if ($model->load(Yii::$app->request->post()) && $model->register()) {
                return Yii::$app->response->redirect(Url::toRoute(['/home']));
            }
            return $this->render('register', [
                'model' => $model
            ]);
        }
        return Yii::$app->response->redirect(Url::toRoute(['/home']));

    }


}
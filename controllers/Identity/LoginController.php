<?php

namespace app\controllers\identity;

use app\models\User;
use Yii;
use yii\base\Exception;
use yii\helpers\Url;
use yii\web\Controller;

class LoginController extends Controller
{
    public $layout = 'auth';
    /**
     * @return mixed;
     * @throws Exception
     */
    public function actionIndex()
    {
        if (Yii::$app->user->isGuest) {
            return $this->actionLogin();
        }
        return Yii::$app->response->redirect(Url::toRoute(['/home']));
    }

    /**
     * @return mixed
     * @throws Exception
     */
    public function actionLogin()
    {
        if (Yii::$app->user->isGuest) {
            $model = new User();
            $model->scenario = 'login';
            if ($model->load(Yii::$app->request->post()) && $model->login()) {
                return Yii::$app->response->redirect(Url::toRoute(['/home']));
            }
            return $this->render('login', [
                'model' => $model
            ]);
        }
        return Yii::$app->response->redirect(Url::toRoute(['/home']));
    }

    /**
     * Logout action.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();
        return Yii::$app->response->redirect(Url::toRoute(['/home']));


    }

}
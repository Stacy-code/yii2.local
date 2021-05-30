<?php

namespace app\controllers\identity;

use app\models\User;
use Yii;
use yii\base\Exception;
use yii\helpers\Url;
use yii\web\Controller;

class LoginController extends Controller
{
    /**
     * @return mixed;
     * @throws Exception
     */
    public function actionIndex()
    {
        if (Yii::$app->user->isGuest) {
            return $this->actionLogin();
        }
        return Yii::$app->response->redirect(Url::toRoute(['/']));
    }

    /**
     * @return mixed
     * @throws Exception
     */
    public function actionLogin()
    {
        $this->layout = 'login';
        if (Yii::$app->user->isGuest) {
            $identityService = new User();
            $identityService->scenario = 'login';
            if ($identityService->load(Yii::$app->request->post()) && $identityService->login()) {
                return Yii::$app->response->redirect(Url::toRoute(['/']));
            }
            return $this->render('login', [
                'login' => $identityService
            ]);
        }
        return Yii::$app->response->redirect(Url::toRoute(['/']));
    }

    /**
     * Logout action.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();
        return Yii::$app->response->redirect(Url::toRoute(['/']));


    }

}
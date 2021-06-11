<?php


namespace app\controllers;

use app\models\User;
use Yii;
use yii\base\Exception;
use yii\helpers\Url;

/**
 * Class IdentityController
 * @package app\controllers
 */
class IdentityController extends AppController
{
    /**
     * @var string $defaultAction
     */
    public $defaultAction = 'login';

    /**
     * @var string $layout
     */
    public $layout = 'auth';

    /**
     * @var User
     */
    public $model;

    /**
     * IdentityController constructor.
     * @param $id
     * @param $module
     * @param User $model
     * @param array $config
     */
    public function __construct($id, $module, User $model, $config = [])
    {
        parent::__construct($id, $module, $config);
        $this->model = $model;
    }

    /**
     * @return mixed
     * @throws Exception
     */
    public function actionLogin()
    {
        if (Yii::$app->user->isGuest) {
            $model = $this->model;
            $model->scenario = 'login';
            if ($model->load(Yii::$app->request->post()) && $model->login()) {
                return Yii::$app->response->redirect(Url::toRoute(['/']));
            }
            return $this->render('login', [
                'model' => $model
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

    /**
     * @return mixed
     * @throws Exception
     */
    public function actionRegister()
    {
        if (Yii::$app->user->isGuest) {
            $model = $this->model;
            $model->scenario = 'register';
            if ($model->load(Yii::$app->request->post()) && $model->register()) {
                return Yii::$app->response->redirect(Url::toRoute(['/']));
            }
            return $this->render('register', [
                'model' => $model
            ]);
        }
        return Yii::$app->response->redirect(Url::toRoute(['/']));
    }
}
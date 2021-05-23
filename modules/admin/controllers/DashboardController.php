<?php

namespace app\modules\admin\controllers;

use Yii;
use yii\base\Module as BaseModule;
use app\controllers\AppController;
use app\assets\backend\BackendAsset;
use yii\web\ErrorAction;
use yii\web\Response;

/**
 * Class DashboardController
 *
 * @package app\modules\admin\controllers
 */
class DashboardController extends AppController
{
    /**
     * DashboardController constructor.
     *
     * @param             $id
     * @param BaseModule  $module
     * @param array       $config
     */
    public function __construct($id, BaseModule $module, $config = [])
    {
        parent::__construct($id, $module, $config);
    }

    /**
     * Register controller asset
     */
    public function init() :void
    {
        parent::init();
        BackendAsset::register(Yii::$app->view);
    }

    /**
     * @return array
     */
    public function actions(): array
    {
        return [
            'error' => [
                'class' => ErrorAction::class
            ]
        ];
    }

    /**
     * @return string
     */
    public function actionIndex(): string
    {
        return $this->render('index');
    }

    /**
     * Sidebar action, record state to session
     *
     * @return boolean|string|response
     */
    public function actionSidebar()
    {
        if(Yii::$app->request->isAjax){
            Yii::$app->response->format = Response::FORMAT_JSON;
            $session = Yii::$app->session;
            if (Yii::$app->request->post('sidebar') === 'true') {
                $session['sidebar'] = ['status' => 'open'];
                return true;
            }
            $session['sidebar'] = ['status' => 'close'];
            return false;
        }
        return 'Error, you request is bad!';
    }

    /**
     * @return string
     */
    public function actionError(): string
    {
        $exception = Yii::$app->errorHandler->exception;
        if ($exception !== null) {
            return $this->render('error', [
                'exception' => $exception
            ]);
        }
        return '';
    }
}

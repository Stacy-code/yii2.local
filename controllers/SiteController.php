<?php

namespace app\controllers;

use Yii;
use yii\web\ErrorAction;


/**
 * Class SiteController
 * @package app\controllers
 */
class SiteController extends AppController
{

    /**
     * @var string $layout
     */
    public $layout = 'default';


    /**
     * {@inheritdoc}
     */
    public function actions(): array
    {
        return [
            'error' => [
                'class' => ErrorAction::class,
                'view' => '@app/views/site/error.php'
            ]
        ];
    }

    /**
     * @return string
     */
    public function actionIndex(): string
    {
        return $this->render('home');
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

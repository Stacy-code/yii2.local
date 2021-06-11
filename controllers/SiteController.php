<?php

namespace app\controllers;

use Yii;


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
                'class' => yii\web\ErrorAction::class,
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

}

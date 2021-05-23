<?php

namespace app\controllers;

use yii\web\Controller;
use app\controllers\traits\ControllerTrait;

/**
 * Class AppController
 *
 * @package app\controllers
 *
 * @property int|null $langID
 */
class AppController extends Controller
{
    use ControllerTrait;

    /**
     * Register and set page meta tags
     *
     * @param null $title
     * @param null $keywords
     * @param null $description
     */
    protected function setMeta($title = null, $keywords = null, $description = null): void
    {
        $this->view->title = $title;
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => $keywords]);
        $this->view->registerMetaTag(['name' => 'description', 'content' => $description]);
    }
}
<?php

namespace app\modules\admin\widgets\FilterTable;

use app\models\SearchInterface;
use app\services\CoreService;
use Yii;
use yii\base\InvalidConfigException;
use yii\base\Widget;


class FilterTableWidget extends Widget
{
    /**
     * @var SearchInterface $searchModel
     */
    public $searchModel;

    /**
     * @var array $fields
     */
    public $fields = [];

    /**
     * @var CoreService $service
     */
    public $service;


    /**
     * @throws InvalidConfigException
     */
    public function init()
    {
        parent::init();
        $this->useSearchModel();
    }

    /**
     * @return string|void
     */
    public function run()
    {
        return $this->render('search', [
            'searchModel' => $this->searchModel,
            'fields' => $this->fields
        ]);
    }

    /**
     * @throws InvalidConfigException
     */
    private function useSearchModel()
    {
        if (!$this->searchModel instanceof SearchInterface && $this->service instanceof CoreService) {
            $this->searchModel = new $this->service::$searchClass();
            $this->searchModel->load(Yii::$app->request->get());
        } else {
            throw new InvalidConfigException('You must set search model');
        }

    }

}
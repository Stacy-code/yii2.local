<?php

namespace app\controllers\traits;

use Yii;
use yii\db\ActiveRecord;
use yii\widgets\ActiveForm;

/**
 * Trait ValidationTrait
 *
 * @package app\controllers\traits
 */
trait ValidationTrait
{
    /**
     * @var array $requestData
     */
    private $requestData;

    /**
     * @param ActiveRecord|null $model
     * @param array             $models
     *
     * @return array
     *
     */
    protected function ajaxValidation(ActiveRecord $model = null, array $models = []): array
    {
        $errors = [];
        $this->requestData = Yii::$app->request->post();
        if (Yii::$app->request->isAjax && Yii::$app->request->isPost) {
            if ($model instanceof ActiveRecord
                && $model->load($this->requestData)
            ){
                $errors = ActiveForm::validate($model);
            }
            if (!empty($models) && \is_array($models)) {
                /** @var ActiveRecord $model */
                foreach ($models as $stackModel) {
                    if ($stackModel instanceof ActiveRecord
                        && $stackModel->load($this->requestData)
                    ) {
                        $errors = array_merge($errors,
                            ActiveForm::validate($stackModel)
                        );
                    }
                }
            }
        }
        return $errors;
    }
}

<?php

namespace app\controllers\traits;

use Yii;
use yii\db\ActiveRecord;
use app\services\CoreService;
use yii\web\Response;

/**
 * Trait ControllerTrait
 *
 * @package app\controllers\traits
 *
 */
trait ControllerTrait
{
    use ValidationTrait;

    /**
     * @var CoreService $service
     */
    public $service;

    /**
     * @var array $processHaystack
     */
    private $processHaystack = [
        'create', 'update'
    ];

    /**
     * @param ActiveRecord|null $model
     * @param string|null       $process
     *
     * @throws \yii\base\ExitException
     */
    protected function runSave(ActiveRecord $model = null, string $process = null): void
    {
        $result = ['success' => false];
        $processType = $this->getProcessType($process);
        switch ($processType) {
            case 'create' :
                $validateErrors = $this->ajaxValidation($model);
                if (!empty($validateErrors)) {
                    $result['errors'] = $validateErrors;
                } else {
                    $result = $this->service->create($this->requestData);
                }
                break;
            case 'update' :
                $validateErrors = $this->ajaxValidation($model);
                if (!empty($validateErrors)) {
                    $result['errors'] = $validateErrors;
                } else {
                    $result = $this->service->update($model, $this->requestData);
                }
                break;
        }
        if (Yii::$app->request->isAjax && Yii::$app->request->isPost) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            Yii::$app->response->data = $result;
            Yii::$app->response->send();
            Yii::$app->end();
        }
    }

    /**
     * @param string|null $process
     *
     * @return string|null
     */
    private function getProcessType(string $process = null): ?string
    {
        $processType = $process ?? Yii::$app->controller->action->id;
        return \in_array($processType, $this->processHaystack, true)
            ? $processType : null;
    }
}

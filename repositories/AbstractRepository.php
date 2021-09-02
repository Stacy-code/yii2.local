<?php

namespace app\repositories;

use Yii;
use yii\base\BaseObject;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;
use ReflectionException;

/**
 * Class AbstractRepository
 *
 * @package app\repositories\lang
 *
 * @property string $table
 * @property string $shortName
 * @property ActiveQuery $model
 */
abstract class AbstractRepository extends BaseObject implements RepositoryInterface
{
    use RepositoryTrait;

    /**
     * @var array
     */
    public array $events = [];
    /**
     * @return string
     */
    public function getTable(): string
    {
        return $this->modelClass::tableName();
    }

    /**
     * @return string
     * @throws ReflectionException
     */
    public function getShortName(): string
    {
        return (new \ReflectionClass($this->modelClass))->getShortName();
    }

    /**
     * @param array $condition
     *
     * @return ActiveQuery
     */
    public function getModel(array $condition = []): ActiveQuery
    {
        return !empty(array_filter($condition))
            ? $this->query->where($condition)
            : $this->query;

    }

    /**
     * @param array $data
     *
     * @return array
     */
    public function create(array $data = []): array
    {
        $this->dataPost = $data;
        $this->entityModel = new $this->modelClass();
        $this->processType = __FUNCTION__;


        return $this->processCreate();
    }

    /**
     * @param ActiveRecord|null $model
     * @param array $data
     *
     * @return array
     */
    public function update(ActiveRecord $model = null, array $data = []): array
    {
        $this->dataPost = $data;
        $this->entityModel = $model;
        $this->processType = __FUNCTION__;
        return $this->processUpdate();
    }


    /**
     * @param ActiveRecord $model
     *
     * @return array
     */
    public function delete(ActiveRecord $model): array
    {
        $this->entityModel = $model;
        $this->processType = __FUNCTION__;
        return $this->processDelete();
    }


    /**
     * @return array
     */
    public function processCreate(): array
    {
        $result = ['success' => false];
        $transaction = Yii::$app->db->beginTransaction();
        try {

            $this->entityModel->load($this->dataPost);

            if ($this->entityModel->validate()) {

                $result['success'] = true;
                $this->entityModel->save();

            }
            else{

                $result['errors'] = $this->entityModel->getErrors();
            }

            $transaction->commit();
        } catch (\Exception $e) {

            $result['errors'] = $e->getMessage();
            $transaction->rollBack();
            $result['success'] = false;
        }

        return $result;
    }

    /**
     * @return array
     */
    public function processUpdate(): array
    {
        $result = ['success' => false];
        $transaction = Yii::$app->db->beginTransaction();
        try {

            $this->entityModel->load($this->dataPost);
            if ($this->entityModel->validate()) {

                $result['success'] = true;
                $this->entityModel->save();

            }
            else{
                $result['errors'] = $this->entityModel->getErrors();
            }
            $transaction->commit();

        } catch (\Exception $e) {
            $result['errors'] = $e->getMessage();
            $transaction->rollBack();
            $result['success'] = false;
        }

        return $result;
    }


    /**
     * @return array
     */
    public function processDelete(): array
    {
        $result = [
            'success' => false,
        ];

        $transaction = Yii::$app->db->beginTransaction();

        try {
            $result['success'] = true;
            $this->entityModel->delete();
            $transaction->commit();
        } catch (\Exception | \Throwable $e) {
            $result['errors'] = $e->getMessage();
            $transaction->rollBack();
            $result['success'] = false;

        }

        return $result;
    }
}

<?php

namespace app\repositories;

use yii\db\ActiveQuery;
use yii\db\ActiveRecord;
use ReflectionException;

/**
 * Class AbstractRepository
 *
 * @package app\repositories\lang
 *
 * @property string      $table
 * @property string      $shortName
 * @property ActiveQuery $model
 */
abstract class AbstractRepository implements RepositoryInterface
{
    use RepositoryTrait;

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
        return $this->query->where(
            $condition
        );
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
        return $this->processSave();
    }

    /**
     * @param ActiveRecord|null $model
     * @param array             $data
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
    public function processSave(): array
    {
        return ['success' => false];
    }

    /**
     * @return array
     */
    public function processDelete(): array
    {
        return ['success' => false];
    }
}

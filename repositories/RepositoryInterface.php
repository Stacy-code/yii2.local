<?php


namespace app\repositories;

use yii\db\ActiveQuery;
use yii\db\ActiveRecord;
use ReflectionException;

/**
 * Interface RepositoryInterface
 *
 * @package app\repositories\interfaces
 *
 * @property string      $table
 * @property string      $shortName
 * @property ActiveQuery $model
 */
interface RepositoryInterface
{



    /**
     * @return string
     */
    public function getTable(): string;

    /**
     * @return string
     * @throws ReflectionException
     */
    public function getShortName(): string;

    /**
     * @param array $condition
     *
     * @return ActiveQuery
     */
    public function getModel(array $condition = []): ActiveQuery;

    /**
     * @param array $data
     *
     * @return array
     */
    public function create(array $data = []): array;

    /**
     * @param ActiveRecord|null $model
     * @param array             $data
     *
     * @return array
     */
    public function update(ActiveRecord $model = null, array $data = []): array;

    /**
     * @param ActiveRecord $model
     *
     * @return array
     */
    public function delete(ActiveRecord $model): array;


}

<?php


namespace app\services;

use yii\db\ActiveRecord;
use yii\data\ActiveDataProvider;
use app\repositories\AbstractRepository;

/**
 * Interface CoreServiceInterface
 *
 * @property AbstractRepository $repository
 * @property ActiveRecord       $filterModel
 * @property ActiveDataProvider $dataProvider
 */
interface CoreServiceInterface
{
    /**
     * @return AbstractRepository
     */
    public static function getRepository(): AbstractRepository;

    /**
     * @return ActiveRecord
     */
    public static function getFilterModel(): ActiveRecord;

    /**
     * @return ActiveDataProvider
     */
    public static function getDataProvider(): ActiveDataProvider;

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
     * @param array $condition
     *
     * @return array
     */
    public function delete(array $condition = []): array;
}
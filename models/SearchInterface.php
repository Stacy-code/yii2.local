<?php


namespace app\models;

use yii\db\ActiveQuery;

/**
 * Interface SearchInterface
 */
interface SearchInterface
{
    /**
     * @return array
     */
    public function rules(): array;

    /**
     * @return array
     */
    public function attributeLabels(): array;

    /**
     * @param array $params
     *
     * @return ActiveQuery
     */
    public function search(array $params = []): ActiveQuery;
}

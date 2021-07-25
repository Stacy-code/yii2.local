<?php


namespace app\models;


use yii\db\ActiveQuery;

class CallbackSearch extends Callback implements SearchInterface
{
    /**
     * @param array $params
     *
     * @return ActiveQuery
     */
    public function search(array $params = []) : ActiveQuery {
        $query = self::find();
        $this->load($params);
        return $query;
    }
}
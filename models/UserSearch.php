<?php


namespace app\models;


use yii\db\ActiveQuery;

class UserSearch extends User implements SearchInterface
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
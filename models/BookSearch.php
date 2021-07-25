<?php


namespace app\models;


use yii\db\ActiveQuery;

class BookSearch extends Book implements SearchInterface
{
    /**
     * @param array $params
     *
     * @return ActiveQuery
     */
    public function search(array $params = []) : ActiveQuery {
        $query = self::find();
        $this->load($params);

        //$query->filterWhere(['id' => $this->id]);
        //$query->filterWhere(['like', '']);
        return $query;
    }
}
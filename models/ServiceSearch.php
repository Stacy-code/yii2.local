<?php


namespace app\models;


use yii\db\ActiveQuery;

class ServiceSearch extends Service implements SearchInterface
{
    /**
     * @param array $params
     *
     * @return ActiveQuery
     */
    public function search(array $params = []) : ActiveQuery {
        $query = self::find();
        $this->load($params);

        $query->filterWhere(['id' => $this->id] );
        $query->andFilterWhere(['like'  , 'name', $this->name]);
        $query->andFilterWhere(['price'  => $this->price]);
        return $query;
    }
}
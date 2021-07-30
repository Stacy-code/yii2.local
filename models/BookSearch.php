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

        $query->filterWhere(['id' => $this->id] );
        $query->andFilterWhere(['like'  , 'name', $this->name]);
        $query->andFilterWhere(['like'  , 'email', $this->email]);
        $query->andFilterWhere(['like'  , 'phone', $this->phone]);
        $query->andFilterWhere(['like'  , 'service', $this->service]);
        $query->andFilterWhere(['like'  , 'status', $this->status]);
        return $query;
    }
}
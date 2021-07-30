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

        $query->filterWhere(['id' => $this->id] );
        $query->andFilterWhere(['like'  , 'name', $this->name]);
        $query->andFilterWhere(['like'  , 'email', $this->email]);
        $query->andFilterWhere(['like'  , 'active', $this->active]);
        return $query;
    }
}
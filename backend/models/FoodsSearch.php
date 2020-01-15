<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Foods;

/**
 * FoodsSearch represents the model behind the search form of `app\models\Foods`.
 */
class FoodsSearch extends Foods
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['food_id', 'food_available', 'food_category'], 'integer'],
            [['food_name'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Foods::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'food_id' => $this->food_id,
            'food_available' => $this->food_available,
            'food_category' => $this->food_category,
        ]);

        $query->andFilterWhere(['like', 'food_name', $this->food_name]);

        return $dataProvider;
    }
}

<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Foods;
use yii\data\ArrayDataProvider;
use yii\helpers\VarDumper;

/**
 * FoodsSearch represents the model behind the search form of `frontend\models\Foods`.
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
     * @return ActiveDataProvider|ArrayDataProvider
     */
    public function search($params)
    {

//        Yii::$app->redis->set('categories',serialize($foods));

//        VarDumper::dump($params,100,true);die();

        if(array_key_exists('cat', $params)){
            $query = Foods::find()->where("food_available=1 AND food_category=:id",['id'=>$params['cat']]);
        }else{
            $query = Foods::find()->where("food_available=1");
        }


        $foods=$query->all();
        // add conditions that should always apply here

        //
//        $this->load($params);
//
//        if (!$this->validate()) {
//            // uncomment the following line if you do not want to return any records when validation fails
//            // $query->where('0=1');
//            return $dataProvider;
//        }

        return new ArrayDataProvider([
            'allModels' => $foods,
        ]);
    }
}

<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Foodcat;
use yii\data\ArrayDataProvider;
use yii\helpers\VarDumper;

/**
 * FoodcatSearch represents the model behind the search form of `frontend\models\Foodcat`.
 */
class FoodcatSearch extends Foodcat
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cat_id'], 'integer'],
            [['cat_name'], 'safe'],
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

        if ( Yii::$app->redis->get('categories')===null)
        {

            $query = Foodcat::find();

            $foods = $query->asArray()->all();
//            VarDumper::dump($foods,100,true);die();
            Yii::$app->redis->set('categories',serialize($foods));

        }

        else
        {
            $foods=unserialize(Yii::$app->redis->get('categories'));
        }

        $arrayDataProvider = new ArrayDataProvider([
            'allModels' => $foods
        ]);

//        $this->load($params);
//
//        if (!$this->validate()) {
//            // uncomment the following line if you do not want to return any records when validation fails
//            // $query->where('0=1');
//            return $arrayDataProvider;
//        }

//            Yii::$app->redis->set('categories',$foods);

        return $arrayDataProvider;



    }
}

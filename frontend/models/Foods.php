<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "foods".
 *
 * @property int $food_id
 * @property string|null $food_name
 * @property int|null $food_available
 * @property int|null $food_category
 *
 * @property Foodcat $foodCategory
 */
class Foods extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'foods';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['food_available', 'food_category'], 'integer'],
            [['food_name'], 'string', 'max' => 255],
            [['food_category'], 'exist', 'skipOnError' => true, 'targetClass' => Foodcat::className(), 'targetAttribute' => ['food_category' => 'cat_id']],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'food_id' => 'Food ID',
            'food_name' => 'Food Name',
            'food_available' => 'Food Available',
            'food_category' => 'Food Category',

        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFoodCategory()
    {
        return $this->hasOne(Foodcat::className(), ['cat_id' => 'food_category']);
    }
}

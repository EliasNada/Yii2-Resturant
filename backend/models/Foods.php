<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "foods".
 *
 * @property int $food_id
 * @property string|null $food_name
 * @property int|null $food_available
 * @property string|null $food_img
 * @property float|null $food_price
 * @property int|null $food_category
 *
 * @property Foodcat $foodCategory
 * @property Orders[] $orders
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
            [['food_price'], 'number'],
            [['food_name', 'food_img'], 'string', 'max' => 255],
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
            'food_img' => 'Food Img',
            'food_price' => 'Food Price',
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Orders::className(), ['ordered_food_id' => 'food_id']);
    }
}

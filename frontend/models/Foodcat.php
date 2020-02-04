<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "foodcat".
 *
 * @property int $cat_id
 * @property string|null $cat_name
 *
 * @property Foods[] $foods
 */
class Foodcat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'foodcat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cat_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'cat_id' => 'Cat ID',
            'cat_name' => 'Cat Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFoods()
    {
        return $this->hasMany(Foods::className(), ['food_category' => 'cat_id']);
    }
}

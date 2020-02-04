<?php

namespace frontend\models;

use common\models\User;
use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property int $order_id
 * @property string|null $order_comment
 * @property int|null $ordered_by_id
 * @property int|null $ordered_food_id
 *
 * @property User $orderedBy
 * @property Foods $orderedFood
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ordered_by_id', 'ordered_food_id'], 'integer'],
            [['order_comment'], 'string', 'max' => 255],
            [['order_quantity'], 'integer'],
            [['ordered_by_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['ordered_by_id' => 'id']],
            [['ordered_food_id'], 'exist', 'skipOnError' => true, 'targetClass' => Foods::className(), 'targetAttribute' => ['ordered_food_id' => 'food_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'order_id' => 'Order ID',
            'order_comment' => 'Order Comment',
            'order_quantity' => 'Order Quantity',
            'ordered_by_id' => 'Ordered By ID',
            'ordered_food_id' => 'Ordered Food ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'ordered_by_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderedFood()
    {
        return $this->hasOne(Foods::className(), ['food_id' => 'ordered_food_id']);
    }
}

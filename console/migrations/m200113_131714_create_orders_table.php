<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%orders}}`.
 */
class m200113_131714_create_orders_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%orders}}', [
            'order_id' => $this->primaryKey(),
            'order_quantity'=> $this->integer(),
            'order_comment' => $this->string(),
            'ordered_by_id' => $this->integer(),
            'ordered_food_id' => $this->integer(),
        ]);
        $this->addForeignKey(
            'fk_ordered_by_id',
            'orders',
            'ordered_by_id',
            'user',
            'id',
            'CASCADE'
        );
        $this->addForeignKey(
            'fk_ordered_food_id',
            'orders',
            'ordered_food_id',
            'foods',
            'food_id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%orders}}');
    }
}

<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%foods}}`.
 */
class m200113_090328_create_foods_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%foods}}', [
            'food_id' => $this->primaryKey(),
            'food_name'=>$this->string(),
            'food_available'=>$this->tinyInteger(),
            'food_img'=>$this->string(),
            'food_price'=> $this->double(),
            'food_category'=>$this->integer(),
        ]);
        $this->addForeignKey(
            'fk_food_category_id',
            'foods',
            'food_category',
            'foodcat',
            'cat_id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%foods}}');
    }
}

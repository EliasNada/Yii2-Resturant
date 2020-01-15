<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%foodcat}}`.
 */
class m200113_085635_create_foodcat_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%foodcat}}', [
            'cat_id' => $this->primaryKey(),
            'cat_name' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%foodcat}}');
    }
}

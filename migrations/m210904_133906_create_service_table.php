<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%service}}`.
 */
class m210904_133906_create_service_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%service}}', [
            'id' => $this->primaryKey(),
             'name' => $this->string(255)->notNull(),
            'price' => $this->integer()->notNull(),
            'description' => $this->string(500)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%service}}');
    }
}

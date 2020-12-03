<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%clent}}`.
 */
class m201202_193830_create_clent_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%clent}}', [
            'id' => $this->primaryKey().' NOT NULL AUTO_INCREMENT',
            'clent_name' => $this->string(225).' NOT NULL',
            'clent_list_name' => $this->string(225).' NOT NULL',
            'product_tell' => $this->string(225).' NOT NULL',
        ]);
    }


    public function safeDown()
    {
        $this->dropTable('{{%clent}}');
    }
}

<?php

use yii\db\Migration;

/**
 * Class m210814_150349_create_table_address
 */
class m210814_150349_create_table_address extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('address',
            [
                'id' => $this->primaryKey(),
                'name' => $this->string()->notNull(),
                'city_id' => $this->integer()->notNull(),
                'area_id' => $this->integer()->notNull(),
                'user_id' => $this->integer(),
                'street' => $this->string(),
                'house' => $this->string(),
                'info' => $this->text(),
            ], 'ENGINE=InnoDB'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('address');
    }
}

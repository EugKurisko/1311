<?php

use yii\db\Migration;

/**
 * Class m210814_144601_create_table_city
 */
class m210814_144601_create_table_city extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('city',
            [
                'id' => $this->primaryKey(),
                'name' => $this->string()
            ], 'ENGINE=InnoDB'
        );

        $this->insert('city',
            [
                'name' => 'Dnipro'
            ]
        );

        $this->insert('city',
            [
                'name' => 'Kharkiv'
            ]
        );

        $this->insert('city',
            [
                'name' => 'Berlin'
            ]
        );

        $this->insert('city',
            [
                'name' => 'Warsaw'
            ]
        );

        $this->insert('city',
            [
                'name' => 'Paris'
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('city');
    }
}

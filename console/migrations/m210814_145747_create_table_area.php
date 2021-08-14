<?php

use yii\db\Migration;

/**
 * Class m210814_145747_create_table_area
 */
class m210814_145747_create_table_area extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('area',
            [
                'id' => $this->primaryKey(),
                'name' => $this->string()
            ], 'ENGINE=InnoDB'
        );

        $this->insert('area',
            [
                'name' => 'City center'
            ]
        );

        $this->insert('area',
            [
                'name' => 'Business Bay Area'
            ]
        );

        $this->insert('area',
            [
                'name' => 'Outskirts'
            ]
        );

        $this->insert('area',
            [
                'name' => 'Kodaks'
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('area');
    }
}

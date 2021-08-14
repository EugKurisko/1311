<?php

use yii\db\Migration;

/**
 * Class m210814_155612_add_fk_to_address_table
 */
class m210814_155612_add_fk_to_address_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'idx-address-user_id',
            'address',
            'user_id'
        );

        $this->addForeignKey(
            'fk-address-user_id',
             'address',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-address-city_id',
            'address',
            'city_id'
        );

        $this->addForeignKey(
            'fk-address-city_id',
            'address',
            'city_id',
            'city',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-address-area_id',
            'address',
            'area_id'
        );

        $this->addForeignKey(
            'fk-address-area_id',
            'address',
            'area_id',
            'area',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-address-area_id',
            'address'
        );

        $this->dropIndex(
            'idx-address-area_id',
            'address'
        );

        $this->dropForeignKey(
            'fk-address-city_id',
            'address'
        );

        $this->dropIndex(
            'idx-address-city_id',
            'address'
        );

        $this->dropForeignKey(
            'fk-address-user_id',
            'address'
        );

        $this->dropIndex(
            'idx-address-user_id',
            'address'
        );
    }
}

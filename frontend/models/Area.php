<?php

namespace app\models;

use Yii;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "area".
 *
 * @property int $id
 * @property string|null $name
 *
 * @property Address[] $addresses
 */
class Area extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'area';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * Gets query for [[Addresses]].
     *
     * @return ActiveQuery
     */
    public function getAddresses()
    {
        return $this->hasMany(Address::className(), ['area_id' => 'id']);
    }
}

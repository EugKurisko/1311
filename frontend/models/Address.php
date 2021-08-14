<?php

namespace app\models;

use common\models\User;
use Yii;

/**
 * This is the model class for table "address".
 *
 * @property int $id
 * @property string $name
 * @property int $city_id
 * @property int $area_id
 * @property int $user_id
 * @property string $street
 * @property string $house
 * @property string|null $info
 *
 * @property Area $area
 * @property City $city
 * @property User $user
 */
class Address extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'address';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'city_id', 'area_id', 'user_id', 'street', 'house'], 'required'],
            [['city_id', 'area_id', 'user_id'], 'integer'],
            [['info'], 'string'],
            [['name', 'street', 'house'], 'string', 'max' => 255],
            [['area_id'], 'exist', 'skipOnError' => true, 'targetClass' => Area::className(), 'targetAttribute' => ['area_id' => 'id']],
            [['city_id'], 'exist', 'skipOnError' => true, 'targetClass' => City::className(), 'targetAttribute' => ['city_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
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
            'city_id' => 'City ID',
            'area_id' => 'Area ID',
            'user_id' => 'User ID',
            'street' => 'Street',
            'house' => 'House',
            'info' => 'Info',
        ];
    }

    /**
     * Gets query for [[Area]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArea()
    {
        return $this->hasOne(Area::className(), ['id' => 'area_id']);
    }

    /**
     * Gets query for [[City]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCity()
    {
        return $this->hasOne(City::className(), ['id' => 'city_id']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}

<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "publish_house".
 *
 * @property int $id
 * @property string $name
 * @property string $phone
 * @property string $address
 */
class PublishHouse extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'publish_house';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'phone', 'address'], 'required'],
            [['name', 'address'], 'string', 'max' => 50],
            [['phone'], 'string', 'max' => 25],
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
            'phone' => 'Phone',
            'address' => 'Address',
        ];
    }
}

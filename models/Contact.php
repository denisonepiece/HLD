<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property int $id
 * @property string $location
 * @property string $address
 * @property string $telephone
 * @property string $email
 * @property string $instagram
 * @property string $vk
 * @property string $props
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['location', 'address', 'telephone', 'email', 'instagram', 'vk', 'props'], 'required'],
            [['props'], 'string'],
            [['location', 'address', 'telephone', 'email', 'instagram', 'vk'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'location' => 'Location',
            'address' => 'Address',
            'telephone' => 'Telephone',
            'email' => 'Email',
            'instagram' => 'Instagram',
            'vk' => 'Vk',
            'props' => 'Props',
        ];
    }
}

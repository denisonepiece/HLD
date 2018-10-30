<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "brif".
 *
 * @property int $id
 * @property int $site
 * @property int $design
 * @property int $smm
 * @property int $ads
 * @property int $tech_sup
 * @property string $about
 * @property string $name
 * @property string $telephone
 * @property string $company
 * @property string $email
 */
class Brif extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'brif';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'telephone'], 'required'],
            [['site', 'design', 'smm', 'ads', 'tech_sup'], 'integer'],
            [['about'], 'string'],
            [['name', 'company', 'email'], 'string', 'max' => 255],
            [['telephone'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'site' => 'Site',
            'design' => 'Design',
            'smm' => 'Smm',
            'ads' => 'Ads',
            'tech_sup' => 'Tech Sup',
            'about' => 'About',
            'name' => 'Name',
            'telephone' => 'Telephone',
            'company' => 'Company',
            'email' => 'Email',
        ];
    }
}

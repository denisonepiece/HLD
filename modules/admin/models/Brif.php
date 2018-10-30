<?php

namespace app\modules\admin\models;

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
            [['site', 'design', 'smm', 'ads', 'tech_sup', 'about', 'name', 'telephone', 'company', 'email'], 'required'],
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
            'id' => '№ Заказа',
            'site' => 'Раз. сайта',
            'design' => 'Дизайн',
            'smm' => 'SMM',
            'ads' => 'Кон. реклама',
            'tech_sup' => 'Тех. поддержка',
            'about' => 'Описание',
            'name' => 'ФИО',
            'telephone' => 'Телефон',
            'company' => 'Компания',
            'email' => 'Почта',
        ];
    }
}

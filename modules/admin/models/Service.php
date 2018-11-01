<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "service".
 *
 * @property int $id
 * @property string $site_about
 * @property string $site_what
 * @property string $design_about
 * @property string $design_what
 * @property string $sup_about
 * @property string $sup_what_ads
 * @property string $sup_what_smm
 */
class Service extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'service';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['site_about', 'site_what', 'design_about', 'design_what', 'sup_about', 'sup_what_ads', 'sup_what_smm'], 'required'],
            [['site_about', 'site_what', 'design_about', 'design_what', 'sup_about', 'sup_what_ads', 'sup_what_smm'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'site_about' => 'Разработка сайта',
            'site_what' => 'Что делаем',
            'design_about' => 'Дизайн',
            'design_what' => 'Что делаем',
            'sup_about' => 'Поддержка',
            'sup_what_ads' => 'Кон. реклама',
            'sup_what_smm' => 'SMM',
        ];
    }
}

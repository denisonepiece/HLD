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
            'site_about' => 'Site About',
            'site_what' => 'Site What',
            'design_about' => 'Design About',
            'design_what' => 'Design What',
            'sup_about' => 'Sup About',
            'sup_what_ads' => 'Sup What Ads',
            'sup_what_smm' => 'Sup What Smm',
        ];
    }
}

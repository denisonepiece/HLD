<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "agency".
 *
 * @property int $id
 * @property string $intro
 * @property string $about
 * @property string $dir_about
 * @property string $dir_web
 * @property string $dir_brand
 * @property string $dir_help
 * @property string $case_about
 */
class Agency extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'agency';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['intro', 'about', 'dir_about', 'dir_web', 'dir_brand', 'dir_help', 'case_about'], 'required'],
            [['intro', 'about', 'dir_about', 'dir_web', 'dir_brand', 'dir_help', 'case_about'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'intro' => 'Интро',
            'about' => 'HLD',
            'dir_about' => 'Направление',
            'dir_web' => 'Веб разработка',
            'dir_brand' => 'Дизайн',
            'dir_help' => 'Поддержка',
            'case_about' => 'Наши работы',
        ];
    }
}

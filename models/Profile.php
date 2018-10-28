<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profile".
 *
 * @property int $id
 * @property string $article
 * @property string $logo
 * @property string $task
 * @property int $type_service_id
 * @property string $link
 * @property string $image
 * @property int $view_case_id
 */
class Profile extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profile';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['article', 'logo', 'task', 'type_service_id', 'link', 'image', 'view_case_id'], 'required'],
            [['type_service_id', 'view_case_id'], 'integer'],
            [['article', 'logo', 'task', 'link', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'article' => 'Article',
            'logo' => 'Logo',
            'task' => 'Task',
            'type_service_id' => 'Type Service ID',
            'link' => 'Link',
            'image' => 'Image',
            'view_case_id' => 'View Case ID',
        ];
    }
}

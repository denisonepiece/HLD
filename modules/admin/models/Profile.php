<?php

namespace app\modules\admin\models;

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
 * @property string $on_index
 * @property string $description
 * @property string $color
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
            [['article', 'logo', 'task', 'type_service_id', 'link', 'image', 'view_case_id', 'description', 'color'], 'required'],
            [['type_service_id', 'view_case_id'], 'integer'],
            [['description'], 'string'],
            [['article', 'logo', 'task', 'link', 'image', 'color'], 'string', 'max' => 255],
            [['on_index'], 'string', 'max' => 10],
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
            'on_index' => 'On Index',
            'description' => 'Description',
            'color' => 'Color',
        ];
    }
}

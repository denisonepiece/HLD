<?php

namespace app\modules\admin\models;

use app\models\TypeService;
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

    public function getTypeService() {
        return $this->hasMany(TypeService::className(), ['id' => 'type_service_id']);
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
//            [['article', 'logo', 'task', 'type_service_id', 'link', 'view_case_id', 'description', 'color'], 'required'],
            [['type_service_id', 'view_case_id'], 'integer'],
            [['description'], 'string'],
            [['article', 'logo', 'task', 'link', 'image', 'color', 'text_color'], 'string', 'max' => 255],
            [['on_index', 'theme'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'article' => 'Название',
            'logo' => 'Логотип',
            'task' => 'Задача',
            'type_service_id' => 'Тип услуги',
            'link' => 'Ссылка на проект',
            'image' => 'Изобр. для главной',
            'view_case_id' => 'ID открытого проекта',
            'on_index' => 'Вывод на главную?',
            'description' => 'Описание для главной',
            'color' => 'Цвет шапки',
            'theme' => 'Тема',
            'text_color' => 'Цвет текста в шапке',
        ];
    }
}

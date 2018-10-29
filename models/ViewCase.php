<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "view_case".
 *
 * @property int $id
 * @property string $one
 * @property string $two
 * @property string $three
 * @property string $four
 * @property string $five
 * @property string $six
 * @property string $seven
 * @property string $eight
 * @property string $nine
 * @property string $ten
 */
class ViewCase extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'view_case';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten'], 'required'],
            [['one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'one' => 'One',
            'two' => 'Two',
            'three' => 'Three',
            'four' => 'Four',
            'five' => 'Five',
            'six' => 'Six',
            'seven' => 'Seven',
            'eight' => 'Eight',
            'nine' => 'Nine',
            'ten' => 'Ten',
        ];
    }
}

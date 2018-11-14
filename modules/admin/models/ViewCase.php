<?php

namespace app\modules\admin\models;

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
 * @property string $eleven
 * @property string $twelve
 * @property string $thirteen
 * @property string $fourteen
 * @property string $fifteen
 * @property string $sixteen
 * @property string $seventeen
 * @property string $eighteen
 * @property string $nineteen
 * @property string $twenty
 * @property string $name
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
            [['trim'], 'required'],
            [['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20'], 'string'],
            [['name', 'another', 'trim'], 'string', 'max' => 255],
        ];
    }


    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            '1' => 'One',
            '2' => 'Two',
            '3' => 'Three',
            '4' => 'Four',
            '5' => 'Five',
            '6' => 'Six',
            '7' => 'Seven',
            '8' => 'Eight',
            '9' => 'Nine',
            '10' => 'Ten',
            '11' => 'Eleven',
            '12' => 'Twelve',
            '13' => 'Thirteen',
            '14' => 'Fourteen',
            '15' => 'Fifteen',
            '16' => 'Sixteen',
            '17' => 'Seventeen',
            '18' => 'Eighteen',
            '19' => 'Nineteen',
            '20' => 'Twenty',
            'name' => 'Name',
            'another' => 'Another',
            'trim' => 'Порядок',
        ];
    }
}

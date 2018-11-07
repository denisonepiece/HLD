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
//            [['one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten', 'eleven', 'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen', 'twenty', 'name'], 'required'],
            [['one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten', 'eleven', 'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen', 'twenty'], 'string'],
            [['name'], 'string', 'max' => 255],
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
            'eleven' => 'Eleven',
            'twelve' => 'Twelve',
            'thirteen' => 'Thirteen',
            'fourteen' => 'Fourteen',
            'fifteen' => 'Fifteen',
            'sixteen' => 'Sixteen',
            'seventeen' => 'Seventeen',
            'eighteen' => 'Eighteen',
            'nineteen' => 'Nineteen',
            'twenty' => 'Twenty',
            'name' => 'Name',
        ];
    }
}

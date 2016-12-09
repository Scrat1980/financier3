<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "house_level".
 *
 * @property integer $id
 * @property string $name
 * @property integer $cost_to_next
 * @property integer $time_to_next
 * @property string $current_picture
 */
class HouseLevel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'house_level';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cost_to_next', 'time_to_next'], 'integer'],
            [['name', 'current_picture'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'cost_to_next' => 'Cost To Next',
            'time_to_next' => 'Time To Next',
            'current_picture' => 'Current Picture',
        ];
    }
}

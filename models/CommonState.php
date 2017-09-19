<?php

namespace c006\common\models;

use Yii;

/**
 * This is the model class for table "common_state".
 *
 * @property integer $id
 * @property integer $country_id
 * @property string $data
 * @property string $char2
 * @property string $char3
 */
class CommonState extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'common_state';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'country_id', 'data'], 'required'],
            [['id', 'country_id'], 'integer'],
            [['data'], 'string', 'max' => 65],
            [['char2'], 'string', 'max' => 2],
            [['char3'], 'string', 'max' => 3],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'country_id' => Yii::t('app', 'Country ID'),
            'data' => Yii::t('app', 'Data'),
            'char2' => Yii::t('app', 'Char2'),
            'char3' => Yii::t('app', 'Char3'),
        ];
    }
}

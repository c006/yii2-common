<?php

namespace c006\common\models;

use Yii;

/**
 * This is the model class for table "common_country".
 *
 * @property integer $id
 * @property string $data
 * @property string $char2
 * @property string $char3
 */
class CommonCountry extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'common_country';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['data', 'char2', 'char3'], 'required'],
            [['data'], 'string', 'max' => 100],
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
            'data' => Yii::t('app', 'Data'),
            'char2' => Yii::t('app', 'Char2'),
            'char3' => Yii::t('app', 'Char3'),
        ];
    }
}

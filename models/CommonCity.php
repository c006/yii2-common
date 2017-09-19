<?php

namespace c006\common\models;

use Yii;

/**
 * This is the model class for table "common_city".
 *
 * @property integer $id
 * @property integer $state_id
 * @property string $data
 */
class CommonCity extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'common_city';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['state_id', 'data'], 'required'],
            [['state_id'], 'integer'],
            [['data'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'state_id' => Yii::t('app', 'State ID'),
            'data' => Yii::t('app', 'Data'),
        ];
    }
}

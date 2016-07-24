<?php

namespace c006\common\models;

use Yii;

/**
 * This is the model class for table "common_postal_code".
 *
 * @property integer $id
 * @property integer $city_id
 * @property string $data
 * @property string $longitude
 * @property string $latitude
 */
class CommonPostalCode extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'common_postal_code';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'city_id', 'data'], 'required'],
            [['id', 'city_id'], 'integer'],
            [['longitude', 'latitude'], 'number'],
            [['data'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'city_id' => Yii::t('app', 'City ID'),
            'data' => Yii::t('app', 'Data'),
            'longitude' => Yii::t('app', 'Longitude'),
            'latitude' => Yii::t('app', 'Latitude'),
        ];
    }
}

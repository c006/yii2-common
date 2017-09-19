<?php
namespace c006\common\assets;

use c006\common\models\CommonCity;
use c006\common\models\CommonCountry;
use c006\common\models\CommonPostalCode;
use c006\common\models\CommonState;

class AppCommon
{

    static public function getAddress($postal_code, $country_id = 223)
    {
        $model_postal_code = self::getPostalCode($postal_code);
        $model_city        = self::getCity($model_postal_code['city_id']);
        $model_state       = self::getState($model_city['state_id']);
        $model_country     = self::getCountry($country_id);

        return [
            'country'     => $model_country['data'],
            'country_2'   => $model_country['char2'],
            'city'        => $model_city['data'],
            'state'       => $model_state['data'],
            'state_2'     => $model_state['char2'],
            'postal_code' => $model_postal_code['data'],
        ];
    }

    static public function getCountry($country_id)
    {
        return CommonCountry::find()
            ->where(['id' => $country_id])
            ->asArray()
            ->one();
    }

    static public function getState($state_id)
    {
        return CommonState::find()
            ->where(['id' => $state_id])
            ->asArray()
            ->one();
    }

    static public function getCity($city_id)
    {
        return CommonCity::find()
            ->where(['id' => $city_id])
            ->asArray()
            ->one();
    }


    static public function getPostalCode($postal_code)
    {
        return CommonPostalCode::find()
            ->where(['data' => $postal_code])
            ->asArray()
            ->one();
    }




}
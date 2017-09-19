<?php

namespace c006\common\controllers;

use c006\common\assets\AppCommon;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;


class CommonController extends Controller
{


    public function actionAddress()
    {
        $postal_code = Yii::$app->request->get('postal_code',  0);
        $country_id = Yii::$app->request->get('country_id',  0);

        return json_encode(AppCommon::getAddress($postal_code, $country_id));

    }


}

<?php
/**
 * Author: Nurmukhammadov Shakhrizod
 * date: 26.01.2021
 */


namespace api\modules\v1\controllers;

use Yii;
use yii\web\Controller;
use common\models\LoginForm;
class ProductController extends Controller
{
    public function actionIndex()
    {

    }
    public function actionLogin()
    {
//        \Yii::$app->response->format = \yii\web\Response:: FORMAT_JSON;
        return var_dump(Yii::$app->request->post());
    }
}
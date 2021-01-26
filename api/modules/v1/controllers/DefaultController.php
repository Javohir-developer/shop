<?php

namespace api\modules\v1\controllers;

use yii\web\Controller;

/**
 * Default controller for the `v1` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        \Yii::$app->response->format = \yii\web\Response:: FORMAT_JSON;
        return 'salom';
//        return $this->render('index');
    }
}

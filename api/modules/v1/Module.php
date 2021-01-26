<?php

namespace api\modules\v1;

use yii\filters\VerbFilter;
use yii\filters\auth\HttpBasicAuth;

/**
 * v1 module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'api\modules\v1\controllers';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
//        \Yii::$app->user->enableSession = false;
//        \Yii::$app->user->loginUrl = null;

        // custom initialization code goes here
    }

    public function behaviors()
    {
//        return [
//            'verbs' => [
//                'class' => VerbFilter::className(),
//                'actions' => [
//                    'delete' => ['POST'],
//                ],
//            ],
//            'corsFilter' => [
//                'class' => \yii\filters\Cors::className(),
//                'cors' => [
//                    'Access-Control-Request-Method' => ['POST', 'PUT','GET'],
//                    'Access-Control-Request-Headers' => ['*'],
//                    'Access-Control-Allow-Credentials' => true,
//                    'Access-Control-Max-Age' => 3600,
//                    'Access-Control-Expose-Headers' => ['X-Pagination-Current-Page'],
//                ],
//
//            ],
//        ];

        $behaviors = parent::behaviors();
        $behaviors['corsFilter'] = [
            'class' => \yii\filters\Cors::className(),
        ];
//        $behaviors['authenticator'] = [
//            'class' => HttpBasicAuth::className(),
//        ];
        return $behaviors;
    }
}

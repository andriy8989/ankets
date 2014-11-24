<?php

namespace app\modules\admin\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;

class DefaultController extends Controller
{
   public function behaviors()
    {
        if(isset(Yii::$app->user->identity->username)){
            $role = Yii::$app->user->identity->username;
        }else{
            $role = 'demo';
        }
        
        if($role != 'admin'){
            return [
                'access' => [
                    'class' => AccessControl::className(),

                    'rules' => [
                        [
                            'actions' => ['logout'],
                            'allow' => true,
                            'roles' => ['admin'],
                        ],
                    ],
                ],
            ];
        }else{
            return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],];
        }
    }
    public function actionIndex()
    {
        return $this->render('index',[
                'user_name' => '555',
            ]);
    }
}

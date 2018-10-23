<?php

namespace app\controllers;


use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\Contact;



class SiteController extends Controller
{

    public function init(){
        Yii::$app->view->params['contact'] = Contact::find()->one();
    }

    public function behaviors()
    {
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
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex() {

        return $this->render('index');
    }

    public function actionService() {

        return $this->render('service');
    }

    public function actionCase() {

        return $this->render('case');
    }

    public function actionProfile() {

        return $this->render('profile');
    }

    public function actionContact() {
//        $contact = Contact::findOne(['id' => 1]);

        return $this->render('contact', [
//            'contact' => $contact,
        ]);
    }


}

<?php

namespace app\controllers;


use app\models\Agency;
use Yii;
use yii\web\Controller;
use app\models\Contact;



class SiteController extends Controller
{

    public function init(){

        Yii::$app->view->params['contact'] = Contact::find()->asArray()->one();
        Yii::$app->view->params['agency'] = Agency::find()->asArray()->one();
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

    public function actionViewCase() {

        return $this->render('view-case');
    }

    public function actionContact() {

        $contact = Contact::find()->asArray()->one();

        return $this->render('contact', [
            'contact' => $contact,
        ]);
    }

}

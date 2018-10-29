<?php

namespace app\controllers;

use app\models\Agency;
use Yii;
use yii\web\Controller;
use app\models\Contact;
use app\models\Profile;
use app\models\TypeService;


class SiteController extends Controller
{

    public function init() {
        Yii::$app->view->params['contact'] = Contact::find()->asArray()->one();
        Yii::$app->view->params['agency'] = Agency::find()->asArray()->one();
    }

    public function actions() {
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
        $profile = Profile::find()->asArray()->where([
            'on_index' => 'y'
        ])->all();

        $type = TypeService::find()->indexBy('id')->asArray()->all();

        return $this->render('index', [
            'profile' => $profile,
            'type' => $type,
        ]);
    }

    public function actionService() {

        return $this->render('service');
    }

    public function actionCase() {
        $profile = Profile::find()->asArray()->indexBy('id')->all();

        return $this->render('case', [
            'profile' => $profile,
        ]);
    }

    public function actionViewCase($id) {
        $case = Profile::findOne([
            'id' => $id,
        ]);

        return $this->render('view-case', [
            'case' => $case,
        ]);
    }

    public function actionContact() {

        $contact = Contact::find()->asArray()->one();

        return $this->render('contact', [
            'contact' => $contact,
        ]);
    }

}

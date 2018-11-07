<?php

namespace app\controllers;

use app\models\Agency;
use app\models\Brif;
use app\models\Service;
use app\models\ViewCase;
use Yii;
use yii\web\Controller;
use app\models\Contact;
use app\models\Profile;
use app\models\TypeService;


class SiteController extends Controller
{

    public function init()
    {
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

    public function actionIndex()
    {
        $profile = Profile::find()->asArray()->where([
            'on_index' => 'y'
        ])->all();

        $blocks = Profile::find()->asArray()->where([
            'on_index' => 'y'
        ])->all();


        $type = TypeService::find()->indexBy('id')->asArray()->all();

        return $this->render('index', [
            'profile' => $profile,
            'type' => $type,
            'blocks' => $blocks,
        ]);
    }

    public function actionService()
    {
        $service = Service::find()->asArray()->one();

        return $this->render('service', [
            'service' => $service,
        ]);
    }

    public function actionCase()
    {
        $profile = Profile::find()->asArray()->indexBy('id')->all();
        $type = TypeService::find()->indexBy('id')->asArray()->all();

        return $this->render('case', [
            'profile' => $profile,
            'type' => $type,
        ]);
    }

    public function actionCaseList($id) {
        $this->layout = false;
        if($id == 0) {
            $profile = Profile::find()->all();
        } else {
        $profile = Profile::find()->where(['type_service_id' => $id])->orWhere(['type_service_id' => 2])->all();
        }
        $type = TypeService::find()->indexBy('id')->asArray()->all();

        return $this->render('case-list', [
            'profile' => $profile,
            'type' => $type,
        ]);
    }

    public function actionViewCase($id)
    {
        $case = Profile::findOne([
            'id' => $id,
        ]);
        $type = TypeService::find()->indexBy('id')->asArray()->all();
        $view = ViewCase::findOne([
            'id' => $case['view_case_id'],
        ]);

        return $this->render('view-case', [
            'case' => $case,
            'type' => $type,
            'view' => $view,
        ]);
    }

    public function actionContact()
    {

        $contact = Contact::find()->asArray()->one();

        return $this->render('contact', [
            'contact' => $contact,
        ]);
    }

    public function actionBrif()
    {

        $brif = new Brif();
        if ($brif->load(Yii::$app->request->post())) {
            if ($brif->save()) {
                Yii::$app->session->setFlash('success', 'Ваша завяка принята. Мы скоро с вами свяжемся:)');
                return $this->refresh();
            } else {
                Yii::$app->session->setFlash('error', 'Возникила ошибка при отправке завяки. Позвоните нам: +7 388-22 2-04-03');
            }
        }
        return $this->render('brif');
    }

}

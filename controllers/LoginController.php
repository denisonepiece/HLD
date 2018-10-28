<?php
/**
 * Created by PhpStorm.
 * User: Absurd
 * Date: 26.10.2018
 * Time: 15:54
 */

namespace app\controllers;

use Yii;
use app\models\LoginForm;
use yii\web\Controller;


class LoginController extends Controller
{

    public $layout = 'login';

    public function actionLogin() {


        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

}
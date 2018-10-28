<?php

namespace app\modules\admin\controllers;


use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use app\models\LoginForm;
use yii\filters\VerbFilter;


class AdminController extends AppAdminController
{

    public function actionIndex()
    {
        return $this->render('index');
    }
}

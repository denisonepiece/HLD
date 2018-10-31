<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Вход';
?>
<main>
    <br><br><br><br>
    <section class="section start-sec">
        <div class="container-fluid">
            <h2 class="heading">Вход</h2>
            <br>
            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
            ]);
            ?>
            <div class="form-container">
                <form>
                    <div class="form-group">
                        <input type="text" required name="LoginForm[username]">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Логин</label>
                    </div>
                    <div class="form-group">
                        <input type="password" required name="LoginForm[password]">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Пароль</label>
                    </div>
                    <div class="checkbox-custom-v1">
                        <div class="checkbox-custom-v1__position">
                            <input type="checkbox" name="LoginForm[rememberMe]" id="checkbox-button-opt-one" class="hide-checkbox" >
                            <label for="checkbox-button-opt-one">Запомнить</label>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <?= Html::submitButton('Войти', ['class' => 'block-btn one-block-btn', 'style' => 'border: 0px;']) ?>
                    </div>
                </form>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </section>
</main>

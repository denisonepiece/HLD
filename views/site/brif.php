<?php

use app\assets\BrifAsset;
use yii\widgets\ActiveForm;

//$this->registerJs("var rellax = new Rellax('.rellax');");

$this->title = 'HLD agency';
BrifAsset::register($this);
?>
<main>
    <div class="modal--alert">
        <div class="modal__blur <?php if(Yii::$app->session->hasFlash('success')): ?>active<?php endif; ?>"></div>
        <div class="modal--alert__wrapper <?php if(Yii::$app->session->hasFlash('success')): ?>active<?php endif; ?> ">
            <div class="modal--alert__inner">
                <div class="modal--allert__header header-block tog-underCont v3">
                    <h5 class="heading">Превосходно!</h5>
                </div>
                <div class="modal--allert__content">
                    <p class="p-style p-v1 section__inner-content tog-underElements v1">Мы уже получили Вашу заявку и в скором времени обязательно свяжемся с Вами! Улыбайтесь ;)</p>
                </div>
                <div class="modal--allert__footer">
                    <a class="block-btn one-block-btn v2 modal-open">Закрыть</a>
                </div>
            </div>
        </div>
    </div>
    <section class="section start-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7 col-sm col-xs">
                    <div class="header-block tog-underCont">
                        <h2 class="heading"><?php if(Yii::$app->session->hasFlash('error')): ?>Возникли ошибки с отправкой, позвоните нам! <?php else: ?>Готовы посотрудничать? <?php endif; ?></h2>
                        <p class="p-style p-v1 header-block__p tog-underCont">Оставьте заявку на оказание услуг, либо свяжитесь с нами, пообщаемся напрямую и сэкономим время:  <br>8 (38822) 2-04-03</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-v1_1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="header-block tog-underCont v1">
                        <h5 class="heading">Что требуется</h5>
                    </div>
                </div>
                <?php ActiveForm::begin([
                        'id' => 'Brif'
                ]) ?>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="checkbox-custom-v1">
                        <div class="checkbox-custom-v1__position">
                            <input type="checkbox" name="Brif[site]" id="checkbox-button-opt-one" class="hide-checkbox" value="1">
                            <label for="checkbox-button-opt-one">Разработка сайта</label>
                        </div>
                        <div class="checkbox-custom-v1__position">
                            <input type="checkbox" name="Brif[design]" id="checkbox-button-opt-two" class="hide-checkbox" value="1">
                            <label for="checkbox-button-opt-two">Дизайн</label>
                        </div>
                        <div class="checkbox-custom-v1__position">
                            <input type="checkbox" name="Brif[smm]" id="checkbox-button-opt-three" class="hide-checkbox" value="1">
                            <label for="checkbox-button-opt-three">SMM</label>
                        </div>
                        <div class="checkbox-custom-v1__position">
                            <input type="checkbox" name="Brif[ads]" id="checkbox-button-opt-four" class="hide-checkbox" value="1">
                            <label for="checkbox-button-opt-four">Контекстная реклама</label>
                        </div>
                        <div class="checkbox-custom-v1__position">
                            <input type="checkbox" name="Brif[tech_sup]" id="checkbox-button-opt-five" class="hide-checkbox" value="1">
                            <label for="checkbox-button-opt-five">Техническая поддержка</label>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="section section-v1_1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="header-block tog-underCont v1">
                        <h5 class="heading">Подробнее о задаче</h5>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-container">
                            <div class="form-group none-mrg">
                                <textarea resize='none' name="Brif[about]" required></textarea>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Описание</label>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="header-block tog-underCont v1">
                        <h5 class="heading">Контактные данные</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid form-container">
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <input type="text" required placeholder="ФИО" name="Brif[name]">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Представьтесь, пожалуйста</label>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <input type="text" required placeholder="Какую компанию Вы представляете?" name="Brif[company]">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Компания</label>
                        </div>
                    </div>
                </div>
                <div class="row section__inner-content tog-underElements v2">
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <input type="text" required placeholder="Ваш номер телефона" name="Brif[telephone]">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Телефон</label>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <input type="text" required placeholder="Оставьте свой e-mail" name="Brif[email]">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>E-mail</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <?=\yii\helpers\Html::submitButton('Отправить заявку', [
                                'class' => 'block-btn one-block-btn v2',
                                'style' => 'border: 0px;',
                        ]) ?>
                    </div>
                </div>
            <?php ActiveForm::end() ?>
        </div>
    </section>
</main>
<?php

use app\assets\BrifAsset;
use yii\helpers\Url;

//$this->registerJs("var rellax = new Rellax('.rellax');");

$this->title = 'HLD agency';
BrifAsset::register($this);
?>
<main>
    <section class="section start-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7 col-sm col-xs">
                    <div class="header-block tog-underCont">
                        <h2 class="heading">Готовы посотрудничать?</h2>
                        <p class="p-style p-v1 header-block__p tog-underCont">Оставьте заявку на оказание услуг, либо свяжитесь с нами, пообщаемся напрямую и сэкономим время: 8 (38822) 2-04-03</p>
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
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="checkbox-custom-v1">
                        <div class="checkbox-custom-v1__position">
                            <input type="checkbox" name="checkbox-option" id="checkbox-button-opt-one" class="hide-checkbox" value="Option 1">
                            <label for="checkbox-button-opt-one">Разработка сайта</label>
                        </div>
                        <div class="checkbox-custom-v1__position">
                            <input type="checkbox" name="checkbox-option" id="checkbox-button-opt-two" class="hide-checkbox" value="Option 2">
                            <label for="checkbox-button-opt-two">Дизайн</label>
                        </div>
                        <div class="checkbox-custom-v1__position">
                            <input type="checkbox" name="checkbox-option" id="checkbox-button-opt-three" class="hide-checkbox" value="Option 3">
                            <label for="checkbox-button-opt-three">SMM</label>
                        </div>
                        <div class="checkbox-custom-v1__position">
                            <input type="checkbox" name="checkbox-option" id="checkbox-button-opt-four" class="hide-checkbox" value="Option 4">
                            <label for="checkbox-button-opt-four">Контекстная реклама</label>
                        </div>
                        <div class="checkbox-custom-v1__position">
                            <input type="checkbox" name="checkbox-option" id="checkbox-button-opt-five" class="hide-checkbox" value="Option 5">
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
                        <form>
                            <div class="form-group none-mrg">
                                <textarea resize: none></textarea>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Описание</label>
                            </div>
                        </form>
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
            <form action="">
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <input type="text" required placeholder="ФИО">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Представьтесь, пожалуйста</label>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <input type="text" required placeholder="Какую компанию Вы представляете?">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Компания</label>
                        </div>
                    </div>
                </div>
                <div class="row section__inner-content tog-underElements v2">
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <input type="text" required placeholder="Ваш номер телефона">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Телефон</label>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <input type="text" required placeholder="Оставьте свой e-mail">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>E-mail</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <a href="#" class="block-btn one-block-btn v2">Отправить заявку</a>
                    </div>
                </div>
            </form>
        </div>
    </section>
</main>
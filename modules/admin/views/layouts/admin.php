<?php

use yii\helpers\Url;
use yii\helpers\Html;
use app\assets\AdminAsset;

AdminAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>
    <div class="wrapper">
        <div class="wrapper-content">
            <header>
                <nav>
                    <div class="navigation-wrp">
                        <div class="navigation-inner">
                            <div class="responsive-navigation">
                                <div class="responsive-navigation__logo"></div>
                                <div class="responsive-navigation__humburger">
                                    <span></span>
                                </div>
                            </div>
                            <div class="navigation">
                                <div class="navigation-left">
                                    <a href="<?=Url::to(['/site/index/']);?>" class="logo">
                                        <div class="logo__emblem"></div>
                                        <div class="logo__text-elements"></div>
                                    </a>
                                </div>
                                <div class="navigation-right">
                                    <div class="link-nav">
                                        <ul>
                                            <!-- link-nav__active присваиваем к ссылке активному разделу -->
                                            <li><a href="<?=Url::to(['/admin/admin/index']);?>" <?php if($_SERVER[REQUEST_URI] == '/') echo 'class = "link-nav__active"' ?>>Компания</a></li>
                                            <li><a href="<?=Url::to(['/admin//']);?>" <?php if($_SERVER[REQUEST_URI] == '/service') echo 'class = "link-nav__active"' ?>>Услуги</a></li>
                                            <li><a href="<?=Url::to(['/site/case/']);?>" <?php if($_SERVER[REQUEST_URI] == '/case') echo 'class = "link-nav__active"' ?>>Проекты</a></li>
                                            <li><a href="<?=Url::to(['/site/contact/']);?>" <?php if($_SERVER[REQUEST_URI] == '/contact') echo 'class = "link-nav__active"' ?>>Контакты</a></li>
                                            <li><a href="<?=Url::to(['/site/logout/']);?>" <?php if($_SERVER[REQUEST_URI] == '/contact') echo 'class = "link-nav__active"' ?>>Выход</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
            <?= $content ?>
        </div>
    </div>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>
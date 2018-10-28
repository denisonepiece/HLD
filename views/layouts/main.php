<?php

use yii\helpers\Url;
use yii\helpers\Html;

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
                                            <li><a href="<?=Url::to(['/site/index/']);?>" <?php if($_SERVER[REQUEST_URI] == '/') echo 'class = "link-nav__active"' ?>>Компания</a></li>
                                            <li><a href="<?=Url::to(['/site/service/']);?>" <?php if($_SERVER[REQUEST_URI] == '/service') echo 'class = "link-nav__active"' ?>>Услуги</a></li>
                                            <li><a href="<?=Url::to(['/site/case/']);?>" <?php if($_SERVER[REQUEST_URI] == '/case') echo 'class = "link-nav__active"' ?>>Проекты</a></li>
                                            <li><a href="<?=Url::to(['/site/contact/']);?>" <?php if($_SERVER[REQUEST_URI] == '/contact') echo 'class = "link-nav__active"' ?>>Контакты</a></li>
                                        </ul>
                                    </div>
                                    <div class="info-nav">
                                        <div class="info-nav__tel">
                                            <div>+7 388-22 <span>2-04-03</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <?php
                if($_SERVER[REQUEST_URI] == '/') {
                       echo '<div class="parallax-elem">
                            <div class="parallax-elem__inner">
                                <div class="parallax-elem__artist a rellax" data-rellax-speed="-5.9"></div>
                                <div class="parallax-elem__artist b rellax" data-rellax-speed="-3"></div>
                                <div class="parallax-elem__artist c rellax" data-rellax-speed="1"></div>
                                <div class="parallax-elem__artist d rellax" data-rellax-speed="3"></div>
                                <div class="parallax-elem__artist e rellax" data-rellax-speed="-4"></div>
                                <div class="parallax-elem__artist f rellax" data-rellax-speed="-2"></div>
                                <div class="parallax-elem__artist g rellax" data-rellax-speed="-3"></div>
                                <div class="parallax-elem__artist u rellax" data-rellax-speed="2"></div>
                                <div class="parallax-elem__artist k rellax" data-rellax-speed="-4"></div>
                                <div class="parallax-elem__artist l rellax" data-rellax-speed="-5"></div>
                                <div class="parallax-elem__artist o rellax" data-rellax-speed="-3"></div>
                                <div class="parallax-elem__artist p rellax" data-rellax-speed="-1"></div>
                            </div>
                        </div>
                        <div class="intro">
                            <div class="intro__header">
                                <h1>'.$this->params['agency']['intro'].'</h1>
                            </div>
                        </div>';
                }
                ?>
            </header>
            <?= $content ?>
        </div>
        <footer>
            <div class="footer p-style p-v3" itemscope itemtype="http://schema.org/Organization">
                <div class="footer__left-block footer-block">
                    <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                        <span itemprop="streetAddress"><?= $this->params['contact']['location'] ?></span><br/>
                        <span itemprop="addressLocality"><?= $this->params['contact']['address'] ?></span>
                    </div>
                    <span class="footer__tel" itemprop="telephone"><?= $this->params['contact']['telephone'] ?></span>
                </div>
                <div class="footer__middle-block footer-block">
                    <div itemprop="email"><?= $this->params['contact']['email'] ?></div>
                    <div>
                        <a href="<?= $this->params['contact']['instagram'] ?>" target="_blank">
                            instagram
                            <span>
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                              <g>
                                 <path d="M17.2,0.8H6.9c-3.5,0-6.3,2.8-6.3,6.3v10.3c0,3.5,2.8,6.3,6.3,6.3h10.3c3.5,0,6.3-2.8,6.3-6.3V7.1 C23.5,3.6,20.7,0.8,17.2,0.8z M21.5,17.4c0,2.4-1.9,4.3-4.3,4.3H6.9c-2.4,0-4.3-1.9-4.3-4.3V7.1c0-2.4,1.9-4.3,4.3-4.3h10.3 c2.4,0,4.3,1.9,4.3,4.3L21.5,17.4L21.5,17.4z"/>
                                 <path d="M12.1,6.3c-3.3,0-5.9,2.7-5.9,5.9c0,3.3,2.7,5.9,5.9,5.9s5.9-2.7,5.9-5.9C18,9,15.3,6.3,12.1,6.3z M12.1,16.1 c-2.1,0-3.9-1.7-3.9-3.9c0-2.1,1.7-3.9,3.9-3.9s3.9,1.7,3.9,3.9C15.9,14.4,14.2,16.1,12.1,16.1z"/>
                                 <path d="M18.2,4.6c-0.4,0-0.8,0.2-1.1,0.4c-0.3,0.3-0.4,0.7-0.4,1.1c0,0.4,0.2,0.8,0.4,1.1c0.3,0.3,0.7,0.4,1.1,0.4 c0.4,0,0.8-0.2,1.1-0.4c0.3-0.3,0.4-0.7,0.4-1.1c0-0.4-0.2-0.8-0.4-1.1C19,4.8,18.6,4.6,18.2,4.6z"/>
                              </g>
                           </svg>
                        </span>
                            hld.agency
                        </a>
                    </div>
                    <div>
                        <a href="<?= $this->params['contact']['vk'] ?>" target="_blank">
                            vk
                            <span>
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 18">
                              <g>
                                 <path d="M25.9,13.8c-0.8-0.9-1.7-1.7-2.6-2.6c-0.8-0.8-0.8-1.2-0.2-2.1c0.7-1,1.4-1.9,2.1-2.8c0.6-0.9,1.3-1.8,1.6-2.9 c0.2-0.7,0-1-0.7-1.1c-0.1,0-0.2,0-0.4,0l-4.1,0c-0.5,0-0.8,0.2-1,0.7c-0.2,0.6-0.5,1.2-0.8,1.8c-0.7,1.3-1.4,2.6-2.4,3.7 c-0.2,0.2-0.5,0.5-0.9,0.4c-0.5-0.2-0.6-1-0.6-1.2l0-4.8c-0.1-0.7-0.2-1-0.9-1.1l-4.3,0c-0.6,0-0.9,0.2-1.2,0.6 C9.5,2.7,9.5,2.8,9.8,2.9C10.6,3,11,3.5,11.1,4.2c0.2,1.1,0.2,2.3,0.1,3.4c0,0.3-0.1,0.7-0.2,1c-0.2,0.5-0.5,0.6-1,0.3 c-0.4-0.3-0.7-0.7-1-1c-1-1.5-1.9-3-2.5-4.7c-0.2-0.5-0.5-0.8-1-0.8c-1.2,0-2.5,0-3.7,0c-0.7,0-1,0.4-0.7,1.1 c1.4,3,2.9,5.9,4.8,8.6c1,1.4,2.2,2.6,3.7,3.4c1.7,1,3.5,1.3,5.4,1.2c0.9,0,1.2-0.3,1.2-1.2c0-0.6,0.1-1.2,0.4-1.8 c0.3-0.5,0.7-0.6,1.3-0.3c0.3,0.2,0.5,0.4,0.7,0.6c0.5,0.6,1,1.1,1.5,1.7c0.7,0.7,1.4,1.1,2.4,1l3.8,0c0.6,0,0.9-0.8,0.6-1.5 C26.6,14.7,26.3,14.3,25.9,13.8z"/>
                              </g>
                           </svg>
                        </span>
                            hld_agency
                        </a>
                    </div>
                </div>
                <div class="footer__right-block footer-block">
                    <div>
                        <a href="#" class="block-btn one-block-btn v3">Отправить заявку</a>
                    </div>
                    <span class="p-v4">© Hypelab digital agency</span>
                </div>
            </div>
        </footer>
    </div>
    <?php $this->endBody() ?>
    </body>
    </html>
    <?php $this->endPage() ?>
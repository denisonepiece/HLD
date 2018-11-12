<?php

use app\assets\ViewCaseAsset;
use yii\helpers\Url;
use yii\helpers\Html;

$this->title = 'Проекты';
ViewCaseAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <meta name="description" content="HLD — студия разработки практичных интернет-решений.">
    <meta name="keywords"
          content="hld, hypelab digital, разработка сайтов, разработка сервисов, разработка порталов, сибирь, алтай">

    <link rel="shortcut icon" href="img/favicon/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/favicon/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrapper">
    <div class="wrapper-content">
        <header>
            <nav>
                <div class="navigation-wrp cd-auto-hide-header" style="background: <?=$case['color']?>">
                    <div class="navigation-inner">
                        <div class="responsive-navigation">
                            <a href="<?= Url::to(['/site/index/']); ?>">
                                <div class="responsive-navigation__logo" <?php if($case['theme'] == 'dark') echo 'style = "background: url(../img/logo-rev.svg) no-repeat right;" ' ?>></div>
                            </a>
                            <div class="responsive-navigation__humburger">
                                <span></span>
                            </div>
                        </div>
                        <div class="navigation" style="background-color: <?= $case['color'] ?>">
                            <div class="navigation-left">
                                <a href="<?= Url::to(['/site/index/']); ?>" class="logo">
                                    <div class="logo__text-elements" <?php if($case['theme'] == 'dark') echo 'style = "background: url(../img/logo-rev.svg) no-repeat right;" ' ?>></div>
                                </a>
                            </div>
                            <div class="navigation-right">
                                <div class="link-nav <?php if($case['theme'] == 'dark') echo 'link-nav-rev';  ?>" >
                                    <ul>
                                        <li>
                                            <a href="<?= Url::to(['/site/index/']); ?>">Компания</a>
                                        </li>
                                        <li>
                                            <a href="<?= Url::to(['/site/service/']); ?>">Услуги</a>
                                        </li>
                                        <li>
                                            <a href="<?= Url::to(['/site/case/']); ?>"
                                               class="link-nav__active">Проекты</a>
                                        </li>
                                        <li>
                                            <a href="<?= Url::to(['/site/contact/']); ?>">Контакты</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="info-nav">
                                    <div class="info-nav__tel" <?php if($case['theme'] == 'dark') echo 'style="color: white"'; ?>>
                                        <div><?= $this->params['contact']['telephone'] ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <main>
            <section class="section start-sec v2 case-intro" style="background-color: <?= $case['color'] ?>; color: <?= $case['text_color'] ?> ;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-sm-4 col-xs-12">
                            <div class="case-intro__client-info-left">
                                <div class="case-intro__block-inner">
                                    <div class="case-intro__logo"
                                         style="background-image: url(/img/content/portfolio/<?= $case['logo'] ?>);">
                                    </div>
                                    <div class="case-intro__label">
                                        <span class="label"><?= $type[$case['type_service_id']]['type'] ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-8 col-xs-12">
                            <div class="case-intro__client-info-right">
                                <div class="case-intro__block-inner">
                                    <div class="case-intro__desc-block">
                                        <div class="desc-header">
                                            <h5>Клиент</h5>
                                        </div>
                                        <div class="desc-text">
                                            <p class="p-style p-v1"><?= $case['article'] ?></p>
                                        </div>
                                    </div>
                                    <div class="case-intro__desc-block">
                                        <div class="desc-header">
                                            <h5>Задача</h5>
                                        </div>
                                        <div class="desc-text">
                                            <div>
                                                <p class="p-style p-v1"><?= $case['task'] ?></p>
                                            </div>
                                            <a class="stock-link"
                                               href="http://<?= $case['link'] ?>"><?= $case['link'] ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?= $view['one']; ?>
            <?= $view['two']; ?>
            <?= $view['three']; ?>
            <?= $view['four']; ?>
            <?= $view['five']; ?>
            <?= $view['six']; ?>
            <?= $view['seven']; ?>
            <?= $view['eight']; ?>
            <?= $view['nine']; ?>
            <?= $view['ten']; ?>
            <?= $view['eleven']; ?>
            <?= $view['twelve']; ?>
            <?= $view['thirteen']; ?>
            <?= $view['fourteen']; ?>
            <?= $view['fifteen']; ?>
            <?= $view['sixteen']; ?>
            <?= $view['seventeen']; ?>
            <?= $view['eighteen']; ?>
            <?= $view['nineteen']; ?>
            <?= $view['twenty']; ?>
            <section class="section section-v1">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md col-sm col-xs">
                            <a href="<?= \yii\helpers\Url::to(['site/view-case', 'id' => $idid]) ?>"
                               class="link-btn one-link-btn">
                                <span>Следующий кейс</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60.9 23">
                                    <polygon
                                            points="47.4,1.3 45.7,3.5 54.4,10.2 1.5,10.2 1.5,12.9 54.4,12.9 45.7,19.6 47.4,21.8 60.6,11.5 "/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md col-sm col-xs">
                            <div class="header-block tog-underCont v2">
                                <h5 class="heading">Другие работы</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md col-sm col-xs">
                            <div class="tiles-wrap section__inner-content tog-underElements">
                                <?php foreach ($another as $case): ?>
                                    <a href="<?= \yii\helpers\Url::to(['site/view-case', 'id' => $case['id']]) ?>"
                                       class="tiles-wrap__tile" data-tilt data-tilt-scale="1.06" data-tilt-speed="500"
                                       data-tilt-max="10">
                                        <div class="tiles-wrap__tile-inner">
                                            <div class="tile-inner__overlay">
                                                <div class="tile-content">
                                                    <div>
                                                        <h5><?= $case['article'] ?></h5>
                                                    </div>
                                                    <div>
                                                        <span class="label"><?= $type[$case['type_service_id']]['type'] ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tiles-wrap__bg"
                                                 style="background: url(img/content/portfolio/<?= $case['image'] ?>); background-size: cover;background-position: center center; background-repeat: no-repeat;"></div>
                                        </div>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <script src="libs/vanilla-tilt.min.js"></script>
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
                        hld.agency
                    </a>
                </div>
            </div>
            <div class="footer__right-block footer-block">
                <div>
                    <a href="<?= Url::to(['site/brif']) ?>" class="block-btn one-block-btn v3">Отправить заявку</a>
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


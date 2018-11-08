<?php

use app\assets\ViewCaseAsset;

$this->title = 'Проекты';
ViewCaseAsset::register($this);
?>
<main>
    <section class="section start-sec v2 case-intro" style="background-color: <?= $case['color'] ?>; color: ;">
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
                                    <a class="stock-link" href="http://<?= $case['link'] ?>"><?= $case['link'] ?></a>
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

<?php

use app\assets\IndexAsset;
use yii\helpers\Url;

//$this->registerJs("var rellax = new Rellax('.rellax');");

$this->title = 'HLD agency';
IndexAsset::register($this);
?>

<main>
    <section class="section section-v1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm col-xs">
                    <div class="header-block tog-underCont">
                        <h2 class="heading">HLD - digital агенство</h2>
                        <p class="p-style p-v1"><?= $this->params['agency']['about'] ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-v1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm col-xs">
                    <div class="header-block tog-underCont">
                        <h2 class="heading">Направления</h2>
                        <p class="p-style p-v1 header-block__p tog-underCont"><?= $this->params['agency']['dir_about'] ?></p>
                    </div>
                </div>
            </div>
            <div class="row section__inner-content tog-underElements">
                <div class="col-md-4 col-sm-6 col-xs-12 list-count">
                    <div class="header-block tog-underCont">
                        <h5 class="heading">Веб-разработка</h5>
                    </div>
                    <ul class="list-content list-togLine">
                        <?php
                        $pieces = explode(',', $this->params['agency']['dir_web']);
                        foreach($pieces as $piece) {
                        ?>
                        <li>
                            <p class="p-v2"><?= $piece ?></p>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 list-count">
                    <div class="header-block tog-underCont">
                        <h5 class="heading">Dизайн</h5>
                    </div>
                    <ul class="list-content list-togLine">
                        <?php
                        $pieces = explode(',', $this->params['agency']['dir_brand']);
                        foreach($pieces as $piece) {
                            ?>
                            <li>
                                <p class="p-v2"><?= $piece ?></p>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 list-count">
                    <div class="header-block tog-underCont">
                        <h5 class="heading">Поддержка</h5>
                    </div>
                    <ul class="list-content list-togLine">
                        <?php
                        $pieces = explode(',', $this->params['agency']['dir_help']);
                        foreach($pieces as $piece) {
                            ?>
                            <li>
                                <p class="p-v2"><?= $piece ?></p>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md col-sm col-xs">
                    <a href="<?=Url::to(['/site/service/']); ?>" class="link-btn one-link-btn">
                        <span>Подробнее об услугах</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60.9 23">
                            <polygon points="47.4,1.3 45.7,3.5 54.4,10.2 1.5,10.2 1.5,12.9 54.4,12.9 45.7,19.6 47.4,21.8 60.6,11.5 "/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-v1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm col-xs">
                    <div class="header-block tog-underCont">
                        <h2 class="heading">Наши работы</h2>
                        <p class="p-style p-v1 header-block__p  tog-underCont"><?= $this->params['agency']['case_about'] ?></p>
                    </div>
                </div>
            </div>
            <div class="row section__inner-content tog-underElements none-mobile">
                <div class="col-md col-sm col-xs">
                    <div class="slider-oneVers" id="slick-1">
                        <div class="slider-oneVers__inner">
                            <div class="slider-oneVers__left-block">
                                <div class="slider-oneVers__img-slides">
                                    <?php foreach ($profile as $img): ?>
                                    <div class="slider-oneVers__slide" style="background: url(/img/content/portfolio/<?=$img['image'] ?>); background-size: cover;background-position: center center; background-repeat: no-repeat;"></div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="slider-oneVers__right-block">
                                <div class="slider-oneVers__content-slides">
                                    <?php foreach ($profile as $profile): ?>
                                    <div class="slider-oneVers__desc">
                                        <div class="slider-oneVers__top-block">
                                            <div class="slider-oneVers__header-desc">
                                                <h4><?=$profile['article'] ?></h4>
                                            </div>
                                            <div class="slider-oneVers__text-desc">
                                                <p class="p-style p-1"><?=$profile['description'] ?></p>
                                            </div>
                                            <div class="slider-oneVers__label-desc">
                                                <span class="label"><?=$type[$profile['type_service_id']]['type'] ?></span>
                                            </div>
                                        </div>
                                        <div class="slider-oneVers__bottom-block">
                                            <a href="<?=\yii\helpers\Url::to(['site/view-case', 'id' => $profile['id']]) ?>" class="link-btn two-link-btn">
                                                <span>Смотреть кейс</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60.9 23">
                                                    <polygon points="47.4,1.3 45.7,3.5 54.4,10.2 1.5,10.2 1.5,12.9 54.4,12.9 45.7,19.6 47.4,21.8 60.6,11.5 "/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                                <div class="slider-progress">
                                    <div class="progress"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Плитка портфолио (отображается только на моб.устройствах) -->
        <div class="container-fluid vis-mobile">
            <div class="row">
                <div class="col-md col-sm col-xs">
                    <div class="tiles-wrap section__inner-content tog-underElements">
                        <a href="#" class="tiles-wrap__tile" data-tilt data-tilt-scale="1.06" data-tilt-speed="500" data-tilt-max="17">
                            <div class="tiles-wrap__tile-inner">
                                <div class="tile-inner__overlay">
                                    <div class="tile-content">
                                        <div>
                                            <h5>Хан Алтай</h5>
                                        </div>
                                        <div><span class="label">Разработка сайта</span></div>
                                    </div>
                                </div>
                                <div class="tiles-wrap__bg" style="background: url(/img/content/portfolio/2.jpg); background-size: cover;background-position: center center; background-repeat: no-repeat;"></div>
                            </div>
                        </a>
                        <a href="#" class="tiles-wrap__tile" data-tilt data-tilt-scale="1.06" data-tilt-speed="500" data-tilt-max="17">
                            <div class="tiles-wrap__tile-inner">
                                <div class="tile-inner__overlay">
                                    <div class="tile-content">
                                        <div>
                                            <h5>Тортодельня</h5>
                                        </div>
                                        <div><span class="label">Разработка сайта</span></div>
                                    </div>
                                </div>
                                <div class="tiles-wrap__bg" style="background: url(/img/content/portfolio/3.jpg); background-size: cover;background-position: center center; background-repeat: no-repeat;"></div>
                            </div>
                        </a>
                        <a href="#" class="tiles-wrap__tile" data-tilt data-tilt-scale="1.06" data-tilt-speed="500" data-tilt-max="17">
                            <div class="tiles-wrap__tile-inner">
                                <div class="tile-inner__overlay">
                                    <div class="tile-content">
                                        <div>
                                            <h5>Решиональный центр инжиниринга</h5>
                                        </div>
                                        <div><span class="label">Разработка сайта</span></div>
                                    </div>
                                </div>
                                <div class="tiles-wrap__bg" style="background: url(/img/content/portfolio/2.jpg); background-size: cover;background-position: center center; background-repeat: no-repeat;"></div>
                            </div>
                        </a>
                        <a href="#" class="tiles-wrap__tile" data-tilt data-tilt-scale="1.06" data-tilt-speed="500" data-tilt-max="17">
                            <div class="tiles-wrap__tile-inner">
                                <div class="tile-inner__overlay">
                                    <div class="tile-content">
                                        <div>
                                            <h5>H5 Заголовок</h5>
                                        </div>
                                        <div><span class="label">Разработка сайта</span></div>
                                    </div>
                                </div>
                                <div class="tiles-wrap__bg" style="background: url(/img/content/portfolio/3.jpg); background-size: cover;background-position: center center; background-repeat: no-repeat;"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md col-sm col-xs">
                    <a href="<?=Url::to(['/site/case/']); ?>" class="link-btn one-link-btn">
                        <span>Смотреть все работы</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60.9 23">
                            <polygon points="47.4,1.3 45.7,3.5 54.4,10.2 1.5,10.2 1.5,12.9 54.4,12.9 45.7,19.6 47.4,21.8 60.6,11.5 "/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php

use app\assets\CaseAsset;

CaseAsset::register($this);
?>

<main>
    <section class="section start-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm col-xs">
                    <div class="header-block tog-underCont">
                        <h1 class="heading hGray-v2">Работы</h1>
                        <div class="link-nav custom-v1">
                            <ul>
                                <!-- link-nav__active присваиваем к ссылке активному разделу -->
                                <li><a href="#" class="link-nav__active">Сайты</a></li>
                                <li><a href="#">Дизайн</a></li>
                                <li><a href="#">Поддержка</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-v1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md col-sm col-xs">
                    <div class="tiles-wrap section__inner-content tog-underElements">
                        <a href="#" class="tiles-wrap__tile" data-tilt data-tilt-scale="1.06" data-tilt-speed="500" data-tilt-max="10">
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
                        <a href="#" class="tiles-wrap__tile" data-tilt data-tilt-scale="1.06" data-tilt-speed="500" data-tilt-max="10">
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
                        <a href="#" class="tiles-wrap__tile" data-tilt data-tilt-scale="1.06" data-tilt-speed="500" data-tilt-max="10">
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
                        <a href="#" class="tiles-wrap__tile" data-tilt data-tilt-scale="1.06" data-tilt-speed="500" data-tilt-max="10">
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
    </section>
</main>
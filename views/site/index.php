<?php

use app\assets\IndexAsset;

//$this->registerJs("var rellax = new Rellax('.rellax');");

IndexAsset::register($this);
?>

<main>
    <section class="section section-v1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm col-xs">
                    <div class="header-block tog-underCont">
                        <h2 class="heading">HLD - digital агенство</h2>
                        <p class="p-style p-v1">Наша команда состоит из толково мыслящих молодых мозгов, создающая практичные интернет-решения, за которые не приходиться краснеть.
                            <br/><br/>
                            Любим работать над проектами корпоративного класса, электронной коммерции, а также не упускаем из виду интернет-сервисы и порталы.
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
                        <p class="p-style p-v1 header-block__p tog-underCont">Разрабатываем, запускаем, сопровождаем и продвигаем всё то, что можно продвинуть, сопроводить и разработать</p>
                    </div>
                </div>
            </div>
            <div class="row section__inner-content tog-underElements">
                <div class="col-md-4 col-sm-6 col-xs-12 list-count">
                    <div class="header-block tog-underCont">
                        <h5 class="heading">Веб-разработка</h5>
                    </div>
                    <ul class="list-content list-togLine">
                        <li>
                            <p class="p-style p-v2">Аналитика</p>
                        </li>
                        <li>
                            <p class="p-style p-v2">Прототипирование</p>
                        </li>
                        <li>
                            <p class="p-style p-v2">Дизайн интерфейса</p>
                        </li>
                        <li>
                            <p class="p-style p-v2">Front-end и back-end разработка</p>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 list-count">
                    <div class="header-block tog-underCont">
                        <h5 class="heading">Dизайн</h5>
                    </div>
                    <ul class="list-content list-togLine">
                        <li>
                            <p class="p-style p-v2">Исследования</p>
                        </li>
                        <li>
                            <p class="p-style p-v2">Визуальная идентификация</p>
                        </li>
                        <li>
                            <p class="p-style p-v2">Полиграфический дизайн</p>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 list-count">
                    <div class="header-block tog-underCont">
                        <h5 class="heading">Поддержка</h5>
                    </div>
                    <ul class="list-content list-togLine">
                        <li>
                            <p class="p-style p-v2">SMM</p>
                        </li>
                        <li>
                            <p class="p-style p-v2">Контекстная реклама</p>
                        </li>
                        <li>
                            <p class="p-style p-v2">Техническая поддежрка</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md col-sm col-xs">
                    <a href="#" class="link-btn one-link-btn">
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
                        <p class="p-style p-v1 header-block__p  tog-underCont">Каждый выполненный нами проект — это чья-то уникальная история, в написании которой нельзя работать по шаблону. Поэтому мы всегда находим новые и эффективные решения при разработке и запуске очередного сервиса.</p>
                    </div>
                </div>
            </div>
            <div class="row section__inner-content tog-underElements none-mobile">
                <div class="col-md col-sm col-xs">
                    <div class="slider-oneVers" id="slick-1">
                        <div class="slider-oneVers__inner">
                            <div class="slider-oneVers__left-block">
                                <div class="slider-oneVers__img-slides">
                                    <div class="slider-oneVers__slide" style="background: url(/img/content/portfolio/1.jpg); background-size: cover;background-position: center center; background-repeat: no-repeat;"></div>
                                    <div class="slider-oneVers__slide" style="background: url(/img/content/portfolio/2.jpg); background-size: cover;background-position: center center; background-repeat: no-repeat;"></div>
                                </div>
                            </div>
                            <div class="slider-oneVers__right-block">
                                <div class="slider-oneVers__content-slides">
                                    <div class="slider-oneVers__desc">
                                        <div class="slider-oneVers__top-block">
                                            <div class="slider-oneVers__header-desc">
                                                <h4>Тортодельня</h4>
                                            </div>
                                            <div class="slider-oneVers__text-desc">
                                                <p class="p-style p-1">Первый и единственный портал о продукции Республики Алтай</p>
                                            </div>
                                            <div class="slider-oneVers__label-desc">
                                                <span class="label">Разработка сайта</span>
                                            </div>
                                        </div>
                                        <div class="slider-oneVers__bottom-block">
                                            <a href="#" class="link-btn two-link-btn">
                                                <span>Смотреть кейс</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60.9 23">
                                                    <polygon points="47.4,1.3 45.7,3.5 54.4,10.2 1.5,10.2 1.5,12.9 54.4,12.9 45.7,19.6 47.4,21.8 60.6,11.5 "/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slider-oneVers__desc">
                                        <div class="slider-oneVers__top-block">
                                            <div class="slider-oneVers__header-desc">
                                                <h4>Инжиниринговый центр Республики Алтай</h4>
                                            </div>
                                            <div class="slider-oneVers__text-desc">
                                                <p class="p-style p-1">Первый и единственный портал о продукции Республики Алтай</p>
                                            </div>
                                            <div class="slider-oneVers__label-desc">
                                                <span class="label">Разработка сайта</span>
                                            </div>
                                        </div>
                                        <div class="slider-oneVers__bottom-block">
                                            <a href="#" class="link-btn two-link-btn">
                                                <span>Смотреть кейс</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60.9 23">
                                                    <polygon points="47.4,1.3 45.7,3.5 54.4,10.2 1.5,10.2 1.5,12.9 54.4,12.9 45.7,19.6 47.4,21.8 60.6,11.5 "/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
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
                                <div class="tiles-wrap__bg" style="background: url(img/content/portfolio/2.jpg); background-size: cover;background-position: center center; background-repeat: no-repeat;"></div>
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
                                <div class="tiles-wrap__bg" style="background: url(img/content/portfolio/3.jpg); background-size: cover;background-position: center center; background-repeat: no-repeat;"></div>
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
                                <div class="tiles-wrap__bg" style="background: url(img/content/portfolio/2.jpg); background-size: cover;background-position: center center; background-repeat: no-repeat;"></div>
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
                                <div class="tiles-wrap__bg" style="background: url(img/content/portfolio/3.jpg); background-size: cover;background-position: center center; background-repeat: no-repeat;"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md col-sm col-xs">
                    <a href="#" class="link-btn one-link-btn">
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

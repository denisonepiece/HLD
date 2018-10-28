<?php

use app\assets\ViewCaseAsset;


$this->title = 'HLD profile';
ViewCaseAsset::register($this);
?>
<main>
    <section class="section start-sec v2 case-intro" style="background-color: #CCC; color: ;">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-4 col-xs-12">
                    <div class="case-intro__client-info-left">
                        <div class="case-intro__block-inner">
                            <div class="case-intro__logo" style="background-image: url(/img/content/portfolio/<?=$case['logo']?>);">
                            </div>
                            <div class="case-intro__label">
                                <span class="label"><?=$case['type_service_id'] ?></span>
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
                                    <p class="p-style p-v1"><?=$case['article'] ?></p>
                                </div>
                            </div>
                            <div class="case-intro__desc-block">
                                <div class="desc-header">
                                    <h5>Задача</h5>
                                </div>
                                <div class="desc-text">
                                    <div>
                                        <p class="p-style p-v1"><?=$case['task'] ?></p>
                                    </div>
                                    <a class="stock-link" href="http://<?=$case['link'] ?>"><?=$case['link'] ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Текстовый блок -->
    <section class="section section-v1" id="case-block-v1" style="background-color:; color: ;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7 col-sm col-xs">
                    <p class="p-style p-v1">Наша команда состоит из толково мыслящих молодых мозгов, создающая практичные интернет-решения, за которые не приходиться краснеть. ghdfghfghjfgjghjghjghfjghjfgghhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 50\50-->
    <section class="section case-fifty" id="case-block-v2" style="background-color:; color: ;">
        <div class="case-fifty__text">
            <p class="p-style p-v1">Наша команда состоит из толково мыслящих молодых мозгов, создающая практичные интернет-решения, за которые не приходиться краснеть.
                аша команда состоит из толково мыслящих молодых мозгов, создающая практичные интернет-решения, за которые не приходиться краснеть.
            </p>
        </div>
        <div class="case-fifty__img" style="background-image: url(/img/content/portfolio/1.jpg);"></div>
    </section>

    <!-- 50\50 веверсивный (добавляется класс reverse)-->
    <section class="section case-fifty reverse" id="case-block-v3" style="background-color:; color: ;">
        <div class="case-fifty__text">
            <p class="p-style p-v1">Наша команда состоит из толково мыслящих молодых мозгов, создающая практичные интернет-решения, за которые не приходиться краснеть.
                аша команда состоит из толково мыслящих молодых мозгов, создающая практичные интернет-решения, за которые не приходиться краснеть.
            </p>
        </div>
        <div class="case-fifty__img" style="background-image: url(img/content/portfolio/1.jpg)"></div>
    </section>

    <!-- Изображение для связки с видео -->
    <section class="section case-img-v1" id="case-block-v4">
        <img src="/img/content/portfolio/test.jpg">
    </section>

    <!-- Блок Видео -->
    <section class="section case-video" id="case-block-v5">
        <div id="portfolio-player" data-plyr-provider="vimeo" data-plyr-embed-id="286840168"></div>
    </section>

    <!-- Блок обычного изображения -->
    <section class="section case-img-v2" id="case-block-v6">
        <div style="background-image: url(img/content/portfolio/2.jpg);"></div>
    </section>

</main>

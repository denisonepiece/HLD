<?php

use app\assets\ViewCaseAsset;

$this->title = 'Проекты';
ViewCaseAsset::register($this);
?>
<main>
    <section class="section start-sec v2 case-intro" style="background-color: <?=$case['color'] ?>; color: ;">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-4 col-xs-12">
                    <div class="case-intro__client-info-left">
                        <div class="case-intro__block-inner">
                            <div class="case-intro__logo" style="background-image: url(/img/content/portfolio/<?=$case['logo']?>);">
                            </div>
                            <div class="case-intro__label">
                                <span class="label"><?=$type[$case['type_service_id']]['type'] ?></span>
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
    <?=$view['one']; ?>
    <?=$view['two']; ?>
    <?=$view['three']; ?>
    <?=$view['four']; ?>
    <?=$view['five']; ?>
    <?=$view['six']; ?>
    <?=$view['seven']; ?>
    <?=$view['eight']; ?>
    <?=$view['nine']; ?>
    <?=$view['ten']; ?>
    <?=$view['eleven']; ?>
    <?=$view['twelve']; ?>
    <?=$view['thirteen']; ?>
    <?=$view['fourteen']; ?>
    <?=$view['fifteen']; ?>
    <?=$view['sixteen']; ?>
    <?=$view['seventeen']; ?>
    <?=$view['eighteen']; ?>
    <?=$view['nineteen']; ?>
    <?=$view['twenty']; ?>

</main>

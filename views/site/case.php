<?php

use app\assets\CaseAsset;

$this->title = 'Проекты';

CaseAsset::register($this);
?>
<main>
    <section class="section start-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm col-xs">
                    <div class="header-block tog-underCont">
                        <h1 class="heading hGray-v2">Работы</h1>
                        <div class="link-nav custom-v1 selectActive">
                            <ul>
                                <!-- link-nav__active присваиваем к ссылке активному разделу -->
                                <li><a href="" id="site" class="link-nav__active">Все</a></li>
                                <li><a href="" id="site1">Сайты</a></li>
                                <li><a href="" id="site2">Дизайн</a></li>
                                <li><a href="" id="site3">Продвижение</a></li>
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
                <div class="col-md col-sm col-xs content">
<!--                    Кейсы добавляются с помощью ajax-->
                </div>
            </div>
        </div>
    </section>
</main>






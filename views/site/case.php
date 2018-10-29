<?php

use app\assets\CaseAsset;

$this->title = 'HLD cases';

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
                        <?php foreach($profile as $profile): ?>
                        <a href="<?=\yii\helpers\Url::to(['site/view-case', 'id' => $profile['id']]) ?>" class="tiles-wrap__tile" data-tilt data-tilt-scale="1.06" data-tilt-speed="500" data-tilt-max="10">
                            <div class="tiles-wrap__tile-inner">
                                <div class="tile-inner__overlay">
                                    <div class="tile-content">
                                        <div>
                                            <h5><?= $profile['article'] ?></h5>
                                        </div>
                                        <div><span class="label"><?= $type[$profile['type_service_id']]['type'] ?></span></div>
                                    </div>
                                </div>
                                <div class="tiles-wrap__bg" style="background: url(/img/content/portfolio/<?=$profile['image'] ?>); background-size: cover;background-position: center center; background-repeat: no-repeat;"></div>
                            </div>
                        </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
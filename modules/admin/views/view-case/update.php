<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\ViewCase */

?>
<div class="view-case-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

    <h3>Текстовый блок</h3>
    <?php debug(htmlspecialchars( '
    <section class="section section-v1" id="case-block-v1" style="background-color:; color: ;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7 col-sm col-xs">
                    <p class="p-style p-v1">Наша команда состоит из толково мыслящих молодых мозгов, создающая практичные интернет-решения, за которые не приходиться краснеть.
                    </p>
                </div>
            </div>
        </div>
    </section>
    ')); ?>

    <h3>50/50</h3>
    <?php debug(htmlspecialchars( '
               <section class="section case-fifty" id="case-block-v2" style="background-color:; color: ;">
                  <div class="case-fifty__text">
                     <p class="p-style p-v1">Наша команда состоит из толково мыслящих молодых мозгов, создающая практичные интернет-решения, за которые не приходиться краснеть.
                        аша команда состоит из толково мыслящих молодых мозгов, создающая практичные интернет-решения, за которые не приходиться краснеть.
                     </p>
                  </div>
                  <div class="case-fifty__img" style="background-image: url(img/content/portfolio/1.jpg);"></div>
               </section>
               ')); ?>

    <h3>50/50 reverse</h3>
    <?php debug(htmlspecialchars( '
               <section class="section case-fifty reverse" id="case-block-v3" style="background-color:; color: ;">
                                            <div class="case-fifty__text">
                     <p class="p-style p-v1">Наша команда состоит из толково мыслящих молодых мозгов, создающая практичные интернет-решения, за которые не приходиться краснеть.
                        аша команда состоит из толково мыслящих молодых мозгов, создающая практичные интернет-решения, за которые не приходиться краснеть.
                     </p>
                  </div>
                  <div class="case-fifty__img" style="background-image: url(img/content/portfolio/1.jpg)"></div>
               </section>
               ')); ?>

    <h3>Изображение для связки с видео</h3>
    <?php debug(htmlspecialchars( '
               <section class="section case-img-v1" id="case-block-v4">
                  <img src="img/content/portfolio/test.jpg">
               </section>
               ')); ?>

    <h3>Блок видео</h3>
    <?php debug(htmlspecialchars('
               <section class="section case-video" id="case-block-v5">
                  <div id="portfolio-player" class="js-player" data-plyr-provider="vimeo" data-plyr-embed-id="286840168"></div>
               </section>
               ')); ?>

    <h3>Блок изображения</h3>
    <?php debug(htmlspecialchars('
               <section class="section case-img-v2" id="case-block-v6">
                  <div style="background-image: url(img/content/portfolio/2.jpg);"></div>
               </section>
               ')); ?>

</div>

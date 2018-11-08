<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\ViewCase */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="view-case-form">
    <div class="row">
        <div class="col-md-7">
            <?php $form = ActiveForm::begin(); ?>

            <h3 style="color: darkred;">Сначала загрузите изображения!</h3>

            <?= Html::a('Загрузить изображения', ['upload', 'id' => $model->id], ['class' => 'btn btn-danger']) ?>
            <br><br>



            <?= $form->field($model, 'name')->textarea(['rows' => 1]) ?>

            <?= $form->field($model, 'one')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'two')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'three')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'four')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'five')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'six')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'seven')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'eight')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'nine')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'ten')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'eleven')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'twelve')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'thirteen')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'fourteen')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'fifteen')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'sixteen')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'seventeen')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'eighteen')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'nineteen')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'twenty')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'another')->textarea(['rows' => 1]) ?>

            <div class="form-group">
                <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success fixed save-btn']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>

        <div class="col-md-5">
            <h3>Текстовый блок</h3>
            <?php debug(htmlspecialchars('
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
            <?php debug(htmlspecialchars('
<section class="section case-fifty" id="case-block-v2" style="background-color:; color: ;">
    <div class="case-fifty__text">
        <p class="p-style p-v1">Наша команда состоит из толково мыслящих молодых мозгов, создающая практичные интернет-решения, за которые не приходиться краснеть.
                        аша команда состоит из толково мыслящих молодых мозгов, создающая практичные интернет-решения, за которые не приходиться краснеть.
        </p>
    </div>
    <div class="case-fifty__img" style="background-image: url(img/content/portfolio/1.jpg);">
    </div>
</section>
            ')); ?>

            <h3>50/50 reverse</h3>
            <?php debug(htmlspecialchars('
<section class="section case-fifty reverse" id="case-block-v3" style="background-color:; color: ;">
    <div class="case-fifty__text">
        <p class="p-style p-v1">Наша команда состоит из толково мыслящих молодых мозгов, создающая практичные интернет-решения, за которые не приходиться краснеть.
                        аша команда состоит из толково мыслящих молодых мозгов, создающая практичные интернет-решения, за которые не приходиться краснеть.</p>
    </div>
    <div class="case-fifty__img" style="background-image: url(img/content/portfolio/1.jpg)">
    </div>
</section>
               ')); ?>

            <h3>Изображение для связки с видео</h3>
            <?php debug(htmlspecialchars('
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
    </div>

</div>

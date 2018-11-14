<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\ViewCase */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="view-case-form">
    <div class="row">
        <div class="col-md-8">
            <?php $form = ActiveForm::begin(); ?>

            <h3 style="color: darkred;">При создании cначала загрузите изображения!</h3>

            <?= Html::a('Загрузить изображения', ['upload', 'id' => $model->id], ['class' => 'btn btn-danger']) ?>
            <br><br>

            <?= $form->field($model, 'name')->textarea(['rows' => 1]) ?>

            <?= $form->field($model, 'trim')->textarea(['rows' => 1]) ?>
            <p>1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20</p>


            <?= $form->field($model, '1')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, '2')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, '3')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, '4')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, '5')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, '6')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, '7')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, '8')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, '9')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, '10')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, '11')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, '12')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, '13')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, '14')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, '15')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, '16')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, '17')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, '18')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, '19')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, '20')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'another')->textarea(['rows' => 1]) ?>

            <div class="form-group">
                <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success fixed save-btn']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>

        <div class="col-md-4" style="position: fixed; right: 10px; top: 50px;">

            <h4>Текстовый блок</h4>
            <?php debug(htmlspecialchars('
<section class="section section-v1" id="case-block-v1" style="background-color:; color: ;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7 col-sm col-xs">
                    <p class="p-style p-v1">Наша команда состоит из толково мыслящих молодых мозгов, создающая практичные интернет-решения, за которые не приходиться краснеть.</p></div></div></div>
</section>')); ?>

            <h4>50/50</h4>
            <?php debug(htmlspecialchars('
<section class="section case-fifty" id="case-block-v2" style="background-color:; color: ;">
    <div class="case-fifty__text">
        <p class="p-style p-v1">Наша команда состоит из толково мыслящих молодых мозгов, создающая практичные интернет-решения, за которые не приходиться краснеть.Наташа команда состоит из толково мыслящих молодых мозгов, создающая практичные интернет-решения, за которые не приходиться краснеть.</p></div>
    <div class="case-fifty__img" style="background-image: url(img/content/portfolio/1.jpg);"></div>
</section>')); ?>

            <h4>50/50 reverse</h4>
            <?php debug(htmlspecialchars('
<section class="section case-fifty reverse" id="case-block-v3" style="background-color:; color: ;">
    <div class="case-fifty__text">
        <p class="p-style p-v1">Наша команда состоит из толково мыслящих молодых мозгов, создающая практичные интернет-решения, за которые не приходиться краснеть.
                        аша команда состоит из толково мыслящих молодых мозгов, создающая практичные интернет-решения, за которые не приходиться краснеть.</p></div>
    <div class="case-fifty__img" style="background-image: url(img/content/portfolio/1.jpg)"></div>
</section>')); ?>

            <h4>Блок изображения</h4>

            <?php debug(htmlspecialchars('
<section class="section case-img-v1" id="case-block-v4"><img src="img/content/portfolio/test.jpg">
</section>')); ?>

            <h4>Блок видео</h4>
            <?php debug(htmlspecialchars('
<section class="section case-video" id="case-block-v5">
<div id="portfolio-player" class="js-player" data-plyr-provider="vimeo" data-plyr-embed-id="286840168"></div>
</section>')); ?>

        </div>
    </div>
</div>



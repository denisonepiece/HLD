<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Главная';
?>
<div class="agency-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>

    <p>
        При заполнении полей: Веб разработка, Дизайн, Поддержка. Перечисление услуг идет ОБЯЗАТЕЛЬНО через запятую!
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'intro:ntext',
            'about:ntext',
            'dir_about:ntext',
            'dir_web:ntext',
            'dir_brand:ntext',
            'dir_help:ntext',
            'case_about:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>

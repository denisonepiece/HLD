<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'View Cases';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="view-case-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>

    <p>
        <?= Html::a('Create View Case', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
//            'one:ntext',
//            'two:ntext',
//            'three:ntext',
//            'four:ntext',
            //'five:ntext',
            //'six:ntext',
            //'seven:ntext',
            //'eight:ntext',
            //'nine:ntext',
            //'ten:ntext',
            //'eleven:ntext',
            //'twelve:ntext',
            //'thirteen:ntext',
            //'fourteen:ntext',
            //'fifteen:ntext',
            //'sixteen:ntext',
            //'seventeen:ntext',
            //'eighteen:ntext',
            //'nineteen:ntext',
            //'twenty:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>

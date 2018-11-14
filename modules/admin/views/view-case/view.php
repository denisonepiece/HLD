<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\ViewCase */

$this->title = $model->name;
?>
<div class="view-case-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'trim',
            '1:ntext',
            '2:ntext',
            '3:ntext',
            '4:ntext',
            '5:ntext',
            '6:ntext',
            '7:ntext',
            '8:ntext',
            '9:ntext',
            '10:ntext',
            '11:ntext',
            '12:ntext',
            '13:ntext',
            '14:ntext',
            '15:ntext',
            '16:ntext',
            '17:ntext',
            '18:ntext',
            '19:ntext',
            '20:ntext',
            'another',
        ],
    ]) ?>

</div>

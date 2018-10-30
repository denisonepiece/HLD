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
            'one:ntext',
            'two:ntext',
            'three:ntext',
            'four:ntext',
            'five:ntext',
            'six:ntext',
            'seven:ntext',
            'eight:ntext',
            'nine:ntext',
            'ten:ntext',
            'eleven:ntext',
            'twelve:ntext',
            'thirteen:ntext',
            'fourteen:ntext',
            'fifteen:ntext',
            'sixteen:ntext',
            'seventeen:ntext',
            'eighteen:ntext',
            'nineteen:ntext',
            'twenty:ntext',
        ],
    ]) ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Profile */

$this->title = $model->article;
?>
<div class="profile-view">

    <h1><?= Html::encode($model->article) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
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
            'article',
            'logo',
            'color',
            'task',
            'type_service_id',
//            [
//                    'attribute' => 'type_service_id',
//                    'value' => function($data) {
//                        return $data->type_service_id;
//                    }
//            ],
            'link',
            'image',
            'view_case_id',
            'on_index',
            'description:ntext',

        ],
    ]) ?>

</div>

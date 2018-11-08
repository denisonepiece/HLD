<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\ViewCase */

$this->title = 'Добавить вид';
?>
<div class="view-case-create">

<!--    <h2>--><?//= Html::encode($this->title) ?><!--</h2>-->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

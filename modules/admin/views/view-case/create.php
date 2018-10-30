<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\ViewCase */

$this->title = 'Create View Case';
$this->params['breadcrumbs'][] = ['label' => 'View Cases', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="view-case-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

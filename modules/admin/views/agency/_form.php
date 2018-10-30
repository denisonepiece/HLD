<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Agency */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="agency-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'intro')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'about')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'dir_about')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'dir_web')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'dir_brand')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'dir_help')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'case_about')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

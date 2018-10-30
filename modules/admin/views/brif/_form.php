<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Brif */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="brif-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'site')->textInput() ?>

    <?= $form->field($model, 'design')->textInput() ?>

    <?= $form->field($model, 'smm')->textInput() ?>

    <?= $form->field($model, 'ads')->textInput() ?>

    <?= $form->field($model, 'tech_sup')->textInput() ?>

    <?= $form->field($model, 'about')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telephone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

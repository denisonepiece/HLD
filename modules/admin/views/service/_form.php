<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Service */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="service-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'site_about')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'site_what')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'design_about')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'design_what')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'sup_about')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'sup_what_ads')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'sup_what_smm')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\ViewCase */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="view-case-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'one')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'two')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'three')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'four')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'five')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'six')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'seven')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'eight')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'nine')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ten')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'eleven')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'twelve')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'thirteen')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'fourteen')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'fifteen')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'sixteen')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'seventeen')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'eighteen')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'nineteen')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'twenty')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

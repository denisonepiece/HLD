<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Profile */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profile-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <hr>
    <h3>Загрузка изображений</h3>
    <?= Html::a('Загрузить изображения', ['upload', 'id' => $model->id],['class' => 'btn btn-danger']) ?>
    <Br><br>

    <?= $form->field($model, 'logo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>

    <!--    --><?php //debug($model) ?>
    <hr>

    <?= $form->field($model, 'article')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'color')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'task')->textInput(['maxlength' => true]) ?>

<!--    --><?//= $form->field($model, 'type_service_id')->dropDownList(['1' => 'Разрабработка сайта', '2' => 'Запуск бренда', '3' => 'Дизайн', '4' => 'Поддержка']) ?>
    <?= $form->field($model, 'type_service_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\TypeService::find()->all(), 'id', 'type')) ?>

    <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'view_case_id')->textInput() ?>

    <?= $form->field($model, 'on_index')->dropDownList(['y' => 'Да', '' => 'Нет']) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

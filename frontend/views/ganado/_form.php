<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\database\Ganado $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="ganado-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'raza')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'peso_ingreso')->textInput() ?>

    <?= $form->field($model, 'peso_egreso')->textInput() ?>

    <?= $form->field($model, 'alimento_tipo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alimento_cantidad')->textInput() ?>

    <?= $form->field($model, 'f_ingreso')->textInput() ?>

    <?= $form->field($model, 'f_egreso')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

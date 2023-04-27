<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\searchs\GanadoSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="ganado-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'raza') ?>

    <?= $form->field($model, 'peso_ingreso') ?>

    <?= $form->field($model, 'peso_egreso') ?>

    <?= $form->field($model, 'alimento_tipo') ?>

    <?php // echo $form->field($model, 'alimento_cantidad') ?>

    <?php // echo $form->field($model, 'f_ingreso') ?>

    <?php // echo $form->field($model, 'f_egreso') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

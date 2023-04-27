<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\database\Ganado $model */

$this->title = 'Create Ganado';
$this->params['breadcrumbs'][] = ['label' => 'Ganados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ganado-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

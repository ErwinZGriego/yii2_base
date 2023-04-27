<?php

use common\database\Ganado;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\searchs\GanadoSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Ganados';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ganado-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ganado', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'raza',
            'peso_ingreso',
            'peso_egreso',
            'alimento_tipo',
            //'alimento_cantidad',
            //'f_ingreso',
            //'f_egreso',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Ganado $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>

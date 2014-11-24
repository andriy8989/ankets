<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AnketOperatorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Anket Operators';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anket-operator-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Anket Operator', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'anket_id',
            'operator_id',
            'digital_value',
            'coefficient_for_rob5',
            // 'is_auto_run4',
            // 'fact_oborot',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

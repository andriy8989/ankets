<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\AnketTypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Anket Types';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anket-type-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Anket Type', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Нове поле', ['/admin/anket-type-fields'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

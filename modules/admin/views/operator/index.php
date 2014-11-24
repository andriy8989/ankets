<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\OperatorsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Operators';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="operators-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Створити Оператора', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Створити URL список', ['/admin/url-list'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'help_for_4',
            'help_for_5',
            'worker4_id',
            'worker5_id',
            'oborot_plan',
            'oborot_plan1',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\UrlListSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Url Lists';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="url-list-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Створити URL список', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Оператори', ['/admin/operator'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'operator_id',
            'name',
            'operator.name',
            
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

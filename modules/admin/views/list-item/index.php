<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\ListItemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'List Items';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="list-item-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Створити елемент списку', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Створити список', ['/admin/list'], ['class' => 'btn btn-success']) ?>
    </p>

   <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            
            'lists.name',
            'value',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

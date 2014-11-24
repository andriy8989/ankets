<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UAnketsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Анкети';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="uankets-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            
            [
                'attribute' => 'name',
                'label' => 'ID  анкети',
                'value' => 'name',
            ],

            ['class' => 'yii\grid\ActionColumn',
            'template' => ' {update} ',
            'header'=>'Перейти до анкети', 
            'urlCreator' => function ($action, $model, $key, $index) {
       
                if ($action === 'update') {
                    $url ='/robytnyk/update?id='.$model->id.'&anket_type='.$model->anketType->id;
                    return $url;
                }
            }
            ],
                    
            [
                'attribute' => 'status',
                'format' => 'raw',
                'value' => function ($model, $index, $widget) {
                    return Html::checkbox('status[]', $model->status, ['value' => $index, 'disabled' => false]);
                },
            ],
            
        ],
    ]); ?>
    <p>
        <?= Html::a('Відправити Адміністратору', ['send'], ['class' => 'btn btn-success']) ?>
    </p>
</div>

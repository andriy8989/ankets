<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\bootstrap\Modal;
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
        'tableOptions'=>['class'=>'table table-striped table-bordered administrator-table'],
        
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'name',
                'label' => 'ID  анкети',
                'value' => 'name',
            ],
            [
                'label' => 'Стовпчик №1',
                'format' => 'html',
                'value' => function ($model) {
                   foreach ($model->anketColums as $k => $colum )
                    {
                        if($colum->colum_id == 1){
                            $digitalValue = '<div class="col_1">'.$colum->digital_value.'</div>';
                        }
                    }
                    if(isset($digitalValue))
                    {
                       return $digitalValue;
                    }else{
                        return '<div class="col_1"></div>';
                    }
                },
            ],
            [
                'label' => 'Стовпчик №2',
                'format' => 'html',
                'value' => function ($model) {
                    foreach ($model->anketColums as $k => $colum )
                    {
                        if($colum->colum_id == 2){
                            $digitalValue = '<div class="col_2">'.$colum->digital_value.'</div>';
                        }
                    }
                    if(isset($digitalValue))
                    {
                       return $digitalValue;
                    }else{
                        return '<div class="col_2"></div>';
                    }
                },
            ],
            [
                'label' => 'Стовпчик №3',
                'format' => 'html',
                'value' => function ($model) {
                    foreach ($model->anketColums as $k => $colum )
                    {
                        if($colum->colum_id == 3){
                            $digitalValue = '<div class="col_3">'.$colum->digital_value.'</div>';
                        }
                    }
                    if(isset($digitalValue))
                    {
                       return $digitalValue;
                    }else{
                        return '<div class="col_3"></div>';
                    }
                },
            ],
            [
                'label' => 'Стовпчик №4',
                'format' => 'html',
                'value' => function ($model) {
                    foreach ($model->anketColums as $k => $colum )
                    {
                        if($colum->colum_id == 4){
                            $digitalValue = '<div class="col_4">'.$colum->digital_value.'</div>';
                        }
                    }
                    if(isset($digitalValue))
                    {
                       return $digitalValue;
                    }else{
                        return '<div class="col_4"></div>';
                    }
                },
            ],
            [
                'label' => 'Стовпчик №5',
                'format' => 'html',
                'value' => function ($model) {
                    foreach ($model->anketColums as $k => $colum )
                    {
                        if($colum->colum_id == 5){
                            $digitalValue = '<div class="col_5">'.$colum->digital_value.'</div>';
                        }
                    }
                    if(isset($digitalValue))
                    {
                       return $digitalValue;
                    }else{
                        return '<div class="col_5"></div>';
                    }
                },
            ],
            [
                'label' => 'Стовпчик №6',
                'format' => 'html',
                'value' => function ($model) {
                    foreach ($model->anketColums as $k => $colum )
                    {
                        if($colum->colum_id == 6){
                            $digitalValue = '<div class="col_6">'.$colum->digital_value.'</div>';
                        }
                    }
                    if(isset($digitalValue))
                    {
                       return $digitalValue;
                    }else{
                        return '<div class="col_6"></div>';
                    }
                },
            ],
            [
                'label' => 'Стовпчик №7',
                'format' => 'html',
                'value' => function ($model) {
                    foreach ($model->anketColums as $k => $colum )
                    {
                        if($colum->colum_id == 7){
                            $digitalValue = '<div class="col_7">'.$colum->digital_value.'</div>';
                        }
                    }
                    if(isset($digitalValue))
                    {
                       return $digitalValue;
                    }else{
                        return '<div class="col_7"></div>';
                    }
                },
            ],
                        [
                'label' => 'Стовпчик №8',
                'format' => 'html',
                'value' => function ($model) {
                    foreach ($model->anketColums as $k => $colum )
                    {
                        if($colum->colum_id == 8){
                            $digitalValue = '<div class="col_8">'.$colum->digital_value.'</div>';
                        }
                    }
                    if(isset($digitalValue))
                    {
                       return $digitalValue;
                    }else{
                        return '<div class="col_8"></div>';
                    }
                },
            ],
            [
                'label' => 'Стовпчик №9',
                'format' => 'html',
                'value' => function ($model) {
                    foreach ($model->anketColums as $k => $colum )
                    {
                        if($colum->colum_id == 9){
                            $digitalValue = '<div class="col_9">'.$colum->digital_value.'</div>';
                        }
                    }
                    if(isset($digitalValue))
                    {
                       return $digitalValue;
                    }else{
                        return '<div class="col_9"></div>';
                    }
                },
            ],
            [
                'label' => 'Стовпчик №10',
                'format' => 'html',
                'value' => function ($model) {
                    foreach ($model->anketColums as $k => $colum )
                    {
                        if($colum->colum_id == 10){
                            $digitalValue = '<div class="col_10">'.$colum->digital_value.'</div>';
                        }
                    }
                    if(isset($digitalValue))
                    {
                       return $digitalValue;
                    }else{
                        return '<div class="col_10"></div>';
                    }
                },
            ],
        ],
    ]); ?>
    
     <p>
        <?= Html::button('Приховати стовпчики', ['id'=>'hide_cols','class' => 'btn btn-success']) ?>
    </p>
    
    <?php
    Modal::begin([
            'id' => 'modal'
        ]);
 
    echo "<div id='modalContent'></div>";
 
    Modal::end();
    ?>
    
</div>

<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\AnketTypeFieldsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Anket Type Fields';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anket-type-fields-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Anket Type Fields', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Створити тип анкети', ['/admin/anket-type'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            
            'id',
            'anket_type_id',
            'field_name',
            'help_field',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

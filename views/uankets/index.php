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

    <p>
        <?= Html::a('Створити Анкету', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'anket_type_id',
                'label' => 'Тип',
                'value' => 'anketType.name',
                'filter' => yii\helpers\ArrayHelper::map(app\modules\admin\models\AnketType::find()->asArray()->all(),'anket_type_id','name')
            ],
            [
                'attribute' => 'name',
                'label' => 'Назва',
                'value' => 'name',
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\BaseUrl;
/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\AnketType */

$this->title = 'Update Anket Type: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Anket Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="anket-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
    
</div>
<div class="anket-type-fields-index">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            
            'id',
            'anket_type_id',
            'field_name',
            'help_field',
            'rob_visible',
            
            ['class' => 'yii\grid\ActionColumn',
            'template' => '{view} {update} {delete}',
            
            'urlCreator' => function ($action, $model, $key, $index) {
                if ($action === 'update') {
                    $url ='/admin/anket-type-fields/update?id='.$model->id;
                    return $url;
                }
            }
            ],
        ],
    ]); ?>
</div>

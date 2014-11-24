<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\BaseUrl;
/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\DataList */

$this->title = 'Update Data List: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Data Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="data-list-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
<?= Html::a('Додати нові дані', ['/admin/data-list-items/create'], ['class' => 'btn btn-success']) ?>
<div class="anket-type-fields-index">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            
            'id',
            'data_list_id',
            'value:ntext',

            ['class' => 'yii\grid\ActionColumn',
            'template' => '{view} {update} {delete}',
            
            'urlCreator' => function ($action, $model, $key, $index) {
                if ($action === 'update') {
                    $url ='/admin/data-list-items/update?id='.$model->id;
                    return $url;
                }
                if ($action === 'view') {
                    $url ='/admin/data-list-items/view?id='.$model->id;
                    return $url;
                }
                if ($action === 'delete') {
                    $url ='/admin/data-list-items/delete?id='.$model->id;
                    return $url;
                }
            }
            ],
        ],
    ]); ?>
</div>

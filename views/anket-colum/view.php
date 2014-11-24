<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\AnketColum */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Anket Colums', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anket-colum-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'anket_id',
            'colum_id',
            'digital_value',
            'coefficient_for_rob5',
            'is_auto_run4',
            'fact_oborot',
        ],
    ]) ?>

</div>

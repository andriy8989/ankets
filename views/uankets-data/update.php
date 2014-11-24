<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UAnketsData */

$this->title = 'Update Uankets Data: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Uankets Datas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="uankets-data-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

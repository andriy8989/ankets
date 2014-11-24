<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AnketColum */

$this->title = 'Update Anket Colum: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Anket Colums', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="anket-colum-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\DataList */

$this->title = 'Create Data List';
$this->params['breadcrumbs'][] = ['label' => 'Data Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-list-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

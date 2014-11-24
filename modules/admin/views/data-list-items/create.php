<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\DataListItems */

$this->title = 'Create Data List Items';
$this->params['breadcrumbs'][] = ['label' => 'Data List Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-list-items-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

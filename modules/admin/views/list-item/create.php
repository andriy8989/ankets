<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\ListItem */

$this->title = 'Create List Item';
$this->params['breadcrumbs'][] = ['label' => 'List Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="list-item-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

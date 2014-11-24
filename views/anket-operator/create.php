<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AnketOperator */

$this->title = 'Create Anket Operator';
$this->params['breadcrumbs'][] = ['label' => 'Anket Operators', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anket-operator-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AnketColum */

$this->title = 'Create Anket Colum';
$this->params['breadcrumbs'][] = ['label' => 'Anket Colums', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anket-colum-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

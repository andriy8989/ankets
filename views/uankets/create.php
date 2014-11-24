<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\UAnkets */

$this->title = 'Create Uankets';
$this->params['breadcrumbs'][] = ['label' => 'Uankets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="uankets-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

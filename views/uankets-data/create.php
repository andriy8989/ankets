<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\UAnketsData */

$this->title = 'Create Uankets Data';
$this->params['breadcrumbs'][] = ['label' => 'Uankets Datas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="uankets-data-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

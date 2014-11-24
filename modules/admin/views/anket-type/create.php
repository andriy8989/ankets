<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\AnketType */

$this->title = 'Create Anket Type';
$this->params['breadcrumbs'][] = ['label' => 'Anket Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anket-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\AnketTypeFields */

$this->title = 'Create Anket Type Fields';
$this->params['breadcrumbs'][] = ['label' => 'Anket Type Fields', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anket-type-fields-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

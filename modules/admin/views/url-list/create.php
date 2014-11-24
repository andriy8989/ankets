<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\UrlList */

$this->title = 'Create Url List';
$this->params['breadcrumbs'][] = ['label' => 'Url Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="url-list-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

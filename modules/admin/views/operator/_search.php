<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\OperatorsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="operators-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'help_for_4') ?>

    <?= $form->field($model, 'help_for_5') ?>

    <?= $form->field($model, 'worker4_id') ?>

    <?php // echo $form->field($model, 'worker5_id') ?>

    <?php // echo $form->field($model, 'oborot_plan') ?>

    <?php // echo $form->field($model, 'oborot_plan1') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

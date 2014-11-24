<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AnketOperatorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="anket-operator-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'anket_id') ?>

    <?= $form->field($model, 'operator_id') ?>

    <?= $form->field($model, 'digital_value') ?>

    <?= $form->field($model, 'coefficient_for_rob5') ?>

    <?php // echo $form->field($model, 'is_auto_run4') ?>

    <?php // echo $form->field($model, 'fact_oborot') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

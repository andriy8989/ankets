<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AnketColum */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="anket-colum-form">

    <?php $form = ActiveForm::begin([
            'id' => 'my-form-category',
        ]); ?>


    <?= $form->field($model, 'digital_value')->textInput() ?>

    <?= $form->field($model, 'coefficient_for_rob5')->textInput() ?>

    <?= $form->field($model, 'is_auto_run4')->textInput() ?>

    <?= $form->field($model, 'fact_oborot')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

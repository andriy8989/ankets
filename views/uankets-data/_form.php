<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UAnketsData */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="uankets-data-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'anket_id')->textInput() ?>

    <?= $form->field($model, 'field')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'value')->textInput(['maxlength' => 255]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

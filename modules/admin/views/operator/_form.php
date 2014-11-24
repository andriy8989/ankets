<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Operators */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="operators-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'help_for_4')->textInput(['maxlength' => 250]) ?>

    <?= $form->field($model, 'help_for_5')->textInput(['maxlength' => 250]) ?>

    <?= $form->field($model, 'worker4_id')->textInput() ?>

    <?= $form->field($model, 'worker5_id')->textInput() ?>

    <?= $form->field($model, 'oborot_plan')->textInput() ?>

    <?= $form->field($model, 'oborot_plan1')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

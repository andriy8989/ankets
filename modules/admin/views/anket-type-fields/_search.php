<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\AnketTypeFieldsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="anket-type-fields-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'anket_type_id') ?>

    <?= $form->field($model, 'field_name') ?>

    <?= $form->field($model, 'help_field') ?>

    <?= $form->field($model, 'rob_visible') ?>
    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

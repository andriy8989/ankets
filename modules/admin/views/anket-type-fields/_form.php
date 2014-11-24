<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\AnketTypeFields */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="anket-type-fields-form">

    <?php $form = ActiveForm::begin(); ?>

    <?=$form->field($model, 'anket_type_id')->dropDownList(ArrayHelper::map(\app\modules\admin\models\AnketType::find()->asArray()->all(), 'id', 'name'), 
         ['prompt'=>'Виберіть список']) ?>
    
    
    <?= $form->field($model, 'field_name')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'help_field')->textInput(['maxlength' => 30]) ?>

    <?=$form->field($model, 'rob_visible')->dropDownList(
        ['2'=>'Робітник 2','3'=>'Робітник 3']
        ) ?>
    
    
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

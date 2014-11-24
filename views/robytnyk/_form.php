<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model app\models\UAnkets */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="uankets-form">

    <?php $form = ActiveForm::begin(); ?>

    <?=$form->field($model, 'anket_type_id')->dropDownList(ArrayHelper::map(\app\modules\admin\models\AnketType::find()->asArray()->all(), 'id', 'name'), 
         ['prompt'=>'Виберіть список']) ?>
    
    <?= $form->field($model, 'name')->textInput(['maxlength' => 7]) ?>

    
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

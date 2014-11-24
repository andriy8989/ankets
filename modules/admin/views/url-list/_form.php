<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\UrlList */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="url-list-form">

    <?php $form = ActiveForm::begin(); ?>

     <?=$form->field($model, 'operator_id')->dropDownList(ArrayHelper::map(\app\modules\admin\models\Operators::find()->asArray()->all(), 'id', 'name'), 
         ['prompt'=>'Виберіть оператора']) ?>
    
    
    <?= $form->field($model, 'name')->textInput(['maxlength' => 50]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

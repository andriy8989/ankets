<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\DataListItems */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-list-items-form">

    <?php $form = ActiveForm::begin(); ?>

    
    <?=$form->field($model, 'data_list_id')->dropDownList(ArrayHelper::map(\app\modules\admin\models\DataList::find()->asArray()->all(), 'id', 'name'), 
         ['prompt'=>'Виберіть список']) ?>
    
    <?= $form->field($model, 'value')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

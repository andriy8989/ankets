<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
/* @var $this yii\web\View */
/* @var $model app\models\UAnkets */

$this->title = 'Update Uankets: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Uankets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="uankets-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        
    ]) ?>

    
     <form >
        <input type="hidden" class="form-control" name="id"  value="<?=$model->id?>" maxlength="7">
        <input type="hidden" class="form-control" name="anket_type"  value="<?=$anket_type?>" maxlength="7">
        <div class="form-group field-uankets-name required">
        <?php foreach ($dataProvider as $key=>$value ):?>
            <label class="control-label"><?= $dataProvider[$key]->field_name ?></label>
            <input type="hidden" class="form-control" name="field_name[<?=$key?>]" value="<?= $dataProvider[$key]->field_name ?>" maxlength="7">
            <input class="form-control" type="text" class="form-control" name="field_value[<?=$key?>]" value="<?php if(isset($uanketsData[$key]->value)){echo $uanketsData[$key]->value; }  ?>" maxlength="7">
        <?php endforeach; ?>
            <div class="help-block"></div>
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-primary">Update</button>    </div>
    </form>
    
    
    
    
</div>

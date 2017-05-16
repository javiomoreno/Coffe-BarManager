<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Productos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="productos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <div class="row">
      <div class="col-lg-6">
        <?= $form->field($model, 'cantidad')->textInput() ?>
      </div>
      <div class="col-lg-6">
        <?= $form->field($model, 'precio_unitario')->textInput() ?>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <?= $form->field($model, 'precio_costo')->textInput() ?>
      </div>
      <div class="col-lg-6">
        <?= $form->field($model, 'status')->dropDownList([ 1 => 'Activo', 0 => 'Inactivo'], ['prompt' => 'Seleccione Uno' ]); ?>
      </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

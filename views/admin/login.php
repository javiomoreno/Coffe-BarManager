<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
  <div class="middle-box text-center loginscreen  animated fadeInDown">
      <div>
          <div>
              <h1 class="logo-name">IN+</h1>
          </div>
          <h3>Welcome to IN+</h3>
          <p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
          </p>
          <p>Login in. To see it in action.</p>
          <?php $form = ActiveForm::begin([
              'id' => 'login-form',
              'class' => 'm-t',
          ]); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'class' => 'form-control', 'placeholder' => 'Usuario'])->label(false); ?>

            <?= $form->field($model, 'password')->passwordInput(['class' => 'form-control', 'placeholder' => 'Contraseña'])->label(false); ?>

            <?= Html::submitButton('Login', ['class' => 'btn btn-primary block full-width m-b', 'name' => 'login-button']) ?>

          <?php ActiveForm::end(); ?>

          <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
      </div>
  </div>
</div>

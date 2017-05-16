<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;
use yii\helpers\Url;


/* @var $this yii\web\View */
/* @var $searchModel app\models\search\ProductosSerach */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Productos');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productos-index col-lg-12">
  <div class="ibox">
    <div class="ibox-title">
      <h5><?= Html::encode($this->title) ?></h5>
      <div class="ibox-tools">
        <p>
          <?= Html::a(Html::tag('i', '', ['class' => 'ace-icon fa fa-plus', 'style' => 'cursor: pointer']).' '.Yii::t('app', 'Create'), FALSE, ['value' => Url::to(['create']), 'class'=>'btn btn-primary showModalButton', 'data-rel' => 'tooltip', 'data-placement' => 'top', 'title' => 'Nuevo Producto'] );?>
        </p >
      </div>
    </div>
    <div class="ibox-content">
      <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
          ['class' => 'yii\grid\SerialColumn'],

          'id_producto',
          'nombre',
          'cantidad',
          'precio_unitario',
          'precio_costo',
          // 'status',

          ['class' => 'yii\grid\ActionColumn'],
        ],
      ]); ?>
    </div>
  </div>
</div>
<?php
  Modal::begin([
      'header' => '<h2>Agregar Nuevo Producto</h2>',
      'id' => 'modal',
      'size' => 'modal-md',]);

  echo "<div id='modalContent'></div>";

  Modal::end();
?>

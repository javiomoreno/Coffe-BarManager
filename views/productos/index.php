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
        <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover dataTables-example" >
            <thead>
              <tr>
                <th>ID Producto</th>
                <th>Nombre</th>
                <th>Precio Unitario</th>
                <th>Precio Costo</th>
                <th>Cantidad</th>
                <th>Status</th>
                <th style="text-align: center;">Opciones</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($model as $value): ?>
                <tr class="odd gradeX">
                    <td><?= $value->id_producto?></td>
                    <td><?= $value->nombre;?></td>
                    <td><?= $value->precio_unitario;?></td>
                    <td><?= $value->precio_costo;?></td>
                    <td><?= $value->cantidad;?></td>
                    <td>
                      <?php if($value->status == 1){
                          echo "<span class='label label-primary'>Activo</span>";
                        }else {
                          echo "<span class='label label-warning'>Inactivo</span>";
                        }
                      ?>
                    </td>
                    <td style="text-align: center;">
                      <div class="hidden-sm hidden-xs action-buttons">
                        <?= Html::a(Html::tag('i', '', ['class' => 'fa fa-eye bigger-130', 'style' => 'cursor: pointer']).'', ['view', 'id' => $value->id_producto], ['class'=>'tooltip-blue blue', 'data-rel' => 'tooltip', 'data-placement' => 'top', 'title' => 'Ver Detalle de Producto'] );?>
                        <?= Html::a(Html::tag('i', '', ['class' => 'fa fa-edit bigger-130', 'style' => 'cursor: pointer']).'', ['update', 'id' => $value->id_producto], ['class' => 'tooltip-green green', 'data-rel' => 'tooltip', 'data-placement' => 'top', 'title' => 'Editar Producto'] );?>
                    </div>
                    </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
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

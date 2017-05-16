<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "productos".
 *
 * @property integer $id_producto
 * @property string $nombre
 * @property integer $cantidad
 * @property double $precio_unitario
 * @property double $precio_costo
 * @property integer $status
 */
class Productos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'productos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['cantidad', 'status'], 'integer'],
            [['precio_unitario', 'precio_costo'], 'number'],
            [['nombre'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_producto' => Yii::t('app', 'Id Producto'),
            'nombre' => Yii::t('app', 'Nombre'),
            'cantidad' => Yii::t('app', 'Cantidad'),
            'precio_unitario' => Yii::t('app', 'Precio Unitario'),
            'precio_costo' => Yii::t('app', 'Precio Costo'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}

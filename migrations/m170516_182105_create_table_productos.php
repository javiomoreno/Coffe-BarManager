<?php

use yii\db\Migration;

class m170516_182105_create_table_productos extends Migration
{
    public function up()
    {
      $this->createTable('productos', [
          'id_producto' => $this->primaryKey(),
          'nombre' => $this->string(100)->notNull(),
          'cantidad' => $this->integer(),
          'precio_unitario' => $this->double(15,2),
          'precio_costo' => $this->double(15,2),
          'status' => $this->integer(),
        ]);
    }

    public function down()
    {
        $this->dropTable('productos');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}

<?php

use yii\db\Migration;

class m170516_183827_create_table_usuarios extends Migration
{
    public function up()
    {
        $this->createTable('usuarios', [
            'id_usuario' => $this->primaryKey(),
            'nombre' => $this->string(100)->notNull(),
            'apellido' => $this->string(100)->notNull(),
            'username' => $this->string(100)->notNull(),
            'password' => $this->string(100)->notNull(),
            'status' => $this->integer(),
          ]);
    }

    public function down()
    {
        $this->dropTable('usuarios');
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

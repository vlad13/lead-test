<?php

use yii\db\Migration;

/**
 * Class m210130_104752_create_table_lead
 */
class m210130_104752_create_table_lead extends Migration
{
    public function up()
    {
        $this->createTable('lead', [
            'id' => $this->primaryKey(),
            'email' => $this->string(100)->comment('Электронная почта'),
            'name' => $this->string(100)->comment('Имя'),
            'mobile' => $this->string(20)->comment('Телефон'),
        ]);
    }

    public function down()
    {
        $this->dropTable('lead');
    }
}

<?php

use yii\db\Migration;

class m160930_142648_add_goods_fkey extends Migration
{
    public function safeUp()
    {
        $this->addForeignKey('goods_fkey', 'goodcat_lookup', 'goodId', 'goods', 'id');
    }

    public function safeDown()
    {
        return false;
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

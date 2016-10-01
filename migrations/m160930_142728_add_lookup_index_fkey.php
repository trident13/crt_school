<?php

use yii\db\Migration;

class m160930_142728_add_lookup_index_fkey extends Migration
{
    public function safeUp()
    {
        $this->createIndex('goodcat_index', 'goodcat_lookup', ['goodId', 'catId'], true);
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

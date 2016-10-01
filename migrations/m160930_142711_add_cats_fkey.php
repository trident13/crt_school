<?php

use yii\db\Migration;

class m160930_142711_add_cats_fkey extends Migration
{
    public function safeUp()
    {
        $this->addForeignKey('cats_fkey', 'goodcat_lookup', 'catId', 'categories', 'id');
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

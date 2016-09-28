<?php

use yii\db\Migration;

class m160928_114134_create_goodcat_fkey extends Migration
{
    public function safeUp()
    {
      $this->addForeignKey('goods_fkey', 'goods', 'id', 'goodcat_lookup', 'goodId', 'CASCADE');

      $this->addForeignKey('cats_fkey', 'categories', 'id', 'goodcat_lookup', 'catId', 'CASCADE');
    }

    public function safeDown()
    {
      $this->dropForeignKey('goods_fkey', 'goods');

      $this->dropForeignKey('cats_fkey', 'categories');
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

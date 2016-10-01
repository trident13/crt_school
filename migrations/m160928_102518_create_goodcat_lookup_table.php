<?php

use yii\db\Migration;

/**
 * Handles the creation for table `goodcat_lookup`.
 */
class m160928_102518_create_goodcat_lookup_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('goodcat_lookup', [
            'id' => $this->primaryKey(),
            'goodId' => $this->integer()->notNull()->comment('ID для товара'),
            'catId' => $this->integer()->notNull()->comment('ID для категории'),
        ], 'ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT \'Какие товары принадлежат к каким категориям\'');

    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('goodcat_lookup');
    }
}

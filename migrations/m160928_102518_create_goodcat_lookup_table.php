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
    public function up()
    {
        $this->createTable('goodcat_lookup', [
            'id' => $this->primaryKey(),
            'goodId' => $this->integer(10)->notNull()->comment('ID для товара'),
            'catId' => $this->integer(10)->notNull()->comment('ID для категории'),
        ], 'ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT \'Какие товары принадлежат к каким категориям\'');

        $this->createIndex('goodcat_index', 'goodcat_lookup', ['goodId', 'catId'], true);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('goodcat_lookup');
    }
}

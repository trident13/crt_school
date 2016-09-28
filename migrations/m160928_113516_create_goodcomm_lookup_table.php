<?php

use yii\db\Migration;

/**
 * Handles the creation for table `goodcomm_lookup`.
 */
class m160928_113516_create_goodcomm_lookup_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('goodcomm_lookup', [
            'id' => $this->primaryKey(),
            'goodId' => $this->integer()->notNull()->comment('ID товара'),
            'commId' => $this->integer()->notNull()->comment('ID комментария'),
        ], 'ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT \'К какому товару какие комментарии были оставлены\'');

        $this->createIndex('goodcomm_index', 'goodcomm_lookup', ['goodId', 'commId'], true);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('goodcomm_lookup');
    }
}

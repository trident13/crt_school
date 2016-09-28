<?php

use yii\db\Migration;

/**
 * Handles the dropping for table `goodcomm_lookup`.
 */
class m160928_142655_drop_goodcomm_lookup_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->dropTable('goodcomm_lookup');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
      $this->createTable('goodcomm_lookup', [
          'id' => $this->primaryKey(),
          'goodId' => $this->integer()->notNull()->comment('ID товара'),
          'commId' => $this->integer()->notNull()->comment('ID комментария'),
      ], 'ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT \'К какому товару какие комментарии были оставлены\'');

      $this->createIndex('goodcomm_index', 'goodcomm_lookup', ['goodId', 'commId'], true);
    }
}

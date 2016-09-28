<?php

use yii\db\Migration;

/**
 * Handles the dropping for table `comments`.
 */
class m160928_142150_drop_comments_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->dropTable('comments');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
      $this->createTable('comments', [
          'id' => $this->primaryKey(),
          'body' => $this->text()->comment('Текст комментария'),
      ], 'ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT \'Таблица комментариев пользователей\'');
    }
}

<?php

use yii\db\Migration;

/**
 * Handles the creation for table `comments`.
 */
class m160928_112105_create_comments_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('comments', [
            'id' => $this->primaryKey(),
            'body' => $this->text()->comment('Текст комментария'),
        ], 'ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT \'Таблица комментариев пользователей\'');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('comments');
    }
}

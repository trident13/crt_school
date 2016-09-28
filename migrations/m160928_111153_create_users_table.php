<?php

use yii\db\Migration;

/**
 * Handles the creation for table `users`.
 */
class m160928_111153_create_users_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('users', [
            'id' => $this->primaryKey(),
            'nickname' => $this->string(255)->notNull()->comment('Имя пользователя'),
            'email' => $this->string(255)->notNull()->comment('E-mail пользователя'),
            'password' => $this->string(255)->notNull()->unique()->comment('Пароль пользователя'),
        ], 'ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT \'Таблица пользователей\'');

    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('users');
    }
}

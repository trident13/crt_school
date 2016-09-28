<?php

use yii\db\Migration;

/**
 * Handles adding accessToken to table `users`.
 */
class m160928_144745_add_accessToken_column_to_users_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
      $this->addColumn('users', 'accessToken', 'string(255)');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
      $this->dropColumn('users', 'accessToken');
    }
}

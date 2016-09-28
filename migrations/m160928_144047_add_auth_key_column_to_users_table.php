<?php

use yii\db\Migration;

/**
 * Handles adding auth_key to table `users`.
 */
class m160928_144047_add_auth_key_column_to_users_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
      $this->addColumn('users', 'authKey', 'string(255)');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
      $this->dropColumn('users', 'authKey');
    }
}

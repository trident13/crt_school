<?php

use yii\db\Migration;

/**
 * Handles the creation for table `usercomm_lookup`.
 */
class m160928_112736_create_usercomm_lookup_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('usercomm_lookup', [
            'id' => $this->primaryKey(),
            'commId' => $this->integer()->notNull()->comment('ID комментария'),
            'userId' => $this->integer()->notNull()->comment('ID пользователя'),
        ], 'ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT \'Какие комментарии принадлежат каким пользователям\'');

        $this->createIndex('usercomm_index', 'usercomm_lookup', ['commId', 'userId'], true);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('usercomm_lookup');
    }
}

<?php

use yii\db\Migration;

/**
 * Handles the creation for table `categories`.
 */
class m160928_101733_create_categories_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('categories', [
            'id' => $this->primaryKey(),
            'name' => $this->string(30)->notNull()->comment('Имена категорий'),
        ], 'ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT \'Таблица категорий к товарам\'');

        $this->createIndex('name_index', 'categories', 'name');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('categories');
    }
}

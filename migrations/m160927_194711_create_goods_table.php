<?php

use yii\db\Migration;

/**
 * Handles the creation for table `goods`.
 */
class m160927_194711_create_goods_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('goods', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255)->notNull()->comment('Наименование товара'),
            'img' => $this->string(255)->comment('Изображение товара'),
            'desc' => $this->text()->notNull()->comment('Описание товара'),
            'price' => $this->decimal(10,2)->notNull()->comment('Цена товара'),
            'date' => $this->date()->notNull()->comment('Дата добавления товара на сайт'), 
        ], 'ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT \'Таблица товаров\'');

        $this->createIndex('title_index', 'goods', 'title');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('goods');
    }
}

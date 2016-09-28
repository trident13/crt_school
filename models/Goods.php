<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%goods}}".
 *
 * @property integer $id
 * @property string $title
 * @property string $img
 * @property string $desc
 * @property string $price
 * @property string $date
 *
 * @property GoodcatLookup $id0
 */
class Goods extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%goods}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'desc', 'price', 'date'], 'required'],
            [['desc'], 'string'],
            [['price'], 'number'],
            [['date'], 'safe'],
            [['title', 'img'], 'string', 'max' => 255],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => GoodcatLookup::className(), 'targetAttribute' => ['id' => 'goodId']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Наименование товара',
            'img' => 'Изображение товара',
            'desc' => 'Описание товара',
            'price' => 'Цена товара',
            'date' => 'Дата добавления товара на сайт',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(GoodcatLookup::className(), ['goodId' => 'id']);
    }

    /**
     * @inheritdoc
     * @return GoodsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new GoodsQuery(get_called_class());
    }
}

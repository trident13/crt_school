<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "goods".
 *
 * @property integer $id
 * @property string $title
 * @property string $img
 * @property string $desc
 * @property string $price
 * @property string $date
 *
 * @property GoodcatLookup[] $goodcatLookups
 * @property Categories[] $cats
 */
class Goods extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'goods';
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
    public function getGoodcatLookups()
    {
        return $this->hasMany(GoodcatLookup::className(), ['goodId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCats()
    {
        return $this->hasMany(Categories::className(), ['id' => 'catId'])->viaTable('goodcat_lookup', ['goodId' => 'id']);
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

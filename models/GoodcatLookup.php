<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%goodcat_lookup}}".
 *
 * @property integer $id
 * @property integer $goodId
 * @property integer $catId
 *
 * @property Goods $goods
 */
class GoodcatLookup extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%goodcat_lookup}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['goodId', 'catId'], 'required'],
            [['goodId', 'catId'], 'integer'],
            [['goodId', 'catId'], 'unique', 'targetAttribute' => ['goodId', 'catId'], 'message' => 'The combination of ID для товара and ID для категории has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'goodId' => 'ID для товара',
            'catId' => 'ID для категории',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGoods()
    {
        return $this->hasOne(Goods::className(), ['id' => 'goodId']);
    }

    /**
     * @inheritdoc
     * @return GoodcatLookupQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new GoodcatLookupQuery(get_called_class());
    }
}

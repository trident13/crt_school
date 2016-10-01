<?php

namespace app\modules\admin\models;

/**
 * This is the ActiveQuery class for [[GoodcatLookup]].
 *
 * @see GoodcatLookup
 */
class GoodcatLookupQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return GoodcatLookup[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return GoodcatLookup|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}

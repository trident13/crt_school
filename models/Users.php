<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%users}}".
 *
 * @property integer $id
 * @property string $nickname
 * @property string $email
 * @property string $password
 * @property string $authKey
 * @property string $accessToken
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%users}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nickname', 'email', 'password'], 'required'],
            [['nickname', 'email', 'password', 'authKey', 'accessToken'], 'string', 'max' => 255],
            [['password'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nickname' => 'Имя пользователя',
            'email' => 'E-mail пользователя',
            'password' => 'Пароль пользователя',
            'authKey' => 'Auth Key',
            'accessToken' => 'Access Token',
        ];
    }

    /**
     * @inheritdoc
     * @return UsersQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UsersQuery(get_called_class());
    }
}

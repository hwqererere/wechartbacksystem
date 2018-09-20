<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%login}}".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property int $state
 */
class Login extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%login}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password'], 'required'],
            [['state'], 'integer'],
            [['username', 'password'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'username' => Yii::t('app', 'Username'),
            'password' => Yii::t('app', 'Password'),
            'state' => Yii::t('app', 'State'),
        ];
    }

    /**
     * @inheritdoc
     * @return LoginQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new LoginQuery(get_called_class());
    }
}

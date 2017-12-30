<?php

namespace kouosl\Chat\models;

use Yii;

/**
 * This is the model class for table "account".
 *
 * @property int $id
 * @property string $name
 * @property string $surname
 * @property string $mail
 * @property string $password
 */
class Account extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'account';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'name', 'surname', 'mail', 'password'], 'required'],
            [['id'], 'integer'],
            [['name', 'surname'], 'string', 'max' => 20],
            [['mail'], 'string', 'max' => 30],
            [['password'], 'string', 'max' => 15],
            [['id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'surname' => 'Surname',
            'mail' => 'Mail',
            'password' => 'Password',
        ];
    }
}

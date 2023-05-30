<?php

namespace backend\models;

use Yii;

/**
 * Team：Novas
 * Author：刘嗣旸
 * Date：2023/2/9
 * Statement：后台用户管理
 */

/**
 * This is the model class for table "{{%account}}".
 *
 * @property int $aid
 * @property string $username
 * @property string $password
 */
class student extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%Stu_account}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password','registered'], 'required'],
            [['username', 'password','registered'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'aid' => 'Aid',
            'name' => 'Username',
            'password' => 'Password',
            'registered' => 'registered',

        ];
    }
}

<?php

namespace frontend\models;

use common\models\User;
use Yii;


/**
 * Statement：表示学生的账号信息
 */

/**
 * This is the model class for table "{{%stu_account}}".
 *
 * @property int $aid
 * @property string $username
 * @property string $password
 */
class Account extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     * 返回模型对应的数据库名
     */
    public static function tableName()
    {
        return '{{%stu_account}}';
    }

    /**
     * {@inheritdoc}
     * 返回模型的验证规则
     * 在这个方法中，定义了两个验证规则，分别是 username 和 password 必须存在，且不超过 255 个字符。
     */
    public function rules()
    {
        return [
            [['username', 'password'], 'required'],
            [['username', 'password'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     * 返回模型属性的标签名称
     */
    public function attributeLabels()
    {
        return [
            'aid' => 'Aid',
            'username' => 'Username',
            'password' => 'Password',
            'registered' => 'status',
        ];
    }

    /**
     * Summary of myFind
     * @param mixed $condition
     * @return array|bool
     * 自定义的查询方法，用于根据指定的条件查询学生账号信息
     */
    public function myFind($condition){
        return User::find()->where($condition)->one();
    }

    /**
     * @var int $registered 注册状态，1 表示已注册，0 表示未注册。
     */
    
    //public $registered = 0;
}

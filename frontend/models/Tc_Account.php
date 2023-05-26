<?php

namespace frontend\models;

use common\models\User;
use Yii;

/**
 * 说明：本模型类用于与数据库表 "{{%tc_account}}" 进行交互，提供账号相关的操作。
 */
class Tc_account extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     * 说明：指定本模型类对应的数据表名为 "{{%tc_account}}"。
     */
    public static function tableName()
    {
        return '{{%tc_account}}';
    }

    /**
     * {@inheritdoc}
     * 说明：定义本模型类的验证规则，要求 "username" 和 "password" 为必填项，且长度不超过 255。
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
     * 说明：定义本模型类各个属性的中文名称，用于在表单中显示。
     */
    public function attributeLabels()
    {
        return [
            'aid' => 'Aid',
            'username' => 'Username',
            'password' => 'Password',
        ];
    }

    /**
     * Summary of myFind
     * 说明：定义一个自定义的查询方法 myFind，用于查询用户信息。
     * @param mixed $condition 查询条件
     * @return array|bool 返回查询结果，如果没有找到，则返回 false。
     */
    public function myFind($condition){
        return User::find()->where($condition)->one();
    }
}
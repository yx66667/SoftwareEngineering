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
class student2 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%Testscore}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['student_name', 'choice_score','compo_score','trans_score','total_score'], 'required'],
            [['student_name', 'choice_score','compo_score','trans_score','total_score'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'student_name' => 'student_name',
            'choice_score' => 'choice_score',
            'compo_score' => 'compo_score',
            'total_score' => 'total_score',
            'total_score' => 'total_score',

        ];
    }
}

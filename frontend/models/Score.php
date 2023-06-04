<?php

namespace frontend\models;

use yii\db\ActiveRecord;

class Score extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%testscore}}';
    }
    
}

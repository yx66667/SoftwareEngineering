<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\UserManage */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-form">

    <?php $form = ActiveForm::begin(); ?>
  

    <?= $form->field($model, 'student_name')->textInput(['maxlength' => true, 'style' => 'width:600px']) ?>

    <?= $form->field($model, 'choice_score')->textInput(['maxlength' => true, 'style' => 'width:600px']) ?>

    <?= $form->field($model, 'compo_score')->textInput(['maxlength' => true, 'style' => 'width:600px']) ?>

    <?= $form->field($model, 'trans_score')->textInput(['maxlength' => true, 'style' => 'width:600px']) ?>

    <?= $form->field($model, 'total_score')->textInput(['maxlength' => true, 'style' => 'width:600px']) ?>

    

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    <dd><a href="/advanced/backend/web/index.php?r=login/user-admin">返回主页</a></dd>

</div>

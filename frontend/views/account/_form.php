<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<!-- 创建用户注册表单 -->
<div style="display: flex; justify-content: center; align-items: center; height: 70vh;">
    <div class="account-form" style="margin-top: 60px;">

        <?php $form = ActiveForm::begin(); ?>
            <?= $form->field($model, 'username')->textInput(['maxlength' => true, 'style' => 'width:400px;']) ?>

            <?= $form->field($model, 'password')->passwordInput(['maxlength' => true, 'style' => 'width:400px;']) ?>

        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>
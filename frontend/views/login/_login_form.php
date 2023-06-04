<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Account */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>


<div style="display: flex; justify-content: center; align-items: center; height: 75vh;">

    <div class="account-form">

        <h1><?= Html::encode('Login Please') ?></h1>

        <!-- 开始一个表单 -->
        <?php $form = ActiveForm::begin(); ?> 
        <!-- 两个文本框 -->
        <?= $form->field($model, 'username')->textInput(['maxlength' => true, 'style' => 'width:400px;']) ?>
        <?= $form->field($model, 'password')->passwordInput(['maxlength' => true, 'style' => 'width:400px;']) ?>
        <!-- 一个按钮 -->
        <div class="form-group">
            <?= Html::submitButton('Login', ['class' => 'btn btn-primary','name' => 'login-button']) ?>
        </div>
        <!-- 重置密码 -->
        <div style="color:#999;margin:1em 0">
            If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
        </div>
        <?php ActiveForm::end(); ?>

        <?php if (!$isLoginSuccess && !$isLogin): ?>
            <script>
                alert("Login failed!");
                document.getElementById("<?= Html::getInputId($model, 'username') ?>").value = "";
                document.getElementById("<?= Html::getInputId($model, 'password') ?>").value = "";
            </script>
        <?php endif; ?>

    </div>

</div>


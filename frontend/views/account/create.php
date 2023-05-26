<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Account */

//显示一个账户创建页面

$this->title = 'Create Account';
$this->params['breadcrumbs'][] = ['label' => 'Accounts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- <div class="account-create"> -->
<div class="account-create" style="text-align: center; padding-top: 50px;">

    <h1 style="margin-bottom: -90px;"><?= Html::encode($this->title) ?></h1>

    <!-- 渲染名为 "_form" 的视图文件，并将一个名为 "model" 的变量传递给该视图文件 -->
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

    <!-- 增加报错信息 -->
    <?php if (Yii::$app->session->hasFlash('error')): ?>
        <div class="alert alert-danger">
            <?= Yii::$app->session->getFlash('error') ?>
        </div>
    <?php endif; ?>

</div>

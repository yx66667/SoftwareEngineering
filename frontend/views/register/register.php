<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin(); ?>
<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li><a href="/advanced/frontend/web/">主页</a></li>
          <li><a href="/advanced/frontend/web/index.php?r=register/register">在线报名</a></li>
          <li><a href="/advanced/frontend/web/index.php?r=question/index">在线测试</a></li>
          <li><a href="/advanced/frontend/web/index.php?r=score/inquiry">成绩查询</a></li>
          <li><a href="/advanced/frontend/web/index.php?r=login/login">教师阅卷</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">登录/注册 <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="/advanced/backend/web/">切换至后台</a></li>
              <li><a href="/advanced/frontend/web/index.php?r=account/create">Signup</a></li>
              <li><a href="/advanced/frontend/web/index.php?r=login/login">Login</a></li>
              <li><a href="/advanced/frontend/web/">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </div>
  <h1 align="center" style="font-family: 宋体;">考试报名</h1>
  <h6 align="center" style="font-family: 宋体;">请输入姓名和身份证号</h6>
  <div style="display: flex; justify-content: center; align-items: center; height: 40vh;">
<?php if (Yii::$app->session->hasFlash('error')): ?>
    <?= Yii::$app->session->getFlash('error') ?>
<?php else: ?>
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'username')->textInput(['maxlength' => true, 'style' => 'width:400px;']) ?>
    <?= $form->field($model,'identity_number')->passwordInput(['maxlength' => true, 'style' => 'width:400px;']) ?>
    <div class="form-group">
        <?= Html::submitButton('报名', ['class' => 'btn btn-primary']) ?>
    </div>
    </br>
    <?php ActiveForm::end(); ?>
<?php endif; ?>
</div>

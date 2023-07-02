<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use app\models\Stu_account;
use frontend\models\Account;
?>
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

    <!-- 定义按钮 -->
     <style> #buttons 
    { 
        display: flex; 
        align-items: center; 
        justify-content: flex-start; 
        /* justify-content: center; */
    } 
    .container { text-align: left; } 
    .custom-button { 
        background-color: blue; 
        color: white; 
        padding: 15px 30px; 
        font-size: 18px; 
        border: none; cursor: pointer; 
        transition: background-color 0.3s; 
    } 
    .custom-button:hover 
    { background-color: purple; } 
    </style> 


<h1 align="center" style="font-family: 宋体;">在线测试</h1>
<h6 align="center" style="font-family: 宋体;">请输入姓名和准考证号</h6>
<div style="display: flex; justify-content: center; align-items: center; height: 40vh;">
<?php if (Yii::$app->session->hasFlash('error')): ?>
    <?= Yii::$app->session->getFlash('error') ?>
<?php else: ?>
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'username')->textInput(['maxlength' => true, 'style' => 'width:400px;']) ?>
    <?= $form->field($model, 'eid')->passwordInput(['maxlength' => true, 'style' => 'width:400px;']) ?>

    <div class="form-group">
        <?= Html::submitButton('开始考试', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>
<?php endif; ?>
</div>

<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use app\models\Stu_account;
use frontend\models\Account;

global $num;
$num = 0;

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
          <li><a href="/advanced/frontend/web/index.php?r=home/news">在线报名</a></li>
          <li><a href="/advanced/frontend/web/index.php?r=question/index">在线测试</a></li>
          <li><a href="/advanced/frontend/web/index.php?r=login/login">成绩查询</a></li>
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


<form id="form" method="post"
action="/advanced/frontend/web/index.php?r=question/question">
<br>
<br>
<br>
<br>
<p align="center" style="font-size:24px;">请输入姓名:</p>
<p align="center"><textarea cols="30" rows="1" name="name1"></textarea> </p>
<p align="center" style="font-size:24px;">请输入准考证号:</p>
<p align="center"><textarea cols="30" rows="1" name="testid1"></textarea></br></p>
<p align="center" style="font-size:20px;">

<p align="center"><span style="font-size: 30px"><input type="submit" value="开始考试" class="sub">
</br>
</br>
</br>
<input type="hidden" id="_csrf" name="<?PHP echo Yii::$app->request->csrfParam;?>" 
value="<?=\Yii::$app->request->csrfToken?>"/></span>
</p>

<?= LinkPager::widget(['pagination' => $pagination]) ?>

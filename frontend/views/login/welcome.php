<?php
$assetPath = Yii::$app->assetManager->getPublishedUrl('@frontend/assets');
$this->registerCssFile("{$assetPath}/css/site.css");
?>
<?php

use frontend\models\StaticVar;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Account */

// $this->title = $model->username;
$this->title = 'welcome,' . $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Accounts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Good - Bootstrap Corporate Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/flat-ui/css/flat-ui.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
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
          <!-- <li><a href="/advanced/frontend/web/index.php?r=login/login">教师阅卷</a></li> -->
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


  
  <!-- Aboutrwrap -->
  <!-- <div id="aboutwrap">
    <div class="container">
      <div class="row">
        <h1><br/> <b>欢迎</b>, <?= Html::encode($this->title) ?></h1>
      </div>
    </div>
  </div> -->
  <!-- /aboutrwrap -->


  <!-- Intro Section -->
  <!-- <div class="container sinfo">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2">
        <h4><b>Welcome</b>! Now you can use our services.</h4>
      </div>
    </div>
    <hr>
  </div> -->
  <!-- /container -->




  <div class="hello-index">
    <h1><?= Html::encode($this->title) ?></h1>

    <!-- 添加图片 -->
    <?= Html::img('@web/images/bg.png', ['alt' => 'My Image',
    'style' => 'width: 100%; height: auto;',]) ?>


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
        background-color: purple; 
        color: white; 
        padding: 15px 30px; 
        font-size: 18px; 
        border: none; cursor: pointer; 
        transition: background-color 0.3s; 
    } 
    .custom-button:hover 
    { background-color: darkviolet; } 
    </style> 
    

    <!-- 定义界面下半部分 -->
    <div class="container sinfo">
        <div class="row centered">
        <div class="col-lg-2">
            
        </div>
        <div class="col-lg-2">
            <!-- <p><img src="statics/img/txy.jpg" alt="" width="100px" height="100px"></p>
             -->
            <div id="buttons">
                <div class="container">
                <br>
                <a href="/advanced/frontend/web/index.php?r=login/login" class="custom-button">进入报名</a>
                <br>
                <br>
                <br>
                <a href="/advanced/frontend/web/index.php?r=account/create" class="custom-button">注册用户</a>
                <!-- <br>
                <br>
                <br>
                <a href="https://cet-bm.neea.edu.cn/Home/CommonProblem" class="custom-button">常见问题</a> -->
                <br>
                <br>
                <br>
                <a href="/advanced/frontend/web/index.php?r=question/index" class="custom-button">在线测试</a>
                <br>
                <br>
                <br>
                <a href="/advanced/frontend/web/index.php?r=login/login" class="custom-button">成绩查询</a>
                <br>
                <br>
                </div>
            </div>
        </div>
        <!-- col-lg-3 -->

        <div class="col-lg-2">
            <p><img src="images/bg2.png" alt=""  width="180px" height="250px"></p>
        </div>
        <!-- col-lg-3 -->

        <div class="col-lg-5">
            <div id="buttons">
                <div class="container">
                <br>
                <a href="/advanced/frontend/web/index.php" class="custom-button">CET考试最新动态</a>
                <br>
                <br>
                <!-- <b>2023年上半年考试时间：</b> -->
                <div style="padding:10px;line-height:1.4em;" class="main_info_l">
                    <b><h7>2023年上半年考试时间：</h7></b>
                    <ul style="margin-top: 0.3em;">
                        笔试：6-17<br>
                        上午：英语、日语、德语、俄语、法语四级<br>
                        下午：英语、日语、德语、俄语六级<br>
                        口语：<br>
                        5-20：英语四级</span><span style="padding-left:4em;">5-21：英语六级<br>
                    </ul>
                </div>
                <hr class="hr_line">
                <div style="padding:10px;line-height:1.6em;" class="main_info_l">
                    <b><h7>2023年上半年考试报名提示：</h7></b>
                    <ul style="margin-top:0.3em;">
                        1. 报名未开始前，考生可进行注册及学籍信息验证操作，个人信息错误请及时与所在学校有关部门联系更正。具体报名时间以各学校通知为准。<br>
                        2. 请在报名完成后24小时内完成缴费，并再次登录系统确认是否报名成功，如有疑问可拨打客服电话进行咨询。<br>
                        3. <span style="color:red;padding-right:0.2em;">关于调整全国大学英语四、六级口语考试成绩报告方式的通知：</span>[<a href="https://resource.neea.edu.cn/project/CET/News/CandidateNotice-CET-SET-Transcript.pdf?v=231.0" target="_blank">点击查看</a>]。<br>
                    </ul>
                </div>
            </div>  
        </div>
        <!-- col-lg-3 -->

        </div>
        <!-- /row -->
        <br>
        <hr>
    </div>
</div>

</body>
</html>


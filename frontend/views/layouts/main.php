
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Good - 互联网数据库开发Novas小组</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="statics/img/favicon.png" rel="icon">
  <link href="statics/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap CSS File -->
  <link href="statics/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="statics/lib/flat-ui/css/flat-ui.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="statics/css/style.css" rel="stylesheet">
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
          <li><a href="/advanced/frontend/web/index.php?r=login/login">在线报名</a></li>
          <li><a href="/advanced/frontend/web/index.php?r=login/login">在线测试</a></li>
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
  
  <?= $content ?> <!-- 这里就是view视图展示的内容，是可变的，和控制器相关-->

  <!-- /Footer -->

  <div id="copyrights">
    <div class="container">
      <p>WE小组制作</p>
      <p> &copy; Copyrights <strong>WE</strong>. All Rights Reserved - <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a>
      </p>
      <div class="credits">
      </div>
    </div>
  </div>
  <!-- / copyrights -->

  <!-- JavaScript Libraries -->
  <script src="statics/lib/jquery/jquery.min.js"></script>
  <script src="statics/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="statics/lib/php-mail-form/validate.js"></script>

  <!-- Template Main Javascript File -->
  <script src="statics/js/main.js"></script>

</body>
</html>

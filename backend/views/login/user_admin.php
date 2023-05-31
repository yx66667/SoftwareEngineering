<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\BackAccount */

// $this->title = $model->username;
// $this->params['breadcrumbs'][] = ['label' => 'Back Accounts', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
// \yii\web\YiiAsset::register($this);
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="statics/assets/css/layui.css">
    <link rel="stylesheet" href="statics/assets/css/view.css" />
    <link rel="icon" href="favicon.ico">
    <title>管理后台</title>
</head>

<body>
    <div class="layui-card-body">
        <div class="form-box">
            <div class="layui-form layui-form-item">
                <div class="layui-inline">
                    <!-- <div class="layui-form-mid">
                                    <h1></h1>
                                </div> -->
                    <div class="blogcontent">
                        <!-- First Post -->
                        <img class="img-responsive" src="statics\assets\images\blog-post03.jpg" alt="" style="width:1100px;height:200px;">
                        <h2><b>欢迎！管理员</b>
                            <!-- <?= Html::encode($this->title) ?> -->
                        </h2>
                        <small><span class="fui-user"></span> 小组名称 <span class="fui-calendar"></span>


                            <span class="fui-chat"><?php  echo date("Y-m-d H:i:s", time()+6*60*60);?></span> </small>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="login-container">

        <form class="login-form">
            <!-- <h3 align="center">教师信息管理</h3>
            <br>
            <h3 align="center">
                <a class="layui-btn layui-btn-blue" href="\advanced\backend\web\index.php?r=user-manage/index">确认</a>
            </h3>
            <br>
            <br>
            <br>
            <h3 align="center">学生信息管理</h3>
            <br>
            <h3 align="center">
                <a class="layui-btn layui-btn-blue" href="\advanced\backend\web\index.php?r=user-manage/index">确认</a>
            </h3>
            <br>
            <br>
            <br> -->
            <h3 align="center">进行教师信息管理</h3>
            <br>
            <h3 align="center">
                <a class="layui-btn layui-btn-blue" href="\advanced\backend\web\index.php?r=teacher/index">确认</a>
            </h3>
            <br>
            <br>
            <br>
            <h3 align="center">进行学生报名信息管理</h3>
            <br>
            <h3 align="center">
                <a class="layui-btn layui-btn-blue" href="\advanced\backend\web\index.php?r=student/index">确认</a>
            </h3>
            <br>
            <br>
            <br>
            <h3 align="center">进行学生成绩信息管理</h3>
            <br>
            <h3 align="center">
                <a class="layui-btn layui-btn-blue" href="\advanced\backend\web\index.php?r=student2/index">确认</a>
            </h3>
            <br>
            <br>
            <br>
            <h3 align="center">进行试卷管理</h3>
            <br>
            <h3 align="center">
            <a class="layui-btn layui-btn-blue" href="\advanced\backend\web\index.php?r=option/index">设置选择题答案</a>

                <a class="layui-btn layui-btn-blue" href="\advanced\backend\web\index.php?r=paper/index">试卷上传</a>
            </h3>
        </form>
    </div>
</body>
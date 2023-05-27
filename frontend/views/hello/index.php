<?php
$assetPath = Yii::$app->assetManager->getPublishedUrl('@frontend/assets');
$this->registerCssFile("{$assetPath}/css/site.css");
?>
<?php
use yii\helpers\Html;
// $this->title = '六级报考系统';
// $this->params['breadcrumbs'][] = $this->title;
?>

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
                <a href="/advanced/frontend/web/index.php?r=hello/index" class="custom-button">CET考试最新动态</a>
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

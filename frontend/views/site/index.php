<?php

/* @var $this yii\web\View */
namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use backend\models\messageshow;
$this->title = 'My Yii Application';
$messageshow= new messageshow();
// $newscom->id=6;
$sql="select*from messageshow";
$r=messageshow::findBySql($sql)->asArray()->all();
?>
<div class="site-index">
  <div id="headerwrap-2">
    <div class="container">
      <div class="row">
        <h1>Welcome to our site.<br/> <b>GOOD</b> to see you.</h1>
      </div>
    </div>
  </div>
  <!-- /Headerwrap -->

  <!-- Call To Action -->
  <div id="cta">
    <div class="container centered">
      <h3>Welcome to our new corporate site.</h3>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
      <br>
      
    </div>
    <!-- /container -->
  </div>
  <!-- /cta -->


  <!-- Services Section -->
  <div class="container sinfo">
    <div class="row centered">
      <h4>小组成员展示板</h4>
      <br>
      <br>
      <div class="col-lg-3">
        <p><img src="statics/img/txy.jpg" alt="" width="100px" height="100px"></p>
        <p><?php echo $r[0]["name"]."&nbsp&nbsp&nbsp&nbsp".$r[0]["stu_id"]?></p>
        <p><?php echo $r[0]["major"]?></p>
        <p><?php echo $r[0]["per_message"]?></p>
        <p><?php echo $r[0]["per_part"]?></p>
        <li><a href="/advanced/data/personal/txy/作业1(2011748_田翔宇).zip" download>个人作业1下载</a></li>
        <li><a href="/advanced/data/personal/txy/作业2(2011748_田翔宇).zip" download>个人作业2下载</a></li>
        <li><a href="/advanced/data/personal/txy/作业3(2011748_田翔宇).zip" download>个人作业3下载</a></li> 
      </div>
      <!-- col-lg-3 -->

      <div class="col-lg-3">
        <p><img src="statics/img/yh.jpg" alt=""  width="100px" height="100px"></p>
        <p><?php echo $r[1]["name"]."&nbsp&nbsp&nbsp&nbsp".$r[1]["stu_id"]?></p>
        <p><?php echo $r[1]["major"]?></p>
        <p><?php echo $r[1]["per_message"]?></p>
        <p><?php echo $r[1]["per_part"]?></p>
        <li><a href="/advanced/data/personal/yh/作业1(2013459_颜欢).zip" download>个人作业1下载</a></li>
        <li><a href="/advanced/data/personal/yh/作业2(2013459_颜欢).zip" download>个人作业2下载</a></li>
        <li><a href="/advanced/data/personal/yh/作业3(2013459_颜欢).zip" download>个人作业3下载</a></li> 
      </div>
      <!-- col-lg-3 -->

      <div class="col-lg-3">
        <p><img src="statics/img/lsy.png" alt="" width="100px" height="100px"></p>
        <p><?php echo $r[2]["name"]."&nbsp&nbsp&nbsp&nbsp".$r[2]["stu_id"]?></p>
        <p><?php echo $r[2]["major"]?></p>
        <p><?php echo $r[2]["per_message"]?></p>
        <p><?php echo $r[2]["per_part"]?></p>   
        <li><a href="/advanced/data/personal/lsy/作业1(2013458_刘嗣旸).zip" download>个人作业1下载</a></li>
        <li><a href="/advanced/data/personal/lsy/作业2(2013458_刘嗣旸).zip" download>个人作业2下载</a></li>
        <li><a href="/advanced/data/personal/lsy/作业3(2013458_刘嗣旸).zip" download>个人作业3下载</a></li>     
      </div>
      <!-- col-lg-3 -->

      <div class="col-lg-3">
        <p><img src="statics/img/shn.png" alt="" width="100px" height="100px"></p>
        <p><?php echo $r[3]["name"]."&nbsp&nbsp&nbsp&nbsp".$r[3]["stu_id"]?></p>
        <p><?php echo $r[3]["major"]?></p>
        <p><?php echo $r[3]["per_message"]?></p>
        <p><?php echo $r[3]["per_part"]?></p>        
        <li><a href="/advanced/data/personal/shn/作业1(2013350_施浩南).zip" download>个人作业1下载</a></li>
        <li><a href="/advanced/data/personal/shn/作业2(2013350_施浩南).zip" download>个人作业2下载</a></li>
        <li><a href="/advanced/data/personal/shn/作业3(2013350_施浩南).zip" download>个人作业3下载</a></li>    
      </div>
      <!-- col-lg-3 -->

    </div>
    <!-- /row -->
    <br>
    <hr>
  </div>
  <!-- /container -->
</div>

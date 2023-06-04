<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use app\models\Testscore;

global $num;
$num = 0;
global $testscore;
$testscore = new Testscore();
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
<img class="img-responsive" src="statics\img\answer.jpg" alt="" style="width:1400px;height:400px;">
<ul>
<h2>考试结束！为您展示答案：</h2>

<p style="font-size:20px;">
<?php 
$testscore->student_name=$_POST["name"];
$testscore->id=$_POST["testid"];
$testscore->composition=$_POST["composition"];
?>
</p>
<p style="font-size:20px;">
<?php
if($_POST["q1"]==$trueans[0]->TF)
{
    $num = $num + 7.1;
    echo "第1题正确！";
}
else{
  echo "第1题错误！";
}
if($trueans[0]->TF==1)
{
  echo "本题正确答案为A";
}elseif($trueans[0]->TF==2){
  echo "本题正确答案为B";
}
elseif($trueans[0]->TF==3){
  echo "本题正确答案为C";
}else{
  echo "本题正确答案为D";
}
?>
</p>

<p style="font-size:20px;">
<?php
if($_POST["q2"]==$trueans[1]->TF)
{
    $num = $num + 7.1;
    echo "第2题正确！";
}
else{
  echo "第2题错误！";
}
if($trueans[1]->TF==1)
{
  echo "本题正确答案为A";
}elseif($trueans[1]->TF==2){
  echo "本题正确答案为B";
}
elseif($trueans[1]->TF==3){
  echo "本题正确答案为C";
}else{
  echo "本题正确答案为D";
}
?>
</p>

<p style="font-size:20px;">
<?php
if($_POST["q3"]==$trueans[2]->TF)
{
    $num = $num + 7.1;
    echo "第3题正确！";
}
else{
  echo "第3题错误！";
}
if($trueans[2]->TF==1)
{
  echo "本题正确答案为A";
}elseif($trueans[2]->TF==2){
  echo "本题正确答案为B";
}
elseif($trueans[2]->TF==3){
  echo "本题正确答案为C";
}else{
  echo "本题正确答案为D";
}
?>
</p>

<p style="font-size:20px;">
<?php
if($_POST["q4"]==$trueans[3]->TF)
{
    $num = $num + 7.1;
    echo "第4题正确！";
}
else{
  echo "第4题错误！";
}
if($trueans[3]->TF==1)
{
  echo "本题正确答案为A";
}elseif($trueans[3]->TF==2){
  echo "本题正确答案为B";
}
elseif($trueans[3]->TF==3){
  echo "本题正确答案为C";
}else{
  echo "本题正确答案为D";
}
?>
</p>

<p style="font-size:20px;">
<?php
if($_POST["q5"]==$trueans[4]->TF)
{
    $num = $num + 7.1;
    echo "第5题正确！";
}
else{
  echo "第5题错误！";
}
if($trueans[4]->TF==1)
{
  echo "本题正确答案为A";
}elseif($trueans[4]->TF==2){
  echo "本题正确答案为B";
}
elseif($trueans[4]->TF==3){
  echo "本题正确答案为C";
}else{
  echo "本题正确答案为D";
}
?>
</p>

<p style="font-size:20px;">
<?php
if($_POST["q6"]==$trueans[5]->TF)
{
    $num = $num + 7.1;
    echo "第6题正确！";
}
else{
  echo "第6题错误！";
}
if($trueans[5]->TF==1)
{
  echo "本题正确答案为A";
}elseif($trueans[5]->TF==2){
  echo "本题正确答案为B";
}
elseif($trueans[5]->TF==3){
  echo "本题正确答案为C";
}else{
  echo "本题正确答案为D";
}
?>
</p>

<p style="font-size:20px;">
<?php
if($_POST["q7"]==$trueans[6]->TF)
{
    $num = $num + 7.1;
    echo "第7题正确！";
}
else{
  echo "第7题错误！";
}
if($trueans[6]->TF==1)
{
  echo "本题正确答案为A";
}elseif($trueans[6]->TF==2){
  echo "本题正确答案为B";
}
elseif($trueans[6]->TF==3){
  echo "本题正确答案为C";
}else{
  echo "本题正确答案为D";
}
?>
</p>

<p style="font-size:20px;">
<?php
if($_POST["q8"]==$trueans[7]->TF)
{
    $num = $num + 7.1;
    echo "第8题正确！";
}
else{
  echo "第8题错误！";
}
if($trueans[7]->TF==1)
{
  echo "本题正确答案为A";
}elseif($trueans[7]->TF==2){
  echo "本题正确答案为B";
}
elseif($trueans[7]->TF==3){
  echo "本题正确答案为C";
}else{
  echo "本题正确答案为D";
}
?>
</p>

<p style="font-size:20px;">
<?php
if($_POST["q9"]==$trueans[8]->TF)
{
    $num = $num + 7.1;
    echo "第9题正确！";
}
else{
  echo "第9题错误！";
}
if($trueans[8]->TF==1)
{
  echo "本题正确答案为A";
}elseif($trueans[8]->TF==2){
  echo "本题正确答案为B";
}
elseif($trueans[8]->TF==3){
  echo "本题正确答案为C";
}else{
  echo "本题正确答案为D";
}
?>
</p>

<p style="font-size:20px;">
<?php
if($_POST["q10"]==$trueans[9]->TF)
{
    $num = $num + 7.1;
    echo "第10题正确！";
}
else{
  echo "第10题错误！";
}
if($trueans[9]->TF==1)
{
  echo "本题正确答案为A";
}elseif($trueans[9]->TF==2){
  echo "本题正确答案为B";
}
elseif($trueans[9]->TF==3){
  echo "本题正确答案为C";
}else{
  echo "本题正确答案为D";
}
?>
</p>

<p style="font-size:20px;">
<?php
if($_POST["q11"]==$trueans[10]->TF)
{
    $num = $num + 7.1;
    echo "第11题正确！";
}
else{
  echo "第11题错误！";
}
if($trueans[10]->TF==1)
{
  echo "本题正确答案为A";
}elseif($trueans[10]->TF==2){
  echo "本题正确答案为B";
}
elseif($trueans[10]->TF==3){
  echo "本题正确答案为C";
}else{
  echo "本题正确答案为D";
}
?>
</p>

<p style="font-size:20px;">
<?php
if($_POST["q12"]==$trueans[11]->TF)
{
    $num = $num + 7.1;
    echo "第12题正确！";
}
else{
  echo "第12题错误！";
}
if($trueans[11]->TF==1)
{
  echo "本题正确答案为A";
}elseif($trueans[11]->TF==2){
  echo "本题正确答案为B";
}
elseif($trueans[11]->TF==3){
  echo "本题正确答案为C";
}else{
  echo "本题正确答案为D";
}
?>
</p>

<p style="font-size:20px;">
<?php
if($_POST["q13"]==$trueans[12]->TF)
{
    $num = $num + 7.1;
    echo "第13题正确！";
}
else{
  echo "第13题错误！";
}
if($trueans[12]->TF==1)
{
  echo "本题正确答案为A";
}elseif($trueans[12]->TF==2){
  echo "本题正确答案为B";
}
elseif($trueans[12]->TF==3){
  echo "本题正确答案为C";
}else{
  echo "本题正确答案为D";
}
?>
</p>

<p style="font-size:20px;">
<?php
if($_POST["q14"]==$trueans[13]->TF)
{
    $num = $num + 7.1;
    echo "第14题正确！";
}
else{
  echo "第14题错误！";
}
if($trueans[13]->TF==1)
{
  echo "本题正确答案为A";
}elseif($trueans[13]->TF==2){
  echo "本题正确答案为B";
}
elseif($trueans[13]->TF==3){
  echo "本题正确答案为C";
}else{
  echo "本题正确答案为D";
}
?>
</p>

<p style="font-size:20px;">
<?php
if($_POST["q15"]==$trueans[14]->TF)
{
    $num = $num + 7.1;
    echo "第15题正确！";
}
else{
  echo "第15题错误！";
}
if($trueans[14]->TF==1)
{
  echo "本题正确答案为A";
}elseif($trueans[14]->TF==2){
  echo "本题正确答案为B";
}
elseif($trueans[14]->TF==3){
  echo "本题正确答案为C";
}else{
  echo "本题正确答案为D";
}
?>
</p>

<p style="font-size:20px;">
<?php
if($_POST["q16"]==$trueans[15]->TF)
{
    $num = $num + 14.2;
    echo "第16题正确！";
}
else{
  echo "第16题错误！";
}
if($trueans[15]->TF==1)
{
  echo "本题正确答案为A";
}elseif($trueans[15]->TF==2){
  echo "本题正确答案为B";
}
elseif($trueans[15]->TF==3){
  echo "本题正确答案为C";
}else{
  echo "本题正确答案为D";
}
?>
</p>

<p style="font-size:20px;">
<?php
if($_POST["q17"]==$trueans[16]->TF)
{
    $num = $num + 14.2;
    echo "第17题正确！";
}
else{
  echo "第17题错误！";
}
if($trueans[16]->TF==1)
{
  echo "本题正确答案为A";
}elseif($trueans[16]->TF==2){
  echo "本题正确答案为B";
}
elseif($trueans[16]->TF==3){
  echo "本题正确答案为C";
}else{
  echo "本题正确答案为D";
}
?>
</p>

<p style="font-size:20px;">
<?php
if($_POST["q18"]==$trueans[17]->TF)
{
    $num = $num + 14.2;
    echo "第18题正确！";
}
else{
  echo "第18题错误！";
}
if($trueans[17]->TF==1)
{
  echo "本题正确答案为A";
}elseif($trueans[17]->TF==2){
  echo "本题正确答案为B";
}
elseif($trueans[17]->TF==3){
  echo "本题正确答案为C";
}else{
  echo "本题正确答案为D";
}
?>
</p>

<p style="font-size:20px;">
<?php
if($_POST["q19"]==$trueans[18]->TF)
{
    $num = $num + 14.2;
    echo "第19题正确！";
}
else{
  echo "第19题错误！";
}
if($trueans[18]->TF==1)
{
  echo "本题正确答案为A";
}elseif($trueans[18]->TF==2){
  echo "本题正确答案为B";
}
elseif($trueans[18]->TF==3){
  echo "本题正确答案为C";
}else{
  echo "本题正确答案为D";
}
?>
</p>

<p style="font-size:20px;">
<?php
if($_POST["q20"]==$trueans[19]->TF)
{
    $num = $num + 14.2;
    echo "第20题正确！";
}
else{
  echo "第20题错误！";
}
if($trueans[19]->TF==1)
{
  echo "本题正确答案为A";
}elseif($trueans[19]->TF==2){
  echo "本题正确答案为B";
}
elseif($trueans[19]->TF==3){
  echo "本题正确答案为C";
}else{
  echo "本题正确答案为D";
}
?>
</p>

<p style="font-size:20px;">
<?php
if($_POST["q21"]==$trueans[20]->TF)
{
    $num = $num + 14.2;
    echo "第21题正确！";
}
else{
  echo "第21题错误！";
}
if($trueans[20]->TF==1)
{
  echo "本题正确答案为A";
}elseif($trueans[20]->TF==2){
  echo "本题正确答案为B";
}
elseif($trueans[20]->TF==3){
  echo "本题正确答案为C";
}else{
  echo "本题正确答案为D";
}
?>
</p>

<p style="font-size:20px;">
<?php
if($_POST["q22"]==$trueans[21]->TF)
{
    $num = $num + 14.2;
    echo "第22题正确！";
}
else{
  echo "第22题错误！";
}
if($trueans[21]->TF==1)
{
  echo "本题正确答案为A";
}elseif($trueans[21]->TF==2){
  echo "本题正确答案为B";
}
elseif($trueans[21]->TF==3){
  echo "本题正确答案为C";
}else{
  echo "本题正确答案为D";
}
?>
</p>

<p style="font-size:20px;">
<?php
if($_POST["q23"]==$trueans[22]->TF)
{
    $num = $num + 14.2;
    echo "第23题正确！";
}
else{
  echo "第23题错误！";
}
if($trueans[22]->TF==1)
{
  echo "本题正确答案为A";
}elseif($trueans[22]->TF==2){
  echo "本题正确答案为B";
}
elseif($trueans[22]->TF==3){
  echo "本题正确答案为C";
}else{
  echo "本题正确答案为D";
}
?>
</p>

<p style="font-size:20px;">
<?php
if($_POST["q24"]==$trueans[23]->TF)
{
    $num = $num + 14.2;
    echo "第24题正确！";
}
else{
  echo "第24题错误！";
}
if($trueans[23]->TF==1)
{
  echo "本题正确答案为A";
}elseif($trueans[23]->TF==2){
  echo "本题正确答案为B";
}
elseif($trueans[23]->TF==3){
  echo "本题正确答案为C";
}else{
  echo "本题正确答案为D";
}
?>
</p>

<p style="font-size:20px;">
<?php
if($_POST["q25"]==$trueans[24]->TF)
{
    $num = $num + 14.2;
    echo "第25题正确！";
}
else{
  echo "第25题错误！";
}
if($trueans[24]->TF==1)
{
  echo "本题正确答案为A";
}elseif($trueans[24]->TF==2){
  echo "本题正确答案为B";
}
elseif($trueans[24]->TF==3){
  echo "本题正确答案为C";
}else{
  echo "本题正确答案为D";
}
?>
</p>

<p style="font-size:20px;">
<?php
if($_POST["q26"]==$trueans[25]->TF)
{
    $num = $num + 3.55;
    echo "第26题正确！";
}
else{
  echo "第26题错误！";
}
if($trueans[25]->TF==1)
{
  echo "本题正确答案为A";
}elseif($trueans[25]->TF==2){
  echo "本题正确答案为B";
}elseif($trueans[25]->TF==3){
  echo "本题正确答案为C";
}elseif($trueans[25]->TF==4){
  echo "本题正确答案为D";
}elseif($trueans[25]->TF==5){
  echo "本题正确答案为E";
}elseif($trueans[25]->TF==6){
  echo "本题正确答案为F";
}elseif($trueans[25]->TF==7){
  echo "本题正确答案为G";
}elseif($trueans[25]->TF==8){
  echo "本题正确答案为H";
}elseif($trueans[25]->TF==9){
  echo "本题正确答案为I";
}elseif($trueans[25]->TF==10){
  echo "本题正确答案为J";
}elseif($trueans[25]->TF==11){
  echo "本题正确答案为K";
}elseif($trueans[25]->TF==12){
  echo "本题正确答案为L";
}elseif($trueans[25]->TF==13){
  echo "本题正确答案为M";
}elseif($trueans[25]->TF==14){
  echo "本题正确答案为N";
}else{
  echo "本题正确答案为O";
}
?>
</p>

<p style="font-size:20px;">
<?php
if($_POST["q27"]==$trueans[26]->TF)
{
    $num = $num + 3.55;
    echo "第27题正确！";
}
else{
  echo "第27题错误！";
}
if($trueans[26]->TF==1)
{
  echo "本题正确答案为A";
}elseif($trueans[26]->TF==2){
  echo "本题正确答案为B";
}elseif($trueans[26]->TF==3){
  echo "本题正确答案为C";
}elseif($trueans[26]->TF==4){
  echo "本题正确答案为D";
}elseif($trueans[26]->TF==5){
  echo "本题正确答案为E";
}elseif($trueans[26]->TF==6){
  echo "本题正确答案为F";
}elseif($trueans[26]->TF==7){
  echo "本题正确答案为G";
}elseif($trueans[26]->TF==8){
  echo "本题正确答案为H";
}elseif($trueans[26]->TF==9){
  echo "本题正确答案为I";
}elseif($trueans[26]->TF==10){
  echo "本题正确答案为J";
}elseif($trueans[26]->TF==11){
  echo "本题正确答案为K";
}elseif($trueans[26]->TF==12){
  echo "本题正确答案为L";
}elseif($trueans[26]->TF==13){
  echo "本题正确答案为M";
}elseif($trueans[26]->TF==14){
  echo "本题正确答案为N";
}else{
  echo "本题正确答案为O";
}
?>
</p>

<p style="font-size:20px;">
<?php
if($_POST["q28"]==$trueans[27]->TF)
{
    $num = $num + 3.55;
    echo "第28题正确！";
}
else{
  echo "第28题错误！";
}
if($trueans[27]->TF==1)
{
  echo "本题正确答案为A";
}elseif($trueans[27]->TF==2){
  echo "本题正确答案为B";
}elseif($trueans[27]->TF==3){
  echo "本题正确答案为C";
}elseif($trueans[27]->TF==4){
  echo "本题正确答案为D";
}elseif($trueans[27]->TF==5){
  echo "本题正确答案为E";
}elseif($trueans[27]->TF==6){
  echo "本题正确答案为F";
}elseif($trueans[27]->TF==7){
  echo "本题正确答案为G";
}elseif($trueans[27]->TF==8){
  echo "本题正确答案为H";
}elseif($trueans[27]->TF==9){
  echo "本题正确答案为I";
}elseif($trueans[27]->TF==10){
  echo "本题正确答案为J";
}elseif($trueans[27]->TF==11){
  echo "本题正确答案为K";
}elseif($trueans[27]->TF==12){
  echo "本题正确答案为L";
}elseif($trueans[27]->TF==13){
  echo "本题正确答案为M";
}elseif($trueans[27]->TF==14){
  echo "本题正确答案为N";
}else{
  echo "本题正确答案为O";
}
?>
</p>

<p style="font-size:20px;">
<?php
if($_POST["q29"]==$trueans[28]->TF)
{
    $num = $num + 3.55;
    echo "第29题正确！";
}
else{
  echo "第29题错误！";
}
if($trueans[28]->TF==1)
{
  echo "本题正确答案为A";
}elseif($trueans[28]->TF==2){
  echo "本题正确答案为B";
}elseif($trueans[28]->TF==3){
  echo "本题正确答案为C";
}elseif($trueans[28]->TF==4){
  echo "本题正确答案为D";
}elseif($trueans[28]->TF==5){
  echo "本题正确答案为E";
}elseif($trueans[28]->TF==6){
  echo "本题正确答案为F";
}elseif($trueans[28]->TF==7){
  echo "本题正确答案为G";
}elseif($trueans[28]->TF==8){
  echo "本题正确答案为H";
}elseif($trueans[28]->TF==9){
  echo "本题正确答案为I";
}elseif($trueans[28]->TF==10){
  echo "本题正确答案为J";
}elseif($trueans[28]->TF==11){
  echo "本题正确答案为K";
}elseif($trueans[28]->TF==12){
  echo "本题正确答案为L";
}elseif($trueans[28]->TF==13){
  echo "本题正确答案为M";
}elseif($trueans[28]->TF==14){
  echo "本题正确答案为N";
}else{
  echo "本题正确答案为O";
}
?>
</p>

<p style="font-size:20px;">
<?php
if($_POST["q30"]==$trueans[29]->TF)
{
    $num = $num + 3.55;
    echo "第30题正确！";
}
else{
  echo "第30题错误！";
}
if($trueans[29]->TF==1)
{
  echo "本题正确答案为A";
}elseif($trueans[29]->TF==2){
  echo "本题正确答案为B";
}elseif($trueans[29]->TF==3){
  echo "本题正确答案为C";
}elseif($trueans[29]->TF==4){
  echo "本题正确答案为D";
}elseif($trueans[29]->TF==5){
  echo "本题正确答案为E";
}elseif($trueans[29]->TF==6){
  echo "本题正确答案为F";
}elseif($trueans[29]->TF==7){
  echo "本题正确答案为G";
}elseif($trueans[29]->TF==8){
  echo "本题正确答案为H";
}elseif($trueans[29]->TF==9){
  echo "本题正确答案为I";
}elseif($trueans[29]->TF==10){
  echo "本题正确答案为J";
}elseif($trueans[29]->TF==11){
  echo "本题正确答案为K";
}elseif($trueans[29]->TF==12){
  echo "本题正确答案为L";
}elseif($trueans[29]->TF==13){
  echo "本题正确答案为M";
}elseif($trueans[29]->TF==14){
  echo "本题正确答案为N";
}else{
  echo "本题正确答案为O";
}
?>
</p>

<p style="font-size:20px;">
<?php
if($_POST["q31"]==$trueans[30]->TF)
{
    $num = $num + 3.55;
    echo "第31题正确！";
}
else{
  echo "第31题错误！";
}
if($trueans[30]->TF==1)
{
  echo "本题正确答案为A";
}elseif($trueans[30]->TF==2){
  echo "本题正确答案为B";
}elseif($trueans[30]->TF==3){
  echo "本题正确答案为C";
}elseif($trueans[30]->TF==4){
  echo "本题正确答案为D";
}elseif($trueans[30]->TF==5){
  echo "本题正确答案为E";
}elseif($trueans[30]->TF==6){
  echo "本题正确答案为F";
}elseif($trueans[30]->TF==7){
  echo "本题正确答案为G";
}elseif($trueans[30]->TF==8){
  echo "本题正确答案为H";
}elseif($trueans[30]->TF==9){
  echo "本题正确答案为I";
}elseif($trueans[30]->TF==10){
  echo "本题正确答案为J";
}elseif($trueans[30]->TF==11){
  echo "本题正确答案为K";
}elseif($trueans[30]->TF==12){
  echo "本题正确答案为L";
}elseif($trueans[30]->TF==13){
  echo "本题正确答案为M";
}elseif($trueans[30]->TF==14){
  echo "本题正确答案为N";
}else{
  echo "本题正确答案为O";
}
?>
</p>

<p style="font-size:20px;">
<?php
if($_POST["q32"]==$trueans[31]->TF)
{
    $num = $num + 3.55;
    echo "第32题正确！";
}
else{
  echo "第32题错误！";
}
if($trueans[31]->TF==1)
{
  echo "本题正确答案为A";
}elseif($trueans[31]->TF==2){
  echo "本题正确答案为B";
}elseif($trueans[31]->TF==3){
  echo "本题正确答案为C";
}elseif($trueans[31]->TF==4){
  echo "本题正确答案为D";
}elseif($trueans[31]->TF==5){
  echo "本题正确答案为E";
}elseif($trueans[31]->TF==6){
  echo "本题正确答案为F";
}elseif($trueans[31]->TF==7){
  echo "本题正确答案为G";
}elseif($trueans[31]->TF==8){
  echo "本题正确答案为H";
}elseif($trueans[31]->TF==9){
  echo "本题正确答案为I";
}elseif($trueans[31]->TF==10){
  echo "本题正确答案为J";
}elseif($trueans[31]->TF==11){
  echo "本题正确答案为K";
}elseif($trueans[31]->TF==12){
  echo "本题正确答案为L";
}elseif($trueans[31]->TF==13){
  echo "本题正确答案为M";
}elseif($trueans[31]->TF==14){
  echo "本题正确答案为N";
}else{
  echo "本题正确答案为O";
}
?>
</p>

<p style="font-size:20px;">
<?php
if($_POST["q33"]==$trueans[32]->TF)
{
    $num = $num + 3.55;
    echo "第33题正确！";
}
else{
  echo "第33题错误！";
}
if($trueans[32]->TF==1)
{
  echo "本题正确答案为A";
}elseif($trueans[32]->TF==2){
  echo "本题正确答案为B";
}elseif($trueans[32]->TF==3){
  echo "本题正确答案为C";
}elseif($trueans[32]->TF==4){
  echo "本题正确答案为D";
}elseif($trueans[32]->TF==5){
  echo "本题正确答案为E";
}elseif($trueans[32]->TF==6){
  echo "本题正确答案为F";
}elseif($trueans[32]->TF==7){
  echo "本题正确答案为G";
}elseif($trueans[32]->TF==8){
  echo "本题正确答案为H";
}elseif($trueans[32]->TF==9){
  echo "本题正确答案为I";
}elseif($trueans[32]->TF==10){
  echo "本题正确答案为J";
}elseif($trueans[32]->TF==11){
  echo "本题正确答案为K";
}elseif($trueans[32]->TF==12){
  echo "本题正确答案为L";
}elseif($trueans[32]->TF==13){
  echo "本题正确答案为M";
}elseif($trueans[32]->TF==14){
  echo "本题正确答案为N";
}else{
  echo "本题正确答案为O";
}
?>
</p>

<p style="font-size:20px;">
<?php
if($_POST["q34"]==$trueans[33]->TF)
{
    $num = $num + 3.55;
    echo "第34题正确！";
}
else{
  echo "第34题错误！";
}
if($trueans[33]->TF==1)
{
  echo "本题正确答案为A";
}elseif($trueans[33]->TF==2){
  echo "本题正确答案为B";
}elseif($trueans[33]->TF==3){
  echo "本题正确答案为C";
}elseif($trueans[33]->TF==4){
  echo "本题正确答案为D";
}elseif($trueans[33]->TF==5){
  echo "本题正确答案为E";
}elseif($trueans[33]->TF==6){
  echo "本题正确答案为F";
}elseif($trueans[33]->TF==7){
  echo "本题正确答案为G";
}elseif($trueans[33]->TF==8){
  echo "本题正确答案为H";
}elseif($trueans[33]->TF==9){
  echo "本题正确答案为I";
}elseif($trueans[33]->TF==10){
  echo "本题正确答案为J";
}elseif($trueans[33]->TF==11){
  echo "本题正确答案为K";
}elseif($trueans[33]->TF==12){
  echo "本题正确答案为L";
}elseif($trueans[33]->TF==13){
  echo "本题正确答案为M";
}elseif($trueans[33]->TF==14){
  echo "本题正确答案为N";
}else{
  echo "本题正确答案为O";
}
?>
</p>

<p style="font-size:20px;">
<?php
if($_POST["q35"]==$trueans[34]->TF)
{
    $num = $num + 3.55;
    echo "第35题正确！";
}
else{
  echo "第35题错误！";
}
if($trueans[34]->TF==1)
{
  echo "本题正确答案为A";
}elseif($trueans[34]->TF==2){
  echo "本题正确答案为B";
}elseif($trueans[34]->TF==3){
  echo "本题正确答案为C";
}elseif($trueans[34]->TF==4){
  echo "本题正确答案为D";
}elseif($trueans[34]->TF==5){
  echo "本题正确答案为E";
}elseif($trueans[34]->TF==6){
  echo "本题正确答案为F";
}elseif($trueans[34]->TF==7){
  echo "本题正确答案为G";
}elseif($trueans[34]->TF==8){
  echo "本题正确答案为H";
}elseif($trueans[34]->TF==9){
  echo "本题正确答案为I";
}elseif($trueans[34]->TF==10){
  echo "本题正确答案为J";
}elseif($trueans[34]->TF==11){
  echo "本题正确答案为K";
}elseif($trueans[34]->TF==12){
  echo "本题正确答案为L";
}elseif($trueans[34]->TF==13){
  echo "本题正确答案为M";
}elseif($trueans[34]->TF==14){
  echo "本题正确答案为N";
}else{
  echo "本题正确答案为O";
}
?>
</p>

<p style="font-size:20px;">
<?php
if($_POST["q36"]==$trueans[35]->TF)
{
    $num = $num + 7.1;
    echo "第36题正确！";
}
else{
  echo "第36题错误！";
}
if($trueans[35]->TF==1)
{
  echo "本题正确答案为A";
}elseif($trueans[35]->TF==2){
  echo "本题正确答案为B";
}elseif($trueans[35]->TF==3){
  echo "本题正确答案为C";
}elseif($trueans[35]->TF==4){
  echo "本题正确答案为D";
}elseif($trueans[35]->TF==5){
  echo "本题正确答案为E";
}elseif($trueans[35]->TF==6){
  echo "本题正确答案为F";
}elseif($trueans[35]->TF==7){
  echo "本题正确答案为G";
}elseif($trueans[35]->TF==8){
  echo "本题正确答案为H";
}elseif($trueans[35]->TF==9){
  echo "本题正确答案为I";
}elseif($trueans[35]->TF==10){
  echo "本题正确答案为J";
}elseif($trueans[35]->TF==11){
  echo "本题正确答案为K";
}else{
  echo "本题正确答案为L";
}
?>
</p>

<p style="font-size:20px;">
<?php
if($_POST["q37"]==$trueans[36]->TF)
{
    $num = $num + 7.1;
    echo "第37题正确！";
}
else{
  echo "第37题错误！";
}
if($trueans[36]->TF==1)
{
  echo "本题正确答案为A";
}elseif($trueans[36]->TF==2){
  echo "本题正确答案为B";
}elseif($trueans[36]->TF==3){
  echo "本题正确答案为C";
}elseif($trueans[36]->TF==4){
  echo "本题正确答案为D";
}elseif($trueans[36]->TF==5){
  echo "本题正确答案为E";
}elseif($trueans[36]->TF==6){
  echo "本题正确答案为F";
}elseif($trueans[36]->TF==7){
  echo "本题正确答案为G";
}elseif($trueans[36]->TF==8){
  echo "本题正确答案为H";
}elseif($trueans[36]->TF==9){
  echo "本题正确答案为I";
}elseif($trueans[36]->TF==10){
  echo "本题正确答案为J";
}elseif($trueans[36]->TF==11){
  echo "本题正确答案为K";
}else{
  echo "本题正确答案为L";
}
?>
</p>

<p style="font-size:20px;">
<?php
if($_POST["q38"]==$trueans[37]->TF)
{
    $num = $num + 7.1;
    echo "第38题正确！";
}
else{
  echo "第38题错误！";
}
if($trueans[37]->TF==1)
{
  echo "本题正确答案为A";
}elseif($trueans[37]->TF==2){
  echo "本题正确答案为B";
}elseif($trueans[37]->TF==3){
  echo "本题正确答案为C";
}elseif($trueans[37]->TF==4){
  echo "本题正确答案为D";
}elseif($trueans[37]->TF==5){
  echo "本题正确答案为E";
}elseif($trueans[37]->TF==6){
  echo "本题正确答案为F";
}elseif($trueans[37]->TF==7){
  echo "本题正确答案为G";
}elseif($trueans[37]->TF==8){
  echo "本题正确答案为H";
}elseif($trueans[37]->TF==9){
  echo "本题正确答案为I";
}elseif($trueans[37]->TF==10){
  echo "本题正确答案为J";
}elseif($trueans[37]->TF==11){
  echo "本题正确答案为K";
}else{
  echo "本题正确答案为L";
}
?>
</p>

<p style="font-size:20px;">
<?php
if($_POST["q39"]==$trueans[38]->TF)
{
    $num = $num + 7.1;
    echo "第39题正确！";
}
else{
  echo "第39题错误！";
}
if($trueans[38]->TF==1)
{
  echo "本题正确答案为A";
}elseif($trueans[38]->TF==2){
  echo "本题正确答案为B";
}elseif($trueans[38]->TF==3){
  echo "本题正确答案为C";
}elseif($trueans[38]->TF==4){
  echo "本题正确答案为D";
}elseif($trueans[38]->TF==5){
  echo "本题正确答案为E";
}elseif($trueans[38]->TF==6){
  echo "本题正确答案为F";
}elseif($trueans[38]->TF==7){
  echo "本题正确答案为G";
}elseif($trueans[38]->TF==8){
  echo "本题正确答案为H";
}elseif($trueans[38]->TF==9){
  echo "本题正确答案为I";
}elseif($trueans[38]->TF==10){
  echo "本题正确答案为J";
}elseif($trueans[38]->TF==11){
  echo "本题正确答案为K";
}else{
  echo "本题正确答案为L";
}
?>
</p>

<p style="font-size:20px;">
<?php
if($_POST["q40"]==$trueans[39]->TF)
{
    $num = $num + 7.1;
    echo "第40题正确！";
}
else{
  echo "第40题错误！";
}
if($trueans[39]->TF==1)
{
  echo "本题正确答案为A";
}elseif($trueans[39]->TF==2){
  echo "本题正确答案为B";
}elseif($trueans[39]->TF==3){
  echo "本题正确答案为C";
}elseif($trueans[39]->TF==4){
  echo "本题正确答案为D";
}elseif($trueans[39]->TF==5){
  echo "本题正确答案为E";
}elseif($trueans[39]->TF==6){
  echo "本题正确答案为F";
}elseif($trueans[39]->TF==7){
  echo "本题正确答案为G";
}elseif($trueans[39]->TF==8){
  echo "本题正确答案为H";
}elseif($trueans[39]->TF==9){
  echo "本题正确答案为I";
}elseif($trueans[39]->TF==10){
  echo "本题正确答案为J";
}elseif($trueans[39]->TF==11){
  echo "本题正确答案为K";
}else{
  echo "本题正确答案为L";
}
?>
</p>

<p style="font-size:20px;">
<?php
if($_POST["q41"]==$trueans[40]->TF)
{
    $num = $num + 7.1;
    echo "第41题正确！";
}
else{
  echo "第41题错误！";
}
if($trueans[40]->TF==1)
{
  echo "本题正确答案为A";
}elseif($trueans[40]->TF==2){
  echo "本题正确答案为B";
}elseif($trueans[40]->TF==3){
  echo "本题正确答案为C";
}elseif($trueans[40]->TF==4){
  echo "本题正确答案为D";
}elseif($trueans[40]->TF==5){
  echo "本题正确答案为E";
}elseif($trueans[40]->TF==6){
  echo "本题正确答案为F";
}elseif($trueans[40]->TF==7){
  echo "本题正确答案为G";
}elseif($trueans[40]->TF==8){
  echo "本题正确答案为H";
}elseif($trueans[40]->TF==9){
  echo "本题正确答案为I";
}elseif($trueans[40]->TF==10){
  echo "本题正确答案为J";
}elseif($trueans[40]->TF==11){
  echo "本题正确答案为K";
}else{
  echo "本题正确答案为L";
}
?>
</p>

<p style="font-size:20px;">
<?php
if($_POST["q42"]==$trueans[41]->TF)
{
    $num = $num + 7.1;
    echo "第42题正确！";
}
else{
  echo "第42题错误！";
}
if($trueans[41]->TF==1)
{
  echo "本题正确答案为A";
}elseif($trueans[41]->TF==2){
  echo "本题正确答案为B";
}elseif($trueans[41]->TF==3){
  echo "本题正确答案为C";
}elseif($trueans[41]->TF==4){
  echo "本题正确答案为D";
}elseif($trueans[41]->TF==5){
  echo "本题正确答案为E";
}elseif($trueans[41]->TF==6){
  echo "本题正确答案为F";
}elseif($trueans[41]->TF==7){
  echo "本题正确答案为G";
}elseif($trueans[41]->TF==8){
  echo "本题正确答案为H";
}elseif($trueans[41]->TF==9){
  echo "本题正确答案为I";
}elseif($trueans[41]->TF==10){
  echo "本题正确答案为J";
}elseif($trueans[41]->TF==11){
  echo "本题正确答案为K";
}else{
  echo "本题正确答案为L";
}
?>
</p>

<p style="font-size:20px;">
<?php
if($_POST["q43"]==$trueans[42]->TF)
{
    $num = $num +7.1;
    echo "第43题正确！";
}
else{
  echo "第43题错误！";
}
if($trueans[42]->TF==1)
{
  echo "本题正确答案为A";
}elseif($trueans[42]->TF==2){
  echo "本题正确答案为B";
}elseif($trueans[42]->TF==3){
  echo "本题正确答案为C";
}elseif($trueans[42]->TF==4){
  echo "本题正确答案为D";
}elseif($trueans[42]->TF==5){
  echo "本题正确答案为E";
}elseif($trueans[42]->TF==6){
  echo "本题正确答案为F";
}elseif($trueans[42]->TF==7){
  echo "本题正确答案为G";
}elseif($trueans[42]->TF==8){
  echo "本题正确答案为H";
}elseif($trueans[42]->TF==9){
  echo "本题正确答案为I";
}elseif($trueans[42]->TF==10){
  echo "本题正确答案为J";
}elseif($trueans[42]->TF==11){
  echo "本题正确答案为K";
}else{
  echo "本题正确答案为L";
}
?>
</p>

<p style="font-size:20px;">
<?php
if($_POST["q44"]==$trueans[43]->TF)
{
    $num = $num + 7.1;
    echo "第44题正确！";
}
else{
  echo "第44题错误！";
}
if($trueans[43]->TF==1)
{
  echo "本题正确答案为A";
}elseif($trueans[43]->TF==2){
  echo "本题正确答案为B";
}elseif($trueans[43]->TF==3){
  echo "本题正确答案为C";
}elseif($trueans[43]->TF==4){
  echo "本题正确答案为D";
}elseif($trueans[43]->TF==5){
  echo "本题正确答案为E";
}elseif($trueans[43]->TF==6){
  echo "本题正确答案为F";
}elseif($trueans[43]->TF==7){
  echo "本题正确答案为G";
}elseif($trueans[43]->TF==8){
  echo "本题正确答案为H";
}elseif($trueans[43]->TF==9){
  echo "本题正确答案为I";
}elseif($trueans[43]->TF==10){
  echo "本题正确答案为J";
}elseif($trueans[43]->TF==11){
  echo "本题正确答案为K";
}else{
  echo "本题正确答案为L";
}
?>
</p>

<p style="font-size:20px;">
<?php
if($_POST["q45"]==$trueans[44]->TF)
{
    $num = $num + 7.1;
    echo "第45题正确！";
}
else{
  echo "第45题错误！";
}
if($trueans[44]->TF==1)
{
  echo "本题正确答案为A";
}elseif($trueans[44]->TF==2){
  echo "本题正确答案为B";
}elseif($trueans[44]->TF==3){
  echo "本题正确答案为C";
}elseif($trueans[44]->TF==4){
  echo "本题正确答案为D";
}elseif($trueans[44]->TF==5){
  echo "本题正确答案为E";
}elseif($trueans[44]->TF==6){
  echo "本题正确答案为F";
}elseif($trueans[44]->TF==7){
  echo "本题正确答案为G";
}elseif($trueans[44]->TF==8){
  echo "本题正确答案为H";
}elseif($trueans[44]->TF==9){
  echo "本题正确答案为I";
}elseif($trueans[44]->TF==10){
  echo "本题正确答案为J";
}elseif($trueans[44]->TF==11){
  echo "本题正确答案为K";
}else{
  echo "本题正确答案为L";
}
?>
</p>

<p style="font-size:20px;">
<?php
if($_POST["q46"]==$trueans[45]->TF)
{
    $num = $num + 14.2;
    echo "第46题正确！";
}
else{
  echo "第46题错误！";
}
if($trueans[45]->TF==1)
{
  echo "本题正确答案为A";
}elseif($trueans[45]->TF==2){
  echo "本题正确答案为B";
}
elseif($trueans[45]->TF==3){
  echo "本题正确答案为C";
}else{
  echo "本题正确答案为D";
}
?>
</p>

<p style="font-size:20px;">
<?php
if($_POST["q47"]==$trueans[46]->TF)
{
    $num = $num + 14.2;
    echo "第47题正确！";
}
else{
  echo "第47题错误！";
}
if($trueans[46]->TF==1)
{
  echo "本题正确答案为A";
}elseif($trueans[46]->TF==2){
  echo "本题正确答案为B";
}
elseif($trueans[46]->TF==3){
  echo "本题正确答案为C";
}else{
  echo "本题正确答案为D";
}
?>
</p>
<p style="font-size:20px;">
<?php
if($_POST["q48"]==$trueans[47]->TF)
{
    $num = $num + 14.2;
    echo "第48题正确！";
}
else{
  echo "第48题错误！";
}
if($trueans[47]->TF==1)
{
  echo "本题正确答案为A";
}elseif($trueans[47]->TF==2){
  echo "本题正确答案为B";
}
elseif($trueans[47]->TF==3){
  echo "本题正确答案为C";
}else{
  echo "本题正确答案为D";
}
?>
</p>
<p style="font-size:20px;">
<?php
if($_POST["q49"]==$trueans[48]->TF)
{
    $num = $num + 14.2;
    echo "第49题正确！";
}
else{
  echo "第49题错误！";
}
if($trueans[48]->TF==1)
{
  echo "本题正确答案为A";
}elseif($trueans[48]->TF==2){
  echo "本题正确答案为B";
}
elseif($trueans[48]->TF==3){
  echo "本题正确答案为C";
}else{
  echo "本题正确答案为D";
}
?>
</p>
<p style="font-size:20px;">
<?php
if($_POST["q50"]==$trueans[49]->TF)
{
    $num = $num + 14.2;
    echo "第50题正确！";
}
else{
  echo "第50题错误！";
}
if($trueans[49]->TF==1)
{
  echo "本题正确答案为A";
}elseif($trueans[49]->TF==2){
  echo "本题正确答案为B";
}
elseif($trueans[49]->TF==3){
  echo "本题正确答案为C";
}else{
  echo "本题正确答案为D";
}
?>
</p>
<p style="font-size:20px;">
<?php
if($_POST["q51"]==4)
{
    $num = $num + 14.2;
    echo "第51题正确！";
}
else{
  echo "第51题错误！";
}
echo "本题正确答案为D";

?>
</p>
<p style="font-size:20px;">
<?php
if($_POST["q52"]==1)
{
    $num = $num + 14.2;
    echo "第52题正确！";
}
else{
  echo "第52题错误！";
}
echo "本题正确答案为A";

?>
</p>
<p style="font-size:20px;">
<?php
if($_POST["q53"]==4)
{
    $num = $num + 14.2;
    echo "第53题正确！";
}
else{
  echo "第53题错误！";
}
echo "本题正确答案为D";

?>
</p>
<p style="font-size:20px;">
<?php
if($_POST["q54"]==3)
{
    $num = $num + 14.2;
    echo "第54题正确！";
}
else{
  echo "第54题错误！";
}
echo "本题正确答案为C";

?>
</p>
<p style="font-size:20px;">
<?php
if($_POST["q55"]==2)
{
    $num = $num + 14.2;
    echo "第55题正确！";
}
else{
  echo "第55题错误！";
}
echo "本题正确答案为B";

?>
</p>

<p style="font-size:20px;">
<?php 
$testscore->translation=$_POST["Translation"];
echo "恭喜你！客观题得了{$num}分！";
?>
</p>
</ul>

<p style="font-size:20px;">
<?php 
$testscore->choice_score=$num;
$data=$testscore->insert();
?>
</p>

<?= LinkPager::widget(['pagination' => $pagination]) ?>
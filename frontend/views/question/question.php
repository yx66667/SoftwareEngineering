<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use app\models\Testscore;
use frontend\models\Score;

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

<h1>Online examination</h1>
<img class="img-responsive" src="statics\img\exam.jpg" alt="" style="width:1300px;height:400px;">
<ul>
</br>

<form id="form1" method="post"
action="/advanced/frontend/web/index.php?r=question/answer">

<p align="center" style="font-size:24px;">你还有
<input type="text" style='font-size:30px; border:18px; width:170px;' 
readonly="true" value="" id="time">的作答时间
</p>
<div class="container">
<div class="col-lg-8 bt-bottom-info ab">
<iframe width="100%" height="2500px" src="/advanced/frontend/web/statics/exam.pdf"></iframe>
</br>
<h3><span style="font-size: 40px">Part I: Writing</h3>
<p><textarea cols="80" rows="14" name="composition"></textarea></br></br></p>
</br>
<h3><span style="font-size: 40px">Part Ⅳ: Translation</h3>
<p><textarea cols="80" rows="14" name="Translation"></textarea></br></br></p>
</div>
<div class="col-lg-4 bt-bottom-info ab">
<p>
<?php
$name=$student->username;
$testid=$student->eid;
?>
<input type="hidden" name="name" value="<?php echo $name; ?>">
<input type="hidden" name="testid" value="<?php echo $testid; ?>">
</p>

<h3><span style="font-size: 40px">Part II: Listening Comprehension</h3>
<h4><span style="font-size: 30px">Section A</h4>
<p>1、
<input type="radio" name="q1" value=1>A ) 
<input type="radio" name="q1" value=2>B ) 
<input type="radio" name="q1" value=3>C ) 
<input type="radio" name="q1" value=4 checked="checked">D ) 
</p>
<p>2、
<input type="radio" name="q2" value=1>A ) 
<input type="radio" name="q2" value=2>B ) 
<input type="radio" name="q2" value=3>C ) 
<input type="radio" name="q2" value=4 checked="checked">D ) 
</p>
<p>3、
<input type="radio" name="q3" value=1>A ) 
<input type="radio" name="q3" value=2>B ) 
<input type="radio" name="q3" value=3>C ) 
<input type="radio" name="q3" value=4 checked="checked">D ) 
</p>
<p>4、
<input type="radio" name="q4" value=1>A ) 
<input type="radio" name="q4" value=2>B ) 
<input type="radio" name="q4" value=3>C ) 
<input type="radio" name="q4" value=4 checked="checked">D ) 
</p>
<p>5、
<input type="radio" name="q5" value=1>A ) 
<input type="radio" name="q5" value=2>B ) 
<input type="radio" name="q5" value=3>C ) 
<input type="radio" name="q5" value=4 checked="checked">D ) 
</p>
<p>6、
<input type="radio" name="q6" value=1>A ) 
<input type="radio" name="q6" value=2>B ) 
<input type="radio" name="q6" value=3>C ) 
<input type="radio" name="q6" value=4 checked="checked">D ) 
</p>
<p>7、
<input type="radio" name="q7" value=1>A ) 
<input type="radio" name="q7" value=2>B ) 
<input type="radio" name="q7" value=3>C ) 
<input type="radio" name="q7" value=4 checked="checked">D ) 
</p>
<p>8、
<input type="radio" name="q8" value=1>A ) 
<input type="radio" name="q8" value=2>B ) 
<input type="radio" name="q8" value=3>C ) 
<input type="radio" name="q8" value=4 checked="checked">D ) 
</p>
<h4><span style="font-size: 30px">Section B</h4>
<p>9、
<input type="radio" name="q9" value=1>A ) 
<input type="radio" name="q9" value=2>B ) 
<input type="radio" name="q9" value=3>C ) 
<input type="radio" name="q9" value=4 checked="checked">D ) 
</p>
<p>10、
<input type="radio" name="q10" value=1>A ) 
<input type="radio" name="q10" value=2>B ) 
<input type="radio" name="q10" value=3>C ) 
<input type="radio" name="q10" value=4 checked="checked">D ) 
</p>
<p>11、
<input type="radio" name="q11" value=1>A ) 
<input type="radio" name="q11" value=2>B ) 
<input type="radio" name="q11" value=3>C ) 
<input type="radio" name="q11" value=4 checked="checked">D ) 
</p>
<p>12、
<input type="radio" name="q12" value=1>A ) 
<input type="radio" name="q12" value=2>B ) 
<input type="radio" name="q12" value=3>C ) 
<input type="radio" name="q12" value=4 checked="checked">D ) 
</p>
<p>13、
<input type="radio" name="q13" value=1>A ) 
<input type="radio" name="q13" value=2>B ) 
<input type="radio" name="q13" value=3>C ) 
<input type="radio" name="q13" value=4 checked="checked">D ) 
</p>
<p>14、
<input type="radio" name="q14" value=1>A ) 
<input type="radio" name="q14" value=2>B ) 
<input type="radio" name="q14" value=3>C ) 
<input type="radio" name="q14" value=4 checked="checked">D ) 
</p>
<p>15、
<input type="radio" name="q15" value=1>A ) 
<input type="radio" name="q15" value=2>B ) 
<input type="radio" name="q15" value=3>C ) 
<input type="radio" name="q15" value=4 checked="checked">D ) 
</p>
<h4><span style="font-size: 30px">Section C</h4>
<p>16、
<input type="radio" name="q16" value=1>A ) 
<input type="radio" name="q16" value=2>B ) 
<input type="radio" name="q16" value=3>C ) 
<input type="radio" name="q16" value=4 checked="checked">D ) 
</p>
<p>17、
<input type="radio" name="q17" value=1>A ) 
<input type="radio" name="q17" value=2>B ) 
<input type="radio" name="q17" value=3>C ) 
<input type="radio" name="q17" value=4 checked="checked">D ) 
</p>
<p>18、
<input type="radio" name="q18" value=1>A ) 
<input type="radio" name="q18" value=2>B ) 
<input type="radio" name="q18" value=3>C ) 
<input type="radio" name="q18" value=4 checked="checked">D ) 
</p>
<p>19、
<input type="radio" name="q19" value=1>A ) 
<input type="radio" name="q19" value=2>B ) 
<input type="radio" name="q19" value=3>C ) 
<input type="radio" name="q19" value=4 checked="checked">D ) 
</p>
<p>20、
<input type="radio" name="q20" value=1>A ) 
<input type="radio" name="q20" value=2>B ) 
<input type="radio" name="q20" value=3>C ) 
<input type="radio" name="q20" value=4 checked="checked">D ) 
</p>
<p>21、
<input type="radio" name="q21" value=1>A ) 
<input type="radio" name="q21" value=2>B ) 
<input type="radio" name="q21" value=3>C ) 
<input type="radio" name="q21" value=4 checked="checked">D ) 
</p>
<p>22、
<input type="radio" name="q22" value=1>A ) 
<input type="radio" name="q22" value=2>B ) 
<input type="radio" name="q22" value=3>C ) 
<input type="radio" name="q22" value=4 checked="checked">D ) 
</p>
<p>23、
<input type="radio" name="q23" value=1>A ) 
<input type="radio" name="q23" value=2>B ) 
<input type="radio" name="q23" value=3>C ) 
<input type="radio" name="q23" value=4 checked="checked">D ) 
</p>

<p>24、
<input type="radio" name="q24" value=1>A ) 
<input type="radio" name="q24" value=2>B ) 
<input type="radio" name="q24" value=3>C ) 
<input type="radio" name="q24" value=4 checked="checked">D ) 
</p>

<p>25、
<input type="radio" name="q25" value=1>A ) 
<input type="radio" name="q25" value=2>B ) 
<input type="radio" name="q25" value=3>C ) 
<input type="radio" name="q25" value=4 checked="checked">D ) 
</p>

</br>
<h3><span style="font-size: 40px">Part Ⅲ: Reading Comprehension</h3>
<h4><span style="font-size: 30px">Section A</h4>
<p>26、
<input type="radio" name="q26" value=1>A ) 
<input type="radio" name="q26" value=2>B ) 
<input type="radio" name="q26" value=3>C ) 
<input type="radio" name="q26" value=4 checked="checked">D ) 
<input type="radio" name="q26" value=5>E ) 
<input type="radio" name="q26" value=6>F ) 
<input type="radio" name="q26" value=7>G ) 
<input type="radio" name="q26" value=8>H ) 
<input type="radio" name="q26" value=9>I ) 
<input type="radio" name="q26" value=10>J ) 
<input type="radio" name="q26" value=11>K ) 
<input type="radio" name="q26" value=12>L ) 
<input type="radio" name="q26" value=13>M ) 
<input type="radio" name="q26" value=14>N )
<input type="radio" name="q26" value=15>O )  
</p>

<p>27、
<input type="radio" name="q27" value=1>A ) 
<input type="radio" name="q27" value=2>B ) 
<input type="radio" name="q27" value=3>C ) 
<input type="radio" name="q27" value=4 checked="checked">D ) 
<input type="radio" name="q27" value=5>E ) 
<input type="radio" name="q27" value=6>F ) 
<input type="radio" name="q27" value=7>G ) 
<input type="radio" name="q27" value=8>H ) 
<input type="radio" name="q27" value=9>I ) 
<input type="radio" name="q27" value=10>J ) 
<input type="radio" name="q27" value=11>K ) 
<input type="radio" name="q27" value=12>L ) 
<input type="radio" name="q27" value=13>M ) 
<input type="radio" name="q27" value=14>N )
<input type="radio" name="q27" value=15>O )  
</p>

<p>28、
<input type="radio" name="q28" value=1>A ) 
<input type="radio" name="q28" value=2>B ) 
<input type="radio" name="q28" value=3>C ) 
<input type="radio" name="q28" value=4 checked="checked">D ) 
<input type="radio" name="q28" value=5>E ) 
<input type="radio" name="q28" value=6>F ) 
<input type="radio" name="q28" value=7>G ) 
<input type="radio" name="q28" value=8>H ) 
<input type="radio" name="q28" value=9>I ) 
<input type="radio" name="q28" value=10>J ) 
<input type="radio" name="q28" value=11>K ) 
<input type="radio" name="q28" value=12>L ) 
<input type="radio" name="q28" value=13>M ) 
<input type="radio" name="q28" value=14>N )
<input type="radio" name="q28" value=15>O )  
</p>

<p>29、
<input type="radio" name="q29" value=1>A ) 
<input type="radio" name="q29" value=2>B ) 
<input type="radio" name="q29" value=3>C ) 
<input type="radio" name="q29" value=4 checked="checked">D ) 
<input type="radio" name="q29" value=5>E ) 
<input type="radio" name="q29" value=6>F ) 
<input type="radio" name="q29" value=7>G ) 
<input type="radio" name="q29" value=8>H ) 
<input type="radio" name="q29" value=9>I ) 
<input type="radio" name="q29" value=10>J ) 
<input type="radio" name="q29" value=11>K ) 
<input type="radio" name="q29" value=12>L ) 
<input type="radio" name="q29" value=13>M ) 
<input type="radio" name="q29" value=14>N )
<input type="radio" name="q29" value=15>O )  
</p>

<p>30、
<input type="radio" name="q30" value=1>A ) 
<input type="radio" name="q30" value=2>B ) 
<input type="radio" name="q30" value=3>C ) 
<input type="radio" name="q30" value=4 checked="checked">D ) 
<input type="radio" name="q30" value=5>E ) 
<input type="radio" name="q30" value=6>F ) 
<input type="radio" name="q30" value=7>G ) 
<input type="radio" name="q30" value=8>H ) 
<input type="radio" name="q30" value=9>I ) 
<input type="radio" name="q30" value=10>J ) 
<input type="radio" name="q30" value=11>K ) 
<input type="radio" name="q30" value=12>L ) 
<input type="radio" name="q30" value=13>M ) 
<input type="radio" name="q30" value=14>N )
<input type="radio" name="q30" value=15>O )  
</p>

<p>31、
<input type="radio" name="q31" value=1>A ) 
<input type="radio" name="q31" value=2>B ) 
<input type="radio" name="q31" value=3>C ) 
<input type="radio" name="q31" value=4 checked="checked">D ) 
<input type="radio" name="q31" value=5>E ) 
<input type="radio" name="q31" value=6>F ) 
<input type="radio" name="q31" value=7>G ) 
<input type="radio" name="q31" value=8>H ) 
<input type="radio" name="q31" value=9>I ) 
<input type="radio" name="q31" value=10>J ) 
<input type="radio" name="q31" value=11>K ) 
<input type="radio" name="q31" value=12>L ) 
<input type="radio" name="q31" value=13>M ) 
<input type="radio" name="q31" value=14>N )
<input type="radio" name="q31" value=15>O )  
</p>

<p>32、
<input type="radio" name="q32" value=1>A ) 
<input type="radio" name="q32" value=2>B ) 
<input type="radio" name="q32" value=3>C ) 
<input type="radio" name="q32" value=4 checked="checked">D ) 
<input type="radio" name="q32" value=5>E ) 
<input type="radio" name="q32" value=6>F ) 
<input type="radio" name="q32" value=7>G ) 
<input type="radio" name="q32" value=8>H ) 
<input type="radio" name="q32" value=9>I ) 
<input type="radio" name="q32" value=10>J ) 
<input type="radio" name="q32" value=11>K ) 
<input type="radio" name="q32" value=12>L ) 
<input type="radio" name="q32" value=13>M ) 
<input type="radio" name="q32" value=14>N )
<input type="radio" name="q32" value=15>O )  
</p>

<p>33、
<input type="radio" name="q33" value=1>A ) 
<input type="radio" name="q33" value=2>B ) 
<input type="radio" name="q33" value=3>C ) 
<input type="radio" name="q33" value=4 checked="checked">D ) 
<input type="radio" name="q33" value=5>E ) 
<input type="radio" name="q33" value=6>F ) 
<input type="radio" name="q33" value=7>G ) 
<input type="radio" name="q33" value=8>H ) 
<input type="radio" name="q33" value=9>I ) 
<input type="radio" name="q33" value=10>J ) 
<input type="radio" name="q33" value=11>K ) 
<input type="radio" name="q33" value=12>L ) 
<input type="radio" name="q33" value=13>M ) 
<input type="radio" name="q33" value=14>N )
<input type="radio" name="q33" value=15>O )  
</p>

<p>34、
<input type="radio" name="q34" value=1>A ) 
<input type="radio" name="q34" value=2>B ) 
<input type="radio" name="q34" value=3>C ) 
<input type="radio" name="q34" value=4 checked="checked">D ) 
<input type="radio" name="q34" value=5>E ) 
<input type="radio" name="q34" value=6>F ) 
<input type="radio" name="q34" value=7>G ) 
<input type="radio" name="q34" value=8>H ) 
<input type="radio" name="q34" value=9>I ) 
<input type="radio" name="q34" value=10>J ) 
<input type="radio" name="q34" value=11>K ) 
<input type="radio" name="q34" value=12>L ) 
<input type="radio" name="q34" value=13>M ) 
<input type="radio" name="q34" value=14>N )
<input type="radio" name="q34" value=15>O )  
</p>

<p>35、
<input type="radio" name="q35" value=1>A ) 
<input type="radio" name="q35" value=2>B ) 
<input type="radio" name="q35" value=3>C ) 
<input type="radio" name="q35" value=4 checked="checked">D ) 
<input type="radio" name="q35" value=5>E ) 
<input type="radio" name="q35" value=6>F ) 
<input type="radio" name="q35" value=7>G ) 
<input type="radio" name="q35" value=8>H ) 
<input type="radio" name="q35" value=9>I ) 
<input type="radio" name="q35" value=10>J ) 
<input type="radio" name="q35" value=11>K ) 
<input type="radio" name="q35" value=12>L ) 
<input type="radio" name="q35" value=13>M ) 
<input type="radio" name="q35" value=14>N )
<input type="radio" name="q35" value=15>O )  
</p>

<h4><span style="font-size: 30px">Section B</h4>
<p>36、
<input type="radio" name="q36" value=1>A ) 
<input type="radio" name="q36" value=2>B ) 
<input type="radio" name="q36" value=3>C ) 
<input type="radio" name="q36" value=4 checked="checked">D ) 
<input type="radio" name="q36" value=5>E ) 
<input type="radio" name="q36" value=6>F ) 
<input type="radio" name="q36" value=7>G ) 
<input type="radio" name="q36" value=8>H ) 
<input type="radio" name="q36" value=9>I ) 
<input type="radio" name="q36" value=10>J ) 
<input type="radio" name="q36" value=11>K ) 
<input type="radio" name="q36" value=12>L ) 
</p>

<p>37、
<input type="radio" name="q37" value=1>A ) 
<input type="radio" name="q37" value=2>B ) 
<input type="radio" name="q37" value=3>C ) 
<input type="radio" name="q37" value=4 checked="checked">D ) 
<input type="radio" name="q37" value=5>E ) 
<input type="radio" name="q37" value=6>F ) 
<input type="radio" name="q37" value=7>G ) 
<input type="radio" name="q37" value=8>H ) 
<input type="radio" name="q37" value=9>I ) 
<input type="radio" name="q37" value=10>J ) 
<input type="radio" name="q37" value=11>K ) 
<input type="radio" name="q37" value=12>L ) 
</p>

<p>38、
<input type="radio" name="q38" value=1>A ) 
<input type="radio" name="q38" value=2>B ) 
<input type="radio" name="q38" value=3>C ) 
<input type="radio" name="q38" value=4 checked="checked">D ) 
<input type="radio" name="q38" value=5>E ) 
<input type="radio" name="q38" value=6>F ) 
<input type="radio" name="q38" value=7>G ) 
<input type="radio" name="q38" value=8>H ) 
<input type="radio" name="q38" value=9>I ) 
<input type="radio" name="q38" value=10>J ) 
<input type="radio" name="q38" value=11>K ) 
<input type="radio" name="q38" value=12>L ) 
</p>

<p>39、
<input type="radio" name="q39" value=1>A ) 
<input type="radio" name="q39" value=2>B ) 
<input type="radio" name="q39" value=3>C ) 
<input type="radio" name="q39" value=4 checked="checked">D ) 
<input type="radio" name="q39" value=5>E ) 
<input type="radio" name="q39" value=6>F ) 
<input type="radio" name="q39" value=7>G ) 
<input type="radio" name="q39" value=8>H ) 
<input type="radio" name="q39" value=9>I ) 
<input type="radio" name="q39" value=10>J ) 
<input type="radio" name="q39" value=11>K ) 
<input type="radio" name="q39" value=12>L ) 
</p>

<p>40、
<input type="radio" name="q40" value=1>A ) 
<input type="radio" name="q40" value=2>B ) 
<input type="radio" name="q40" value=3>C ) 
<input type="radio" name="q40" value=4 checked="checked">D ) 
<input type="radio" name="q40" value=5>E ) 
<input type="radio" name="q40" value=6>F ) 
<input type="radio" name="q40" value=7>G ) 
<input type="radio" name="q40" value=8>H ) 
<input type="radio" name="q40" value=9>I ) 
<input type="radio" name="q40" value=10>J ) 
<input type="radio" name="q40" value=11>K ) 
<input type="radio" name="q40" value=12>L ) 
</p>

<p>41、
<input type="radio" name="q41" value=1>A ) 
<input type="radio" name="q41" value=2>B ) 
<input type="radio" name="q41" value=3>C ) 
<input type="radio" name="q41" value=4 checked="checked">D ) 
<input type="radio" name="q41" value=5>E ) 
<input type="radio" name="q41" value=6>F ) 
<input type="radio" name="q41" value=7>G ) 
<input type="radio" name="q41" value=8>H ) 
<input type="radio" name="q41" value=9>I ) 
<input type="radio" name="q41" value=10>J ) 
<input type="radio" name="q41" value=11>K ) 
<input type="radio" name="q41" value=12>L ) 
</p>

<p>42、
<input type="radio" name="q42" value=1>A ) 
<input type="radio" name="q42" value=2>B ) 
<input type="radio" name="q42" value=3>C ) 
<input type="radio" name="q42" value=4 checked="checked">D ) 
<input type="radio" name="q42" value=5>E ) 
<input type="radio" name="q42" value=6>F ) 
<input type="radio" name="q42" value=7>G ) 
<input type="radio" name="q42" value=8>H ) 
<input type="radio" name="q42" value=9>I ) 
<input type="radio" name="q42" value=10>J ) 
<input type="radio" name="q42" value=11>K ) 
<input type="radio" name="q42" value=12>L ) 
</p>

<p>43、
<input type="radio" name="q43" value=1>A ) 
<input type="radio" name="q43" value=2>B ) 
<input type="radio" name="q43" value=3>C ) 
<input type="radio" name="q43" value=4 checked="checked">D ) 
<input type="radio" name="q43" value=5>E ) 
<input type="radio" name="q43" value=6>F ) 
<input type="radio" name="q43" value=7>G ) 
<input type="radio" name="q43" value=8>H ) 
<input type="radio" name="q43" value=9>I ) 
<input type="radio" name="q43" value=10>J ) 
<input type="radio" name="q43" value=11>K ) 
<input type="radio" name="q43" value=12>L ) 
</p>

<p>44、
<input type="radio" name="q44" value=1>A ) 
<input type="radio" name="q44" value=2>B ) 
<input type="radio" name="q44" value=3>C ) 
<input type="radio" name="q44" value=4 checked="checked">D ) 
<input type="radio" name="q44" value=5>E ) 
<input type="radio" name="q44" value=6>F ) 
<input type="radio" name="q44" value=7>G ) 
<input type="radio" name="q44" value=8>H ) 
<input type="radio" name="q44" value=9>I ) 
<input type="radio" name="q44" value=10>J ) 
<input type="radio" name="q44" value=11>K ) 
<input type="radio" name="q44" value=12>L ) 
</p>

<p>45、
<input type="radio" name="q45" value=1>A ) 
<input type="radio" name="q45" value=2>B ) 
<input type="radio" name="q45" value=3>C ) 
<input type="radio" name="q45" value=4 checked="checked">D ) 
<input type="radio" name="q45" value=5>E ) 
<input type="radio" name="q45" value=6>F ) 
<input type="radio" name="q45" value=7>G ) 
<input type="radio" name="q45" value=8>H ) 
<input type="radio" name="q45" value=9>I ) 
<input type="radio" name="q45" value=10>J ) 
<input type="radio" name="q45" value=11>K ) 
<input type="radio" name="q45" value=12>L ) 
</p>

<h4><span style="font-size: 30px">Section C</h4>
<p>46、
<input type="radio" name="q46" value=1>A ) 
<input type="radio" name="q46" value=2>B ) 
<input type="radio" name="q46" value=3>C ) 
<input type="radio" name="q46" value=4 checked="checked">D ) 
</p>
<p>47、
<input type="radio" name="q47" value=1>A ) 
<input type="radio" name="q47" value=2>B ) 
<input type="radio" name="q47" value=3>C ) 
<input type="radio" name="q47" value=4 checked="checked">D ) 
</p>
<p>48、
<input type="radio" name="q48" value=1>A ) 
<input type="radio" name="q48" value=2>B ) 
<input type="radio" name="q48" value=3>C ) 
<input type="radio" name="q48" value=4 checked="checked">D ) 
</p>
<p>49、
<input type="radio" name="q49" value=1>A ) 
<input type="radio" name="q49" value=2>B ) 
<input type="radio" name="q49" value=3>C ) 
<input type="radio" name="q49" value=4 checked="checked">D ) 
</p>
<p>50、
<input type="radio" name="q50" value=1>A ) 
<input type="radio" name="q50" value=2>B ) 
<input type="radio" name="q50" value=3>C ) 
<input type="radio" name="q50" value=4 checked="checked">D ) 
</p>
<p>51、
<input type="radio" name="q51" value=1>A ) 
<input type="radio" name="q51" value=2>B ) 
<input type="radio" name="q51" value=3>C ) 
<input type="radio" name="q51" value=4 checked="checked">D ) 
</p>
<p>52、
<input type="radio" name="q52" value=1>A ) 
<input type="radio" name="q52" value=2>B ) 
<input type="radio" name="q52" value=3>C ) 
<input type="radio" name="q52" value=4 checked="checked">D ) 
</p>
<p>53、
<input type="radio" name="q53" value=1>A ) 
<input type="radio" name="q53" value=2>B ) 
<input type="radio" name="q53" value=3>C ) 
<input type="radio" name="q53" value=4 checked="checked">D ) 
</p>
<p>54、
<input type="radio" name="q54" value=1>A ) 
<input type="radio" name="q54" value=2>B ) 
<input type="radio" name="q54" value=3>C ) 
<input type="radio" name="q54" value=4 checked="checked">D ) 
</p>
<p>55、
<input type="radio" name="q55" value=1>A ) 
<input type="radio" name="q55" value=2>B ) 
<input type="radio" name="q55" value=3>C ) 
<input type="radio" name="q55" value=4 checked="checked">D ) 
</p>
</br>
<p align="center"><span style="font-size: 30px"><input type="submit" value="提交试卷！" class="sub">
<input type="hidden" id="_csrf" name="<?PHP echo Yii::$app->request->csrfParam;?>" 
value="<?=\Yii::$app->request->csrfToken?>"/></span>
</p>
</div>
</div>

</form>
</ul>

<!-- 时间函数 -->
<script language="javascript">
var t = 7800;
var time = document.getElementById("time");
function fun()
{
  t--;
  time.value = Math.floor(t/(60*60))%24+"时"+Math.floor(t/60)%60+"分"+t%60+"秒";
  if(t<=0)
  {
    document.getElementById("form1").submit();
    //location.href="/advanced/frontend/web/index.php?r=question/answer";
    clearInterval(inter);
  }
}
var inter = setInterval("fun()",1000);
</script> 

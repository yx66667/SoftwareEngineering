<?php 
namespace backend\controllers;

use backend\models\ResendVerificationEmailForm;
use backend\models\VerifyEmailForm;
use backend\models\news;

$news= new news();
$news->title=$_POST["title"];
$news->content=$_POST["content"];
$news->date=date('Y-m-d h:i:s', time()); 
$data=$news->insert();
?>
<p align="center"><span style="font-size: 30px">
<?php
if($data)
{
    print_r("发送成功");

}
?>
</span></p>
<li><p align="center"><span style="font-size: 30px"><a href="/advanced/backend/web/index.php?r=home/newsadd">继续发送</a></span></p></li>

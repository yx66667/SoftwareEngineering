<?php
//查询成绩
namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use frontend\models\Score;
use frontend\models\Account;
class ScoreController extends Controller
{
    public function actionInquiry()
    {
        $model = new Account();
        if ($model->load($this->request->post())) {
            // 根据学生姓名查询学生信息 尚未考虑同名同姓的情况
            $student = Account::findOne([
                'username' => $model->username,
            ]);
            
            if ($student && $student->password === $model->password) {
                // 根据学生ID查询学生成绩
                $score = Score::findOne([
                    'student_name' => $model->username,
                ]);
                return $this->render('result', ['score' => $score]);
            } else {
                // 学生ID或密码错误
                Yii::$app->session->setFlash('error', '学生ID或密码错误！');
                $model->username='';
                $model->password='';
            }
        }
        
        return $this->render('index', ['model' => $model]);
    }
}
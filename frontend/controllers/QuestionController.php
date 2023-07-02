<?php

namespace frontend\controllers;

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Question;
use app\models\Trueans;
use app\models\Testscore;
use frontend\models\Account;
use frontend\models\Score;
use Yii;

class QuestionController extends Controller
{
    public function actionQuestion()
    {
        $query = Question::find();

        $questions = $query->orderBy('ID')->all();

        return $this->render('question', [
            'questions' => $questions
        ]);
    }

    public function actionAnswer()
    {
        $query = Trueans::find();

        $trueans = $query->orderBy('ID')->all();

        return $this->render('answer',[
            'trueans' => $trueans,
        ]);
    }

    public function actionScore()
    {
        $query = Testscore::find();

        $testscore = $query->orderBy('id')->all();

        return $this->render('question','answer',[
            'testscore' => $testscore,
        ]);
    }

    public function actionIndex()
    {
        $model = new Account();
        if ($model->load($this->request->post())) {
            // 根据学生姓名查询学生信息 尚未考虑同名同姓的情况
            $student = Account::findOne([
                'username' => $model->username
            ]);
            if ($student && $student->eid == $model->eid) {
                if($student->registered == 1){
                    return $this->render('question', ['student' => $student]);
                }else{
                // 未缴费
                Yii::$app->session->setFlash('error', '未缴费！');
                $model->username='';
                $model->eid='';
                }
            }
            else {
                // 学生姓名或考号错误
                Yii::$app->session->setFlash('error', '学生姓名或考号错误！');
                $model->username='';
                $model->eid='';
            }
        }
        
        return $this->render('index', ['model' => $model]);
    }

}



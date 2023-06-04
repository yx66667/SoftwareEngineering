<?php

namespace frontend\controllers;

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Question;
use app\models\Trueans;
use app\models\Testscore;
use app\models\Stu_account;
use frontend\models\Account;
use Yii;

class QuestionController extends Controller
{
    public function actionQuestion()
    {
        $query = Question::find();
       
        $pagination = new Pagination([
            'defaultPageSize' => 120,
            'totalCount' => $query->count(),
        ]);

        $questions = $query->orderBy('ID')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();


        return $this->render('question', [
            'questions' => $questions,
            'pagination' => $pagination
        ]);
    }

    public function actionAnswer()
    {
        $query = Trueans::find();

        $pagination = new Pagination([
            'defaultPageSize' => 120,
            'totalCount' => $query->count(),
        ]);

        $trueans = $query->orderBy('ID')
        ->offset($pagination->offset)
        ->limit($pagination->limit)
        ->all();

        return $this->render('answer',[
            'trueans' => $trueans,
            'pagination' => $pagination
        ]);
    }

    public function actionScore()
    {
        $query = Testscore::find();

        $pagination = new Pagination([
            'defaultPageSize' => 120,
            'totalCount' => $query->count(),
        ]);

        $testscore = $query->orderBy('id')
        ->offset($pagination->offset)
        ->limit($pagination->limit)
        ->all();

        return $this->render('question','answer',[
            'testscore' => $testscore,
            'pagination' => $pagination
        ]);
    }

    public function actionIndex()
    {
        $query = Stu_account::find();
        $stu_account = new Stu_account();

        $pagination = new Pagination([
            'defaultPageSize' => 120,
            'totalCount' => $query->count(),
        ]);

        $testscore = $query->orderBy('aid')
        ->offset($pagination->offset)
        ->limit($pagination->limit)
        ->all();

        return $this->render('index',[
            'stu_account' => $stu_account,
            'pagination' => $pagination
        ]);
    }

}



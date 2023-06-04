<?php
//报名、缴费
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Account;

class RegisterController extends Controller
{
    
    public function actionRegister()//报名
    {
        $model = new Account();
        $student=new Account();
        if ($model->load($this->request->post()) ) {
            $student = Account::findOne([
                'username' => $model->username,
            ]);
            
            if ($student && $student->identity_number == null) {
                $cur_num=Account::find()->count();
                $student->eid=$cur_num+1;
                $student->identity_number=$model->identity_number;
                if ($student->save()) {
                    Yii::$app->session->setFlash('success', '报名成功，请及时缴费');
                    return $this->redirect(['pay', 
                        'username' => $student->username,'identity_number'=>$student->identity_number,
                    ]);//跳转至缴费界面
                }
            }
            else{Yii::$app->session->setFlash('error', '信息输入错误');}//目前未考虑同名同姓的情况
        }

        return $this->render('register', [
            'model' => $student,
        ]);
    }
    public function actionPay($username,$identity_number)//缴费
    {
        $model = new Account();
        $student= $this->findModel($username,$identity_number);
        if ($this->request->post() &&($student->registered==0)) {//此处设定为点击按钮即完成缴费
            $student->registered=1;//缴费成功
            if ($student->save()) {
                Yii::$app->session->setFlash('success', '缴费成功');
                return $this->render('pay',[ 
                    'student'=>$student
                ]);
            }
        }else if($student->registered==1){
            Yii::$app->session->setFlash('error', '已缴费，请勿重复操作');
                return $this->render('pay',[ 
                    'student'=>$student
                ]);
        }
        return $this->render('pay',[ 
            'student'=>$student,
        ]);
    }
    protected function findModel($username,$identity_number)
    {
        if (($model = Account::findOne(['username' => $username,'identity_number' => $identity_number])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}

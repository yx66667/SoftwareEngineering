<?php

namespace frontend\controllers;
use frontend\models\Account;
use frontend\models\Tc_Account;

use frontend\models\Feeds;
use frontend\models\StaticVar;
use Yii;

/**
 * Statement：用户账号登录
 */

class LoginController extends \yii\web\Controller
{
    public $username;
    /**
     * 用户登录
     * @return mixed
     */

     public function actionSuccess(){
        $model3 = Tc_account::findOne(['username' => Yii::$app->params['username']]);
        return $this->render('success', ['model3' => $model3]);
    }
    
    public function actionLogin(){
        $model = new Account();
        $isLoginSuccess = false; //判断是否输入正确的用户名和密码
        $isLogin = true; //判断是否已经点击提交按钮
        if ($this->request->isPost && $model->load($this->request->post())){
            $model2 = Account::findOne(['username' => $model->username]);
            $model3 = Tc_account::findOne(['username' => $model->username]);
            if (($model2 && $model && (!strcmp($model->password, $model2->password))) ||
                ($model3 && $model && (!strcmp($model->password, $model3->password)))) {
                Yii::$app->params['username'] = $model->username;
                //teacher界面
                if ($model3) {
                   // return $this->redirect(['success']); 
                   return $this->render('welcome', ['model' => $model3]); 
                }
                //student界面
                return $this->render('welcome', ['model' => $model]); 
            }
        }
        // return $this->render('_login_form',[
        //     'model' => $model,
        // ]);
        return $this->render('_login_form',[
            'model' => $model,
            'isLoginSuccess' => $isLoginSuccess, // 将登录状态传递给视图文件
            'isLogin' => $isLogin, //已经点击登录按钮
        ]);
    }

    public function actionFeed()
    {
        $model = new Feeds();
        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $model->username = Yii::$app->request->getQueryParam('username');
                // date_default_timezone_set('PRC');
                $model->created_at = time();
                if($model->save())
                    return $this->redirect(['feed', 'model' => $model, 'username' => $model->username]);
            }
        } else {
            $model->loadDefaultValues();
        }
        return $this->render('feed', [
            'model' => $model,
        ]);
    }

}

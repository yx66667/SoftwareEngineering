<?php

namespace frontend\controllers;

use frontend\models\Account;
use frontend\models\AccountSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use Yii;

/**
 * Statement：用户账号注册
 * 实现了对账户的基本操作（增删改查）
 */
class AccountController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Account models.
     * 显示所有账户的列表
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AccountSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Account model.
     * 显示单个账户的详细信息
     * @param integer $aid
     * @param string $username
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($aid, $username)
    {
        return $this->render('view', [
            'model' => $this->findModel($aid, $username),
        ]);
    }

    /**
     * Creates a new Account model.
     * 创建新的账户，接收到POST请求并且模型数据加载成功且保存成功，就重定向到查看详情的页面
     * 否则，将模型传递给试图文件create.php显示创建页面
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Account();
        $model->registered = 0; // 设置 registered 属性的初值为0

        if ($this->request->isPost) {
            // if ($model->load($this->request->post()) && $model->save()) {
            //     //成功
            //     return $this->redirect(['view', 'aid' => $model->aid, 'username' => $model->username]);
            // }
            if ($model->load($this->request->post())) {
                $existingAccount = Account::findOne(['username' => $model->username]);
                if ($existingAccount !== null) {
                    Yii::$app->session->setFlash('error', '不能输入重复账号名！');
                    $model->username = ''; // 清空输入的账号名
                    $model->password = ''; // 清空输入的密码
                } else {
                    if ($model->save()) {
                        //成功
                        return $this->redirect(['view', 'aid' => $model->aid, 'username' => $model->username]);
                    }
                }
            }
        } else {
            $model->loadDefaultValues();
        }

        //失败
        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Account model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * 更新现有的账户信息
     * @param integer $aid
     * @param string $username
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($aid, $username)
    {
        $model = $this->findModel($aid, $username);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'aid' => $model->aid, 'username' => $model->username]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Account model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * 删除现有的账户
     * @param integer $aid
     * @param string $username
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($aid, $username)
    {
        $this->findModel($aid, $username)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Account model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * 根据账户的主键值查找对应的账户模型
     * @param integer $aid
     * @param string $username
     * @return Account the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($aid, $username)
    {
        if (($model = Account::findOne(['aid' => $aid, 'username' => $username])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}

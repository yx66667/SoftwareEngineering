<?php

namespace backend\controllers;

use backend\models\UserManage;
use backend\models\UserManageSearch;
use backend\models\Student2Search;
use backend\models\Student2;

use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * Team：Novas
 * Author：刘嗣旸
 * Date：2023/2/9
 * Statement：后台用户管理
 */
class Student2Controller extends Controller
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
                    // 'actions' => [
                    //     'delete' => ['POST'],
                    // ],
                ],
            ]
        );
    }

    /**
     * Lists all UserManage models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new Student2Search();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single UserManage model.
     * @param integer $aid
     * @param string $username
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($student_name)
    {
        return $this->render('view', [
            'model' => $this->findModel($student_name),
        ]);
    }

    /**
     * Creates a new UserManage model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new student2();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'student_name' => $model->student_name]);
            }
        } else {
            $model->loadDefaultValues();//设置对象属性（也称为属性或变量）的默认值。
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing UserManage model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $aid
     * @param string $username
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($student_name)
    {
        $model = $this->findModel($student_name);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'student_name' => $model->student_name]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing UserManage model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $aid
     * @param string $username
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDeleteDefault($student_name)
    {
        $this->findModel($student_name)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the UserManage model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $aid
     * @param string $username
     * @return student2 the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($student_name)
    {
        if (($model = student2::findOne(['student_name' => $student_name])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    /**
     * Summary of actionDelete
     * @param integer $aid
     * @param string $username
     * @return void
     */
    public function actionDelete($student_name){
        $this->actionDeleteDefault($student_name);
    }

}

<?php

namespace backend\controllers;

use backend\models\UploadForm;
use yii\web\UploadedFile;

use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * Team：Novas
 * Author：刘嗣旸
 * Date：2023/2/9
 * Statement：后台用户管理
 */
class PaperController extends Controller
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
        
            $model = new UploadForm();
    
            if ($this->request->isPost) {
                $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
                if ($model->upload()) {
                    // 文件上传成功
                    // return $this->render('index');
                    // return;
                }
            }
    
            return $this->render('index', ['model' => $model]);
        
    }
   
    




    
}

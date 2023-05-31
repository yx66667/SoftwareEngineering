<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\UserManage */

$this->title = 'Update User Manage: ' . $model->student_name;
$this->params['breadcrumbs'][] = ['label' => 'User Manages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->student_name, 'url' => ['view', 'choice_score' => $model->choice_score,'compo_score' => $model->compo_score, 'trans_score'=> $model->trans_score,'total_score'=> $model->total_score]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-manage-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\UserManage */

$this->title = 'Update User Manage: ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'User Manages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'TF' => $model->TF]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-manage-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

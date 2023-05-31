<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\data\ActiveDataProvider;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserManageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User Manage Panel';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="student2-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Here to Create User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            // ['class' => 'yii\grid\SerialColumn'],

            'student_name',
            'choice_score',
            'compo_score',
            'trans_score',
            'total_score',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    
        
    ]); ?>
        
    

    <?php Pjax::end(); ?>

</div>
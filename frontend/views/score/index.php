<!-- index.php -->
<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<h1>学生成绩查询</h1>
<?php if (Yii::$app->session->hasFlash('error')): ?>
    <?= Yii::$app->session->getFlash('error') ?>
<?php else: ?>
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'username')->textInput() ?>
    <?= $form->field($model, 'password')->passwordInput() ?>

    <div class="form-group">
        <?= Html::submitButton('查询', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>
<?php endif; ?>

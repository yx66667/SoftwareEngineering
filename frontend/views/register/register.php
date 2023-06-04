<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin(); ?>
<h1>考试报名</h1>
<?php if (Yii::$app->session->hasFlash('error')): ?>
    <?= Yii::$app->session->getFlash('error') ?>
<?php else: ?>
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'username')->textInput() ?>
    <?= $form->field($model,'identity_number')->passwordInput() ?>
    <div class="form-group">
        <?= Html::submitButton('报名', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>
<?php endif; ?>

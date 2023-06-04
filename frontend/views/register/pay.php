<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;?>
<h1>考试缴费</h1>
<?php if ($student): ?>
    <p>学生：<?= $student->username ?></p>
    <p>身份证号：<?= $student->identity_number ?></p>
    <p>准考证号：<?= $student->eid ?></p>
    <?php $form = ActiveForm::begin(); ?>
        <div class="form-group">
        <?= Html::submitButton('缴费', ['class' => 'btn btn-primary']) ?>
        </div>
        <?php if (Yii::$app->session->hasFlash('success')): ?>
            <?= Yii::$app->session->getFlash('success') ?>
        <?php else: ?>
            <?= Yii::$app->session->getFlash('error') ?>
        <?php endif;?>
    <?php ActiveForm::end(); ?>
<?php else: ?>
    <p>未查询到该考生的报名信息</p>
<?php endif; ?>

<?php
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin([
    'options' => [
        'enctype' => 'multipart/form-data',
        'class' => 'form-horizontal'
    ],
    'fieldConfig' => [
        'template' => "{label}\n<div class=\"col-sm-8\">{input}</div>\n<div class=\"col-sm-4\">{error}</div>",
        'labelOptions' => ['class' => 'col-sm-4 control-label'],
        'errorOptions' => ['class' => 'help-block']
    ]
]); ?>

    <?= $form->field($model, 'File', [
        'inputOptions' => [
            'class' => 'form-control',
            'multiple' => false
        ]
    ])->fileInput() ?>
<label class="col-sm-4 control-label" for="uploadform-imagefile"> 上传的文件名称必须为eaxm.pdf</label>

    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-8">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

<?php ActiveForm::end() ?>
<dd><a href="/advanced/backend/web/index.php?r=login/user-admin">返回主页</a></dd>

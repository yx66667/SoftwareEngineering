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

    <?= $form->field($model, 'imageFile', [
        'inputOptions' => [
            'class' => 'form-control',
            'multiple' => false
        ]
    ])->fileInput() ?>

    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-8">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

<?php ActiveForm::end() ?>
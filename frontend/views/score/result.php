<!-- result.php -->
<h1>学生成绩查询结果</h1>

<?php if ($score): ?>
    <p>学生：<?= $score->student_name ?></p>
    <p>选择题得分：<?= $score->choice_score ?></p>
    <p>作文得分：<?= $score->compo_score ?></p>
    <p>翻译得分：<?= $score->trans_score ?></p>
    <p>总分：<?= $score->total_score ?></p>
<?php else: ?>
    <p>未查询到成绩</p>
<?php endif; ?>

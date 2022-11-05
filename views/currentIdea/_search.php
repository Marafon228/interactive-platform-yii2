<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\CurrentIdeaSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="current-idea-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'participation_experience_count') ?>

    <?= $form->field($model, 'id_team_captain') ?>

    <?= $form->field($model, 'selected_task') ?>

    <?= $form->field($model, 'summary') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

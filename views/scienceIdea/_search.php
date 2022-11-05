<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ScienceIdeaSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="science-idea-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'inn') ?>

    <?= $form->field($model, 'address') ?>

    <?= $form->field($model, 'nomination') ?>

    <?= $form->field($model, 'direction') ?>

    <?php // echo $form->field($model, 'revenue') ?>

    <?php // echo $form->field($model, 'project_readiness_stage') ?>

    <?php // echo $form->field($model, 'experience_participation') ?>

    <?php // echo $form->field($model, 'name') ?>

    <?php // echo $form->field($model, 'link_project') ?>

    <?php // echo $form->field($model, 'presentation') ?>

    <?php // echo $form->field($model, 'business_plan') ?>

    <?php // echo $form->field($model, 'copies_security_documents') ?>

    <?php // echo $form->field($model, 'confirmation_project_development') ?>

    <?php // echo $form->field($model, 'media_file') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

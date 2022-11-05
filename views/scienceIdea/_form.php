<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ScienceIdea $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="science-idea-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'inn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nomination')->textInput() ?>

    <?= $form->field($model, 'direction')->textInput() ?>

    <?= $form->field($model, 'revenue')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'project_readiness_stage')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'experience_participation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link_project')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'presentation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'business_plan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'copies_security_documents')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'confirmation_project_development')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'media_file')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

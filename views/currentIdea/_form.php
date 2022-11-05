<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\CurrentIdea $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="current-idea-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'participation_experience_count')->textInput() ?>

    <?= $form->field($model, 'id_team_captain')->textInput() ?>

    <?= $form->field($model, 'selected_task')->textInput() ?>

    <?= $form->field($model, 'summary')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

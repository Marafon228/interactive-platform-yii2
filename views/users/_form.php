<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Users $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_of_birth')->textInput() ?>

    <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'citizenship')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gender')->textInput() ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'education')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'employment')->textInput() ?>

    <?= $form->field($model, 'work_experience')->textInput() ?>

    <?= $form->field($model, 'skills')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'achievements')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'presence_team')->textInput() ?>

    <?= $form->field($model, 'role_team')->textInput() ?>

    <?= $form->field($model, 'patent')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company')->textInput(['maxlength' => true]) ?>

    <?/*= $form->field($model, 'email_verified_at')->textInput() */?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'passwordConfirm')->passwordInput(['maxlength' => true]) ?>

    <?/*= $form->field($model, 'profile_image')->textInput(['maxlength' => true]) */?>

    <?/*= $form->field($model, 'id_current_idea')->textInput() */?>

    <?/*= $form->field($model, 'id_science_idea')->textInput() */?>

    <?/*= $form->field($model, 'remember_token')->textInput(['maxlength' => true]) */?>

    <?/*= $form->field($model, 'created_at')->textInput() */?>

    <?/*= $form->field($model, 'updated_at')->textInput() */?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

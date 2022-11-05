<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\AnyIdeasUsers $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="any-ideas-users-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_any_idea')->textInput() ?>

    <?= $form->field($model, 'id_user')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\CurrentIdea $model */

$this->title = 'Update Current Idea: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Current Ideas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="current-idea-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

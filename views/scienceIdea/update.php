<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ScienceIdea $model */

$this->title = 'Update Science Idea: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Science Ideas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="science-idea-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

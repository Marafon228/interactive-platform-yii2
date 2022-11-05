<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\CurrentIdea $model */

$this->title = 'Create Current Idea';
$this->params['breadcrumbs'][] = ['label' => 'Current Ideas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="current-idea-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

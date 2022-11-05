<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ScienceIdea $model */

$this->title = 'Create Science Idea';
$this->params['breadcrumbs'][] = ['label' => 'Science Ideas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="science-idea-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
